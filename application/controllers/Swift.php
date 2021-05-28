<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Swift extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */
        

        if (!isset($this->session->the_person_email)) {
            redirect(base_url('p/wrong_turn'));
        }

        if (!isset($this->session->the_person_id)) {
            redirect(base_url('auth/login'));
        }
    }

    public function index()
    {
    }
}
