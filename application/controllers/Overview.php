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
    }

    public function index()
    {
        $dates = $this->db
            ->select('the_transaction_date')
            ->where('the_transaction_user', $this->session->the_person_id)
            ->group_by('Day(the_transaction_date)')
            ->limit('10')
            ->order_by('the_transaction_date', 'DESC')
            ->get('the_transactions')->result_array();

        foreach ($dates as $date) {
            $transactions[$date['the_transaction_date']] = $this->db
                ->query('SELECT * FROM `the_transactions` WHERE `the_transaction_user` = 1 AND date_format(from_unixtime(the_transaction_date), "%d") = '.date('d', $date['the_transaction_date']))->result_array();
        }

        $data['transactions'] = $transactions;
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
        $data['wallets'] = $this->db->where('the_wallet_user', $this->session->the_person_id)->limit('3')->get('the_wallets')->result_array();

        $this->load->view('index', $data);
    }
}
