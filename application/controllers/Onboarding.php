<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Onboarding extends CI_Controller
{
    public function __construct()
    {
        if ($this->session->sombo != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        $this->load->view('auth/onboarding');
    }
}
