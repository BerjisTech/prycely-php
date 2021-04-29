<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wallet extends CI_Controller
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
            $collection_date = date('dmY', $date['the_transaction_date']);
            $collection_stamp = date('j\<\s\u\p\>S\<\/\s\u\p\> M', $date['the_transaction_date']);
			$transactions[$collection_stamp] = $this->db
				->query("SELECT * FROM `the_transactions` WHERE `the_transaction_user` = 1 AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date ORDER BY `the_transaction_id` DESC LIMIT 10")->result_array();
		}

		$data['transactions'] = $transactions;

		$data['page_name'] = 'wallet/index';
		$data['page_title'] = 'Wallet';
		$data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
		$data['wallets'] = $this->db->where('the_wallet_user', $this->session->the_person_id)->get('the_wallets')->result_array();

		$this->load->view('index', $data);
	}

	public function create()
	{
		$data['currencies'] = $this->db->get('currency')->result_array();
		$data['page_name'] = 'wallet/create';
		$data['page_title'] = 'Create New Wallet';
		$data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

		$this->load->view('index', $data);
	}

	public function add()
	{

		$currency = $this->input->get('the_wallet_currency');
		$data = array(
			'the_wallet_id' => '',
			'the_wallet_user' => $this->session->the_person_id,
			'the_wallet_currency' => $currency,
			'the_wallet_balance' => 0,
			'the_wallet_open_date' => time(),
			'the_wallet_status' => 1
		);

		$data = $this->security->xss_clean($data, TRUE);


		if ($this->db->where('the_wallet_user', $data['the_wallet_user'])->where('the_wallet_currency', $currency)->get('the_wallets')->num_rows() > 0) {
			die("Error: You already have a $currency wallet");
			exit();
		}

		if ($data == FALSE) {
			die('Error: Something went wrong');
			exit();
		}


		if ($this->db->insert('the_wallets', $data)) {
			echo $this->db->where('the_wallet_user', $this->session->the_person_id)->order_by('the_wallet_id', 'DESC')->get('the_wallets')->row()->the_wallet_id;
		} else {
			echo 'Error: Something went wrong. Try again';
		}
	}

	public function delete($wallet_id = "")
	{
		echo 'delete wallet';
	}

	public function view($wallet_id)
	{
	}
}
