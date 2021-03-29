<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Createaccount extends CI_Controller
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
        // print_r($this->db->query('SELECT * FROM shops'));
        $this->load->view('auth/create_account');
    }

    public function send_welcome($email)
    {
        $data[] = '';
        $msg = $this->load->view('email_templates/welcome', $data,  TRUE);
        $sub = 'Welcome to Chama';
        $to = $email;
        $from = 'no-reply@chama.com';
        $this->Email->do_email($msg, $sub, $to, $from);
    }
}
