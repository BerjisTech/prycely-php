<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2020 05:00:00 GMT");
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index()
    {
        $this->session->set_userdata('sombo', true);
        redirect('overview');
    }

    public function login()
    {
    }

    public function send_code()
    {
        $this->session->destroy();
        $email = $this->input->post('the_email');
        $the_create_account_code = mt_rand(100000, 999999);
        $this->Email->do_email($the_create_account_code, 'Your code Mother Fucker', $email, 'support@sleekupsell.com');
        $this->session->the_create_account_code = $the_create_account_code;
        echo base64_encode('the_proceed');
    }

    public function check_code($code)
    {
        if ($code != $this->session->the_create_account_code) {
            echo base64_encode('the_fuck_you');
        } else {
            echo base64_encode('the_proceed');
        }
    }
}
