<?php

class Auth extends CI_Controller
{
    public function index()
    {
        $this->session->set('sombo', true);
        redirect('overview');
    }

    public function login()
    {
    }
}
