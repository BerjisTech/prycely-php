<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Safaricom\Mpesa\Mpesa;


class Mobilemoney extends CI_Controller
{

    public function index()
    {
        date_default_timezone_set('Africa/Nairobi');
        $now = date('Y-m-d H:i:s');
        //include 'functions.php';
        $accessVals = json_decode($this->generateAccessToken(), true);
        if ($accessVals['status'] == 1) {
            $accessToken = "Bearer " . $accessVals['token'];
            // The data to send to the API
            $postData = array(
                'ValidationURL' => "http://localhost/prycely/mobilemoney", //VALIDATING TRANSACTIONS KA ZINAEXIST 
                'ConfirmationURL' => "http://localhost/prycely/mobilemoney", //PAYBILL PAYMENT DATA HITS HERE
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

    private function generateAccessToken()
    {
        $accessToken = "";
        $status = 0;
        $description = "";
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode('Gyo6a3NJGFPE6cbFK9vHmGrMD5PIJuDY:L7E5rdI01evHlHLr'); // consumer Secret na key
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $curl_response = curl_exec($curl);
        if ($curl_response != FALSE) {
            $responseVals = json_decode($curl_response, TRUE);
            $responseVals = json_decode($curl_response, TRUE);
            $accessToken = $responseVals['access_token'];
            $status = 1;
        } else {
            $description = "Curl Failed: " . curl_error($curl);
        }
        $array = array('status' => $status, 'token' => $accessToken, 'description' => $description);
        return json_encode($array);
    }

    public function b2c($InitiatorName, $SecurityCredential, $CommandID, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $Occasion)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $b2cTransaction = $mpesa->b2c($InitiatorName, $SecurityCredential, $CommandID, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $Occasion);
    }

    public function balance($CommandID, $Initiator, $SecurityCredential, $PartyA, $IdentifierType, $Remarks, $QueueTimeOutURL, $ResultURL)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $balanceInquiry = $mpesa->accountBalance($CommandID, $Initiator, $SecurityCredential, $PartyA, $IdentifierType, $Remarks, $QueueTimeOutURL, $ResultURL);
    }

    public function statusrequest($Initiator, $SecurityCredential, $CommandID, $TransactionID, $PartyA, $IdentifierType, $ResultURL, $QueueTimeOutURL, $Remarks, $Occasion)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $trasactionStatus = $mpesa->transactionStatus($Initiator, $SecurityCredential, $CommandID, $TransactionID, $PartyA, $IdentifierType, $ResultURL, $QueueTimeOutURL, $Remarks, $Occasion);
    }

    public function b2b($Initiator, $SecurityCredential, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $AccountReference, $commandID, $SenderIdentifierType, $RecieverIdentifierType)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $b2bTransaction = $mpesa->b2b($Initiator, $SecurityCredential, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $AccountReference, $commandID, $SenderIdentifierType, $RecieverIdentifierType);
    }

    public function c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $b2bTransaction = $mpesa->c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber);
    }

    public function stkpush($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
    }

    public function stkstatus($environment, $checkoutRequestID, $businessShortCode, $password, $timestamp)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $STKPushRequestStatus = $mpesa->STKPushQuery($environment, $checkoutRequestID, $businessShortCode, $password, $timestamp);
    }

    private function callbackpost()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $callbackData = $mpesa->getDataFromCallback();
    }

    private function complete()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $callbackData = $mpesa->finishTransaction();
    }

    private function transfailed()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $callbackData = $mpesa->finishTransaction(false);
    }
}
