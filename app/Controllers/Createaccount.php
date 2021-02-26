<?php

namespace App\Controllers;

class Createaccount extends BaseController
{
    public function index()
    {
        // print_r($this->db->query('SELECT * FROM shops'));
        return view('create_account');
    }
}
