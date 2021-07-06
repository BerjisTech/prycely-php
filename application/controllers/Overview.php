<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
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
        $this->load->model('Overview_model');

        $me = $this->session->the_person_id;

        $data['groups'] = array();
        $data['groups'] = $this->Overview_model->get_groups(5, 0, $me);
        $data['transactions'] = $this->Overview_model->get_transactions($me);
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
        $data['wallets'] = $this->db->where('the_wallet_user', $me)->limit('3')->get('the_wallets')->result_array();

        $this->load->view('index', $data);
    }

    private function modal($modal)
    {
        echo $modal;
    }
}
