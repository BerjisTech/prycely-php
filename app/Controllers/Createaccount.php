<?php

namespace App\Controllers;

class Createaccount extends BaseController
{
    public function index()
    {
        $db->select('*')->get('shops');
        return view('create_account');
    }
}
