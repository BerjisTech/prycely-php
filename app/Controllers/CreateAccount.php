<?php

namespace App\Controllers;

class CreateAccount extends BaseController
{

    public function __construct()
    {
    }

    public function index()
    {
        return view('create_account');
    }
}
