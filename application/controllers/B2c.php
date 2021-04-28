<?php

defined('BASEPATH') or exit('No direct script access allowed');

class B2c extends CI_Controller
{
    public function index()
    {
        $request = file_get_contents('php://input');
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
            'the_transaction_status' => 2, // 0 failed / 1 success / 2 pending / 3 error
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
            'request' => $request,
            'TransactionType' => $TransactionType,
            'MpesaCode' => $MpesaCode,
            'PayBillBalance' => $PayBillBalance,
            'ThirdPartyTransID' => $ThirdPartyTransID,
            'InvoiceNumber' => $InvoiceNumber,
            'amount' => $amount,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'MiddleName' => $MiddleName,
            'phoneVals' => $phoneVals,
            'phone' => $phone,
            'ShortCode' => $ShortCode,
            'accountNumber' => $accountNumber
        );

        $this->db->insert('the_transactions', $currentTrans);
        $this->db->insert('the_paybill', $paybillings);
    }

    private function phoneFormat($phone)
    {
        return $phone;
    }
}
