<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mpesa extends CI_Controller
{


    public function index()
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
    }
}
