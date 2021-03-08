<?php

namespace App\Controllers;

class Createaccount extends BaseController
{
    public function __construct()
    {
        if ($this->session->get('sombo') != true) {
            echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
        }
    }
    public function index()
    {
        // print_r($this->db->query('SELECT * FROM shops'));
        return view('auth/create_account');
    }
}
