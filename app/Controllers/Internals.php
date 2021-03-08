<?php

namespace App\Controllers;

class Internals extends BaseController
{
    public function __construct()
    {
        if ($this->session->get('sombo') != true) {
            echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
        }
    }

    public function index()
    {
    }

    public function link_stats()
    {
    }
}
