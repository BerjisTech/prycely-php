<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Group extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */
        

        if (!isset($this->session->the_person_email)) {
            redirect(base_url('p/wrong_turn'));
        }
    }

    public function index()
    {
        $data['page_name'] = 'group/index';
        $data['page_title'] = 'Group';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

$this->load->view('index', $data);
    }

    public function g($group_id)
    {
        $data['page_name'] = 'group/group';
        $data['page_title'] = 'Diani Vacation';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

$this->load->view('index', $data);
    }

    public function create()
    {
        $this->load->view('group/create');
    }
}
