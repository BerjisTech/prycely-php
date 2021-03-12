<?php
/*
namespace App\Controllers;


class Mpesa extends BaseController
{
    public function index()
    {
    }

    public function b2c_request()
    {
        $token = (new \App\Models\Mpesamodel())->generate_token()['token'];

        $InitiatorName = 'TestInit610';
        $SecurityCredential = "";
        $CommandID = "BusinessPayment";
        $Amount = "449";
        $PartyA = "600610";
        $PartyB = "254725227513";
        $Remarks = "User withdrawal";
        $QueueTimeOutURL = base_url('mpesa/callback_post_data');
        $ResultURL = base_url('mpesa/callback_post_data');
        $Occasion = "";

        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $b2cTransaction = $mpesa->b2c(
            $InitiatorName,
            $SecurityCredential,
            $CommandID,
            $Amount,
            $PartyA,
            $PartyB,
            $Remarks,
            $QueueTimeOutURL,
            $ResultURL,
            $Occasion
        );
    }

    public function c2b_request()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $b2bTransaction = $mpesa->c2b(
            $ShortCode,
            $CommandID,
            $Amount,
            $Msisdn,
            $BillRefNumber
        );
    }

    public function stk()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );
    }

    public function stk_status_query()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $STKPushRequestStatus = $mpesa->STKPushQuery(
            $checkoutRequestID,
            $businessShortCode,
            $password,
            $timestamp
        );
    }

    public function callback_post_data()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $callbackData = $mpesa->getDataFromCallback();
    }

    public function finish_transaction()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $callbackData = $mpesa->finishTransaction();
        // $callbackData = $mpesa->finishTransaction(false);
    }

    public function balance_request()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $balanceInquiry = $mpesa->accountBalance(
            $CommandID,
            $Initiator,
            $SecurityCredential,
            $PartyA,
            $IdentifierType,
            $Remarks,
            $QueueTimeOutURL,
            $ResultURL
        );
    }

    public function transaction_status_request()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $trasactionStatus = $mpesa->transactionStatus(
            $Initiator,
            $SecurityCredential,
            $CommandID,
            $TransactionID,
            $PartyA,
            $IdentifierType,
            $ResultURL,
            $QueueTimeOutURL,
            $Remarks,
            $Occasion
        );
    }

    public function b2b_request()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();

        $b2bTransaction = $mpesa->b2b(
            $ShortCode,
            $CommandID,
            $Amount,
            $Msisdn,
            $BillRefNumber
        );
    }
} */
