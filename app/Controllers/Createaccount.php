<?php

namespace App\Controllers;

class Createaccount extends BaseController
{
    public function __construct()
    {
        if (session()->get('sombo') != true) {
            return redirect()->to('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        // print_r($this->db->query('SELECT * FROM shops'));
        return view('auth/create_account');
    }
}
