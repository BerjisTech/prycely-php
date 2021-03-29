<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Internals extends CI_Controller
{
    public function __construct()
    {
        if ($this->session->sombo != true) {
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
