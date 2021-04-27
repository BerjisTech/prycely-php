<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Safaricom\Mpesa\Mpesa;


class Mobilemoney extends CI_Controller
{

    public function index()
    {
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
