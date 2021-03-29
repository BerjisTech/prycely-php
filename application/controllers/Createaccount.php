<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Createaccount extends CI_Controller
{
    public function index()
    {
        // print_r($this->db->query('SELECT * FROM shops'));
        $this->load->view('auth/create_account');
    }
}
