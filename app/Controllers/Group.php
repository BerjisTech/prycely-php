<?php

namespace App\Controllers;

class Group extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['sombo'])) {
            echo '<script>window.location.href="http://radio.garden/visit/nairobi/xKaC0mlq"</script>';
        }
    }

    public function index()
    {
        $data['page_name'] = 'group/index';
        $data['page_title'] = 'Group';
        return view('index', $data);
    }

    public function g($group_id)
    {
        $data['page_name'] = 'group/group';
        $data['page_title'] = 'Diani Vacation';
        return view('index', $data);
    }
}
