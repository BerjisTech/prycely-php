<?php

namespace App\Controllers;

class Internals extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
            header("location: https://radio.garden");
        }
    }

    public function index()
    {
    }

    public function link_stats()
    {
    }
}
