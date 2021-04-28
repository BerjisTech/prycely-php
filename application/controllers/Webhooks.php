<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Webhooks extends CI_Controller
{
    public function index()
    {
        if ($_POST['payload']) {
            shell_exec('cd /var/www/prycely && git reset –hard HEAD && git pull');
        }
    }
}
