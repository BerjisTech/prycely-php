<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Webhooks extends CI_Controller
{
    public function index()
    {
        if ($_POST['payload']) {
            shell_exec('cd /var/www/prycely && git reset –hard HEAD && git pull');
            $this->Email->do_email(
                'New pull from Git<br />Pull Data<br /><br />' . $this->input->post(),
                'New pull from Git',
                'prycely@gmail.com, berjistechnologies@gmail.com',
                'support@sleekupsell.com'
            );
        }
    }
}
