<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newuser extends CI_Controller
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
		$this->load->view('auth/onboarding');
	}

	public function company()
	{
	}

	public function individual()
	{
	}

	public function freelancer()
	{
	}
}
