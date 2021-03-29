<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        if ($this->session->sombo != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        $data['page_name'] = 'settings/index';
        $data['page_title'] = 'Settings';
        $this->load->view('index', $data);
    }
}
