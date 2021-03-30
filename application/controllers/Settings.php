<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
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
