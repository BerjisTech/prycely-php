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
            ->where('the_transaction_status !=', 2)
            ->group_by('date_format(from_unixtime(the_transaction_date), "%d")')
            ->limit('10')
            ->order_by('the_transaction_date', 'DESC')
            ->get('the_transactions')->result_array();

        foreach ($dates as $date) {
            $collection_date = date('dmY', $date['the_transaction_date']);
            $collection_stamp = date('j\<\s\u\p\>S\<\/\s\u\p\> M', $date['the_transaction_date']);
            $transactions[$collection_stamp] = $this->db
                ->query("SELECT * FROM `the_transactions` WHERE `the_transaction_user` = 1 AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date AND `the_transaction_status` != 2 ORDER BY `the_transaction_id` DESC LIMIT 10")->result_array();
        }

        $data['groups'] = array();

        $my_groups = $this->db->select('the_person_groups')->where('the_person_id', $this->session->the_person_id)->get('the_people')->row()->the_person_groups;
        if ($my_groups != '') {
            $my_groups =  explode(',', $my_groups);
            if (count($my_groups) > 0 || sizeof($my_groups) > 0) {
                foreach ($my_groups as $key => $group) {
                    $data['groups'][$key] = $this->db->where('the_group_id', $group)->get('the_groups')->result_array()[0];
                }
            }
        }

        $data['transactions'] = $transactions;
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
        $data['wallets'] = $this->db->where('the_wallet_user', $this->session->the_person_id)->limit('3')->get('the_wallets')->result_array();

        $this->load->view('index', $data);
    }

    private function modal($modal)
    {
        echo $modal;
    }
}
