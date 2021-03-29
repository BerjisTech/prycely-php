<?php



class Settings extends CI_Controller
{
    public function __construct()
    {
        if (session()->get('sombo') != true) {
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
