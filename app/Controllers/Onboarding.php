<?php

namespace App\Controllers;

class Onboarding extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
            echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
        }
    }
    public function index()
    {
        return view('auth/onboarding');
    }
}
