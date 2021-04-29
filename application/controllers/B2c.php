<?php

defined('BASEPATH') or exit('No direct script access allowed');

class B2c extends CI_Controller
{
    public function index()
    {
        
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
