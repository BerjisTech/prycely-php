<?php



class Internals extends CI_Controller
{
    public function __construct()
    {
        if ($this->session()->get('sombo') != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }

    public function index()
    {
    }

    public function link_stats()
    {
    }
}
