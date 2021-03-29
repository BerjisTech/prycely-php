<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller
{
    public function __construct()
    {
        if ($this->session->sombo != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        $data['page_name'] = 'overview/index';
        $data['page_title'] = 'Overview';
        $this->load->view('index', $data);
    }
}
