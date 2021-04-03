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
        $this->load->view('auth/login');
    }

    public function recover()
    {
        $this->load->view('auth/recover');
    }

    public function send_code()
    {
        $email = $this->input->post('the_email');
        $the_create_account_code = mt_rand(100000, 999999);
        $this->Email->do_email($the_create_account_code, 'Your code Mother Fucker', $email, 'support@sleekupsell.com');
        $this->session->the_create_account_code = $the_create_account_code;
        $this->session->the_create_account_code = 000000;
        echo base64_encode('the_proceed');
    }

    public function check_code($code)
    {
        if ($code != $this->session->the_create_account_code) {
            echo 'the_fuck_you';
        } else {
            echo 'the_proceed';
        }
    }

    public function create_account()
    {
        $data = $this->input->post();
        $data['the_person_password'] = $this->hash_password($data['the_person_password']);
        $data['the_person_join'] = time();
        $data['the_person_verified'] = 1;
        $this->Database->insert($data, 'the_people');
        echo json_encode($data);
    }

    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function check_pass($fromForm, $fromDB)
    {
        if (password_verify($fromForm, $fromDB)) {
            return true;
        } else {
            return false;
        }
    }
}
