<?php

namespace App\Controllers;

class Internals extends BaseController
{
    public function __construct()
    {
        if ($this->session->get('sombo') != true) {
            return redirect()->to('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }

    public function index()
    {
    }

    public function link_stats()
    {
    }
}
