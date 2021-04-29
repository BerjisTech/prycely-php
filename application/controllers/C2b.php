<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C2b extends CI_Controller
{
    public function index()
    {
        $request = file_get_contents('php://input');
        $request = json_decode($request, TRUE);
        print_r($request);
        $this->db->insert('errors', array('error' => json_encode($request)));
        $TransactionType = $request['TransactionType'];
        $MpesaCode = $request["TransID"];
        $PayBillBalance = $request["OrgAccountBalance"];
        $ThirdPartyTransID = $request["ThirdPartyTransID"];
        $InvoiceNumber = $request["InvoiceNumber"];
        $amount = $request["TransAmount"];
        $FirstName = isset($request["FirstName"]) ? $request["FirstName"] : "";
        $LastName = isset($request["LastName"]) ? $request["LastName"] : "";
        $MiddleName = isset($request["MiddleName"]) ? $request["MiddleName"] : "";
        $phone = $request["MSISDN"];
        $phoneVals = json_decode($this->phoneFormat($phone), TRUE);
        $phone = $phoneVals["formattedPhone"];
        $ShortCode = $request["BusinessShortCode"];
        $accountNumber = strtoupper($request['BillRefNumber']);

        $currentTrans = array(
            'the_transaction_id' => '',
            'the_transaction_user' => '',
            'the_transaction_date' => time(),
            'the_transaction_start' => time(),
            'the_transaction_end' => time(),
            'the_transaction_amount' => $amount,
            'the_transaction_status' => 1, // 0 failed / 1 success / 2 pending / 3 error
            'the_transaction_currency' => 'KES',
            'the_transaction_reference' => $MpesaCode,
            'the_transaction_category' => 0, //
            'the_transaction_level' => '', // 2 group/ 1 personal
            'the_transaction_type' => 1, // 1 deposit / 2 withdraw / 3 transfer / 4 send
            'the_transaction_wallet' => '',
            'the_transaction_group' => '',
            'the_transaction_purpose' => '',
            'the_transaction_comment' => 'Paybill Payment',
            'the_transaction_mode' => 'Mpesa Paybill'
        );

        $paybillings = array(
            'request' => json_encode($request),
            'TransactionType' => $TransactionType,
            'MpesaCode' => $MpesaCode,
            'PayBillBalance' => $PayBillBalance,
            'ThirdPartyTransID' => $ThirdPartyTransID,
            'InvoiceNumber' => $InvoiceNumber,
            'amount' => $amount,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'MiddleName' => $MiddleName,
            'phoneVals' => json_encode($phoneVals),
            'phone' => $phone,
            'ShortCode' => $ShortCode,
            'accountNumber' => $accountNumber
        );

        $this->db->insert('the_paybill', $paybillings);

        if ($this->db->where('the_transaction_reference', $MpesaCode)->get('the_transactions')->num_rows() > 0) {
            $currentTrans['the_transaction_comment'] = 'Showing STK';
            $currentTrans['the_transaction_mode'] = 'Mpesa STK';
            $this->db->where('the_transaction_reference', $MpesaCode)->set($currentTrans)->update('the_transactions');
        } else {
            $this->db->insert('the_transactions', $currentTrans);
        }
    }

    private function phoneFormat($phone)
    { //initialize valuables
        $status = FALSE;
        $formattedPhone = '';
        //remove white spaces
        $phone = trim($phone);
        $phone = str_replace(" ", "", $phone);
        //remove -, (, and )
        $phone = str_replace("-", "", $phone);
        $phone = str_replace("(", "", $phone);
        $phone = str_replace(")", "", $phone);
        //validate - all should begin with 254
        if (strlen($phone) >= 9 && strlen($phone) <= 13) {
            if (substr($phone, 0, 2) == "07") {
                $phone = substr_replace($phone, "254", 0, 1);
            } elseif (substr($phone, 0, 4) == "+254") {
                $phone = substr_replace($phone, "", 0, 1);
            } elseif (substr($phone, 0, 1) === "7") {
                $phone = substr_replace($phone, "254", 0, 0);
            } elseif (substr($phone, 0, 1) === "1") {
                $phone = substr_replace($phone, "254", 0, 0);
            } elseif (substr($phone, 0, 2) == "01") {
                $phone = substr_replace($phone, "254", 0, 1);
            }
            if (substr($phone, 0, 3) == "254" && strlen($phone) == 12 && is_numeric($phone)) {
                $status = TRUE;
                $formattedPhone = $phone;
            }
        }
        $array = array('status' => $status, 'formattedPhone' => $formattedPhone);
        return json_encode($array);
    }
}
