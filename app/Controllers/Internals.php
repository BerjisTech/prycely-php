<?php

namespace App\Controllers;

class Internals extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
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
