<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		if ($this->session->sombo != true) {
			redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
		}
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function wallet()
	{
		echo 'wallet';
	}

	public function dbtest()
	{
		print_r($this->session->get('sombo'));
	}
}
