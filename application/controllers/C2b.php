<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C2b extends CI_Controller
{
    public function index()
    {
        $request = file_get_contents('php://input');
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
    }

    private function phoneFormat($phone)
    {
        return $phone;
    }
}
