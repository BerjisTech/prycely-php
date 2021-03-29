<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->session->set_userdata('sombo', true);
        redirect('overview');
    }

    public function login()
    {
    }
}
