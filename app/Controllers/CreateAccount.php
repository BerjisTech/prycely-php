<?php

namespace App\Controllers;

class Createaccount extends BaseController
{

    public function __construct()
    {
        $this->load->library('session');
    }

    public function index()
    {
        return view('create_account');
    }
}
