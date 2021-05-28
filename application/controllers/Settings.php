<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
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
        $data['page_name'] = 'settings/index';
        $data['page_title'] = 'Settings';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

$this->load->view('index', $data);
    }
}
