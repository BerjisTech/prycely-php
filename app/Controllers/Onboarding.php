<?php

namespace App\Controllers;

class Onboarding extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
            header("location: https://radio.garden");
        }
    }
    public function index()
    {
        return view('auth/onboarding');
    }
}
