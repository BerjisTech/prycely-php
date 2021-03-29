<?php



class Onboarding extends CI_Controller
{
    public function __construct()
    {
        if (session()->get('sombo') != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }
    public function index()
    {
        $this->load->view('auth/onboarding');
    }
}
