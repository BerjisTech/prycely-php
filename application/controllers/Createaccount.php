<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Createaccount extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */
        
    }

    public function index()
    {
        $data['page_name'] = 'auth/create_account';
        $this->load->view('auth/create_account', $data);
    }

    public function send_welcome($email)
    {
        $data[] = '';
        $msg = $this->load->view('email_templates/welcome', $data,  TRUE);
        $sub = 'Welcome to Prycely';
        $to = $email;
        $from = 'no-reply@prycely.com';
        $this->Email->do_email($msg, $sub, $to, $from);
    }
}
