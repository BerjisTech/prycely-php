<?php

namespace App\Controllers;

class Createaccount extends BaseController
{
    public function index()
    {
        $this->db->select('*')->get('shops');
        return view('create_account');
    }
}
