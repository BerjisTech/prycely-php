<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Webhooks extends CI_Controller
{
    public function index()
    {
    }

    public function git_pull($sabanduklo)
    {
        if (!isset($sabanduklo)) {
            $this->Email->do_email(
                'Some tried accessing sabanduklo on ' . date('d M, Y', time()) . 'at ' . date('h:i:s a', time()),
                'Funny call',
                'prycely@gmail.com, berjistechnologies@gmail.com',
                'prycely@gmail.com'
            );
            exit();
        }

        if ($sabanduklo != 'sabanduklobankulo') {
            $this->Email->do_email(
                'Some tried accessing sabanduklo using ' . $sabanduklo . ' on ' . date('d M, Y', time()) . 'at ' . date('h:i:s a', time()),
                'Funny call',
                'prycely@gmail.com, berjistechnologies@gmail.com',
                'prycely@gmail.com'
            );
            exit();
        }

        if ($_POST['payload']) {
            shell_exec('cd /var/www/prycely && git reset –hard HEAD && git pull');
            $this->Email->do_email(
                'New pull from Git<br />Pull Data<br /><br />' . json_encode($this->input->post()),
                'New pull from Git',
                'prycely@gmail.com, berjistechnologies@gmail.com',
                'prycely@gmail.com'
            );
        } else {
            $this->Email->do_email(
                'Some tried accessing sabanduklo without a post request on ' . date('d M, Y', time()) . 'at ' . date('h:i:s a', time()),
                'Funny call',
                'prycely@gmail.com, berjistechnologies@gmail.com',
                'prycely@gmail.com'
            );
            exit();
        }
    }
}
