<?php

use Safaricom\Mpesa\Mpesa;

defined('BASEPATH') or exit('No direct script access allowed');

class B2c extends CI_Controller
{
    public function index()
    {
        $request = file_get_contents('php://input');
        $this->db->insert('errors', array('error' => json_encode($request)));
        $result = TRUE;
        $Date = date('Y-m-d H:i:s', time());
        $ResultType = htmlspecialchars($request['Result']['ResultType'], ENT_QUOTES);
        $ResultCode = htmlspecialchars($request['Result']['ResultCode'], ENT_QUOTES);
        $ResultDesc = htmlspecialchars($request['Result']['ResultDesc'], ENT_QUOTES);
        $OriginatorConversationID = htmlspecialchars($request['Result']['OriginatorConversationID'], ENT_QUOTES);
        $ConversationID = htmlspecialchars($request['Result']['ConversationID'], ENT_QUOTES);
        $TransactionID = htmlspecialchars($request['Result']['TransactionID'], ENT_QUOTES);
        $Key = htmlspecialchars($request['Result']['ReferenceData']['ReferenceItem']['Key'], ENT_QUOTES);
        $Value = htmlspecialchars($request['Result']['ReferenceData']['ReferenceItem']['Value'], ENT_QUOTES);
        //initialize success variables
        $TransactionAmount = 0;
        $TransactionReceipt = '';
        $ReceiverPartyPublicName = '';
        $TransactionCompletedDateTime = '';
        $B2CUtilityAccountAvailableFunds = 0;
        $B2CWorkingAccountAvailableFunds = 0;
        $B2CRecipientIsRegisteredCustomer = '';
        $B2CChargesPaidAccountAvailableFunds = 0;
        $b2cStatus = 3;
        $status = 2;

        if ($ResultCode == '0') //success
        {
            $TransactionAmount = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][0]['Value'], ENT_QUOTES);
            $TransactionReceipt = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][1]['Value'], ENT_QUOTES);
            $ReceiverPartyPublicName = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][2]['Value'], ENT_QUOTES);
            $TransactionCompletedDateTime = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][3]['Value'], ENT_QUOTES);
            $B2CUtilityAccountAvailableFunds = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][4]['Value'], ENT_QUOTES);
            $B2CWorkingAccountAvailableFunds = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][5]['Value'], ENT_QUOTES);
            $B2CRecipientIsRegisteredCustomer = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][6]['Value'], ENT_QUOTES);
            $B2CChargesPaidAccountAvailableFunds = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][7]['Value'], ENT_QUOTES);
            $personalDetails = explode("-", $ReceiverPartyPublicName);
            $name = $personalDetails[1];
            $phone = $personalDetails[0];
            $b2cStatus = 2;
            $status = 1;
        }

        $mpesaB2C['recipient_mpesa_name'] = $name ?? '';
        $mpesaB2C['request_feedback_code'] = $ResultCode;
        $mpesaB2C['request_feedback_description'] = $ResultDesc;
        $mpesaB2C['result_type'] = $ResultType;
        $mpesaB2C['charges_paid_ac_funds'] = $B2CChargesPaidAccountAvailableFunds;
        $mpesaB2C['is_recipient_registered'] = $B2CRecipientIsRegisteredCustomer;
        $mpesaB2C['mpesa_transaction_id'] = $TransactionReceipt; //(Mpesa Reference number)
        $mpesaB2C['utility_funds_balance'] = $B2CUtilityAccountAvailableFunds;
        $mpesaB2C['working_funds_balance'] = $B2CWorkingAccountAvailableFunds;
        $mpesaB2C['time_request_completed'] = $Date;
        $mpesaB2C['mpesa_completed_time'] = $Date;
        $mpesaB2C['status'] = $b2cStatus;


        $this->db->where('mpesa_transaction_id', $OriginatorConversationID)->set($mpesaB2C)->update('the_b2c');


        $transaction['the_transaction_status'] = 1;
        $transaction['the_transaction_reference'] = $TransactionReceipt;


        $this->db->where('the_transaction_reference', $OriginatorConversationID)->set($mpesaB2C)->update('the_transactions');

        return ["status" => $result];
    }

    public function thisone()
    {
        $request = file_get_contents('php://input');
        $this->db->insert('errors', array('error' => json_encode($request)));
        $result = TRUE;
        $Date = date('Y-m-d H:i:s', time());
        $ResultType = htmlspecialchars($request['Result']['ResultType'], ENT_QUOTES);
        $ResultCode = htmlspecialchars($request['Result']['ResultCode'], ENT_QUOTES);
        $ResultDesc = htmlspecialchars($request['Result']['ResultDesc'], ENT_QUOTES);
        $OriginatorConversationID = htmlspecialchars($request['Result']['OriginatorConversationID'], ENT_QUOTES);
        $ConversationID = htmlspecialchars($request['Result']['ConversationID'], ENT_QUOTES);
        $TransactionID = htmlspecialchars($request['Result']['TransactionID'], ENT_QUOTES);
        $Key = htmlspecialchars($request['Result']['ReferenceData']['ReferenceItem']['Key'], ENT_QUOTES);
        $Value = htmlspecialchars($request['Result']['ReferenceData']['ReferenceItem']['Value'], ENT_QUOTES);
        //initialize success variables
        $TransactionAmount = 0;
        $TransactionReceipt = '';
        $ReceiverPartyPublicName = '';
        $TransactionCompletedDateTime = '';
        $B2CUtilityAccountAvailableFunds = 0;
        $B2CWorkingAccountAvailableFunds = 0;
        $B2CRecipientIsRegisteredCustomer = '';
        $B2CChargesPaidAccountAvailableFunds = 0;
        $b2cStatus = 3;
        $status = 2;

        if ($ResultCode == '0') //success
        {
            $TransactionAmount = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][0]['Value'], ENT_QUOTES);
            $TransactionReceipt = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][1]['Value'], ENT_QUOTES);
            $ReceiverPartyPublicName = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][2]['Value'], ENT_QUOTES);
            $TransactionCompletedDateTime = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][3]['Value'], ENT_QUOTES);
            $B2CUtilityAccountAvailableFunds = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][4]['Value'], ENT_QUOTES);
            $B2CWorkingAccountAvailableFunds = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][5]['Value'], ENT_QUOTES);
            $B2CRecipientIsRegisteredCustomer = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][6]['Value'], ENT_QUOTES);
            $B2CChargesPaidAccountAvailableFunds = htmlspecialchars($request['Result']['ResultParameters']['ResultParameter'][7]['Value'], ENT_QUOTES);
            $personalDetails = explode("-", $ReceiverPartyPublicName);
            $name = $personalDetails[1];
            $phone = $personalDetails[0];
            $b2cStatus = 2;
            $status = 1;
        }

        $mpesaB2C['recipient_mpesa_name'] = $name ?? '';
        $mpesaB2C['request_feedback_code'] = $ResultCode;
        $mpesaB2C['request_feedback_description'] = $ResultDesc;
        $mpesaB2C['result_type'] = $ResultType;
        $mpesaB2C['charges_paid_ac_funds'] = $B2CChargesPaidAccountAvailableFunds;
        $mpesaB2C['is_recipient_registered'] = $B2CRecipientIsRegisteredCustomer;
        $mpesaB2C['mpesa_transaction_id'] = $TransactionReceipt; //(Mpesa Reference number)
        $mpesaB2C['utility_funds_balance'] = $B2CUtilityAccountAvailableFunds;
        $mpesaB2C['working_funds_balance'] = $B2CWorkingAccountAvailableFunds;
        $mpesaB2C['time_request_completed'] = $Date;
        $mpesaB2C['mpesa_completed_time'] = $Date;
        $mpesaB2C['status'] = $b2cStatus;


        $this->db->where('mpesa_transaction_id', $OriginatorConversationID)->set($mpesaB2C)->update('the_b2c');


        $transaction['the_transaction_status'] = 1;
        $transaction['the_transaction_reference'] = $TransactionReceipt;


        $this->db->where('the_transaction_reference', $OriginatorConversationID)->set($mpesaB2C)->update('the_transactions');

        return ["status" => $result];
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
