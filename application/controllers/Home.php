<?php



class Home extends CI_Controller
{
	public function __construct()
	{
		if (session()->get('sombo') != true) {
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
		print_r(session()->get('sombo'));
	}
}
