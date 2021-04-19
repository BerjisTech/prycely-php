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
		$data['page_name'] = 'wallet/index';
		$data['page_title'] = 'Wallet';
		$data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

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
		$data = array(
			'the_wallet_id' => '',
			'the_wallet_user' => $this->session->the_user_id,
			'the_wallet_currency' => $this->input->get('code'),
			'the_wallet_balance' => 0,
			'the_wallet_open_date' => time(),
			'the_wallet_status' => 1
		);

		if ($this->db->where('the_wallet_user', $data['the_wallet_user'])->where('the_wallet_currency', $this->input->get('code'))->get('the_wallets')->num_rows() > 0) {
			die('You already have a ' + $this->input->get('code') + ' wallet');
			exit();
		}

		if ($this->security->xss_clean($data, TRUE) == FALSE) {
			die('Something went wrong');
			exit();
		}

		


		echo 'add wallet';
	}

	public function delete($wallet_id = "")
	{
		echo 'delete wallet';
	}
}
