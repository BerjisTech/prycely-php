<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller
{
	public function __construct()
	{
		if ($this->session->sombo != true) {
			redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
		}
	}
	public function index()
	{
		$data['page_name'] = 'wallet/index';
		$data['page_title'] = 'Wallet';
		$this->load->view('index', $data);
	}

	public function personal()
	{
	}

	public function group($group_id = "")
	{
	}

	public function add()
	{
		echo 'add wallet';
	}

	public function delete($wallet_id = "")
	{
		echo 'delete wallet';
	}

	public function edit($wallet_id = "")
	{
		echo 'edit wallet';
	}

	public function test_mpesa()
	{
		echo $this->Mpesa->generate_token()['token'];
	}
}
