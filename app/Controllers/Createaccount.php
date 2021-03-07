<?php

namespace App\Controllers;

class Createaccount extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
            header("location: https://radio.garden");
        }
    }
    public function index()
    {
        // print_r($this->db->query('SELECT * FROM shops'));
        return view('auth/create_account');
    }
}
