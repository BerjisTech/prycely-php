<?php



class Onboarding extends CI_Controller
{
    public function __construct()
    {
        if ($this->session->userdata('sombo') != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        $this->load->view('auth/onboarding');
    }
}
