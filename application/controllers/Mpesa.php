<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mpesa extends CI_Controller
{
    public function index()
    {
        print_r($this->generateAccessToken());
    }

    public function register_url()
    {
        date_default_timezone_set('Africa/Nairobi');
        $now = date('Y-m-d H:i:s');
        //include 'functions.php';
        $accessVals = $this->generateAccessToken();
        if ($accessVals['status'] == 1) {
            $accessToken = "Bearer " . $accessVals['token'];
            // The data to send to the API
            $postData = array(
                'ValidationURL' => "https://prycely.com/thecalls/validation", //VALIDATING TRANSACTIONS KA ZINAEXIST 
                'ConfirmationURL' => "https://prycely.com/thecalls/c2b", //PAYBILL PAYMENT DATA HITS HERE
                'ResponseType' => "Completed",
                'ShortCode' => '4072015' //PAYBILL
            );
            $requestBody = json_encode($postData);
            // Setup cURL
            $ch = curl_init('https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl');
            curl_setopt_array($ch, array(
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: ' . $accessToken
                ),
                CURLOPT_POSTFIELDS => $requestBody
            ));
            // Send the request
            $response = curl_exec($ch);
            // Check for errors
            if ($response === FALSE) {
                die(curl_error($ch));
            } else {
                $requestVals = json_decode($response, true);
                echo $response . "<br/><br/><br/>";
            }
        } else {
            echo "Could not generate access token";
        }
    }

    public function stk($phone, $amount, $reference, $description, $level, $which, $purpose)
    {

        $group = 0;
        $wallet = $which;

        if ($level == '2') {
            $group = $which;
            $wallet = 0;
        }

        $token = $this->generateAccessToken();
        $token = $token['token'];

        if (isset($token)) {
            $accessToken = "Bearer " . $token;

            $shortCode = '4072015';
            $passKey = $this->db->where('the_app', 2)->get('the_privates')->row()->the_passkey;
            $timestamp = date('YmdHis', time());
            $password = base64_encode($shortCode . $passKey . $timestamp);

            // The data to send to the API
            $postData = array(
                'BusinessShortCode' => $shortCode,
                'Password' => $password,
                'Timestamp' => $timestamp,
                'TransactionType' => 'CustomerPayBillOnline',
                'Amount' => (int)$amount,
                'PartyA' => $phone,
                'PartyB' => $shortCode,
                'PhoneNumber' => $phone,
                'CallBackURL' => 'https://prycely.com/mpesa/stkcallback',
                'AccountReference' => $reference,
                'TransactionDesc' => $description
            );

            $requestBody = json_encode($postData);

            // Setup cURL
            $ch = curl_init('https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
            curl_setopt_array($ch, array(
                CURLOPT_POST => TRUE,
                CURLOPT_SSL_VERIFYPEER => FALSE,
                CURLOPT_SSL_VERIFYHOST => FALSE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: ' . $accessToken
                ),
                CURLOPT_POSTFIELDS => $requestBody
            ));

            // Send the request
            $response = curl_exec($ch);

            // Check for errors
            if ($response === FALSE) {
                die("CURL ERROR " . curl_error($ch));
            }

            $requestVals = json_decode($response, TRUE);

            $MerchantRequestID = isset($requestVals['MerchantRequestID']) ? $requestVals['MerchantRequestID'] : '';
            $CheckoutRequestID = isset($requestVals['CheckoutRequestID']) ? $requestVals['CheckoutRequestID'] : '';
            $ResponseCode = isset($requestVals['ResponseCode']) ? $requestVals['ResponseCode'] : '';
            $ResponseDescription = isset($requestVals['ResponseDescription']) ? $requestVals['ResponseDescription'] : 'No Response';
            $CustomerMessage = isset($requestVals['CustomerMessage']) ? $requestVals['CustomerMessage'] : '';
            $ResultCode = isset($requestVals['ResultCode']) ? $requestVals['ResultCode'] : '';
            $ResultDesc = isset($requestVals['ResultDesc']) ? $requestVals['ResultDesc'] : '';
            $MpesaReceiptNumber = isset($requestVals['MpesaReceiptNumber']) ? $requestVals['MpesaReceiptNumber'] : '';
            $status = 1;

            if ($ResponseCode != '0') //success
            {
                $status = 0;
                exit();
            }

            $stkRequest = array();
            $stkRequest['mpesa_trans_id'] = $MpesaReceiptNumber; //(Mpesa reference number)
            $stkRequest['merchant_req_id'] = $MerchantRequestID;
            $stkRequest['checkout_req_id'] = $CheckoutRequestID;
            $stkRequest['response_code'] = $ResponseCode;
            $stkRequest['response_desc'] = $ResponseDescription;
            $stkRequest['cust_message'] = $CustomerMessage;
            //0 = pending
            //1 = success
            //2 = failed
            $stkRequest['status'] = $status;
            $stkRequest['status'] = $amount;
            $stkRequest['response_result_code'] = $ResultCode;
            $stkRequest['response_result_desc'] = $ResultDesc;

            $currentTrans = array(
                'the_transaction_id' => '',
                'the_transaction_user' => $this->session->the_person_id,
                'the_transaction_date' => time(),
                'the_transaction_start' => time(),
                'the_transaction_end' => time(),
                'the_transaction_amount' => $amount,
                'the_transaction_status' => 2, // 0 failed / 1 success / 2 pending / 3 error
                'the_transaction_currency' => 'KES',
                'the_transaction_reference' => $MerchantRequestID,
                'the_transaction_category' => 0, //
                'the_transaction_level' => $level, // 2 group/ 1 personal
                'the_transaction_type' => 1, // 1 deposit / 2 withdraw / 3 transfer / 4 send
                'the_transaction_wallet' => $wallet,
                'the_transaction_group' => $group,
                'the_transaction_purpose' => $purpose,
                'the_transaction_comment' => 'Showing STK',
                'the_transaction_mode' => 'Mpesa STK'
            );

            $this->db->insert('the_stk', $stkRequest);
            $this->db->insert('the_transactions', $currentTrans);
        }
    }

    public function stkcallback()
    {
        try {
            $request = file_get_contents('php://input');
            // print_r($request);
            $this->db->insert('errors', array('error' => $request));
            $request = json_decode($request, true);
            print_r($request);
            echo $request['Body']['stkCallback']['ResultCode'];
            echo $request['Body']['stkCallback']['ResultDesc'];

            //when success
            $MerchantRequestID = $request['Body']['stkCallback']['MerchantRequestID'];
            $CheckoutRequestID = $request['Body']['stkCallback']['CheckoutRequestID'];
            $ResultCode = $request['Body']['stkCallback']['ResultCode'];
            $ResultDesc = $request['Body']['stkCallback']['ResultDesc'];

            // $stkRequest = $this->db->where('merchant_req_id', $MerchantRequestID)->get('the_stk')->result_array();
            // print_r($stkRequest);

            // $stkRequest->transaction;
            // $transaction = $stkRequest['transaction'];
            // $user = $this->db->where('the_transaction_reference', $MerchantRequestID)->get('the_transactions')->row()->the_transaction_user;

            //initialize non-common variables
            $statusRes = 2;
            $stkRes = 3;

            if ($ResultCode == 0 || $ResultCode == '0') //success
            {
                $statusRes = 1;
                $stkRes = 2;
                $amount = $request['Body']['stkCallback']['CallbackMetadata']['Item'][0]['Value'];
                $MpesaReceiptNumber = $request['Body']['stkCallback']['CallbackMetadata']['Item'][1]['Value'];
                // $TransactionDate = $request['Body']['stkCallback']['CallbackMetadata']['Item'][3]['Value'];
                // $PhoneNumber = $request['Body']['stkCallback']['CallbackMetadata']['Item'][4]['Value'];
                $stkRequest['mpesa_trans_id'] = $MpesaReceiptNumber; //(Mpesa reference number)
                $stkRequest['merchant_req_id'] = $MerchantRequestID;
                $stkRequest['checkout_req_id'] = $CheckoutRequestID;
                //0 = pending
                //1 = success
                //2 = failed
                $stkRequest['response_result_code'] = $request['Body']['stkCallback']['ResultCode'];
                $stkRequest['response_result_desc'] = $request['Body']['stkCallback']['ResultDesc'];

                print_r($stkRequest);
                $this->db->insert('errors', array('error' => 'nowCallback'));
                $this->db->insert('errors', array('error' => json_encode($stkRequest)));
                $this->db->where('the_transaction_reference', $MerchantRequestID)->set('the_transaction_status', 1)->update('the_transactions');
                $this->db->where('merchant_req_id', $MerchantRequestID)->set($stkRequest)->update('the_stk');
            }
        } catch (\Throwable $th) {
            $this->db->insert('errors', array('error' => $th));
        }
    }

    public function paybill($MpesaCode, $which, $purpose, $level)
    {

        $group = 0;
        $wallet = $which;
        if ($level == '2') {
            $group = $which;
            $wallet = 0;
        }

        $currentTrans = array(
            'the_transaction_user' => $this->session->the_person_id,
            'the_transaction_end' => time(),
            'the_transaction_status' => 1, // 0 failed / 1 success / 2 pending / 3 error
            'the_transaction_currency' => 'KES',
            'the_transaction_reference' => $MpesaCode,
            'the_transaction_level' => $level, // 2 group/ 1 personal
            'the_transaction_type' => 1, // 1 deposit / 2 withdraw / 3 transfer / 4 send
            'the_transaction_wallet' => $wallet,
            'the_transaction_group' => $group,
            'the_transaction_purpose' => $purpose,
            'the_transaction_comment' => 'Paybill Payment',
            'the_transaction_mode' => 'Mpesa Paybill'
        );

        $this->db->where('the_transaction_reference', $MpesaCode)->set($currentTrans)->update('the_transactions');
    }

    private function generateAccessToken()
    {
        $key = $this->db->where('the_app ', '2')->get('the_privates')->row()->the_key;
        $secret = $this->db->select('the_secret')->where('the_app ', '2')->get('the_privates')->row()->the_secret;

        $accessToken = "";
        $status = 0;
        $description = "";
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($key . ':' . $secret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $curl_response = curl_exec($curl);

        $responseVals = json_decode($curl_response, TRUE);

        $accessToken = $responseVals['access_token'];
        $status = 1;

        // if ($curl_response != FALSE) {
        //     $responseVals = json_decode($curl_response, TRUE);
        //     $accessToken = $responseVals['access_token'];
        //     $status = 1;
        // } else {
        //     $description = "Curl Failed: " . curl_error($curl);
        // }

        $array = array('status' => $status, 'token' => $accessToken, 'description' => $description);
        return $array;
    }
}
