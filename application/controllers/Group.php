<?php



class Group extends CI_Controller
{
    public function __construct()
    {
        if ($this->session->sombo != true) {
            redirect('http://radio.garden/visit/nairobi/xKaC0mlq');
        }
    }

    public function index()
    {
        $data['page_name'] = 'group/index';
        $data['page_title'] = 'Group';
        $this->load->view('index', $data);
    }

    public function g($group_id)
    {
        $data['page_name'] = 'group/group';
        $data['page_title'] = 'Diani Vacation';
        $this->load->view('index', $data);
    }

    public function create($group_id)
    {
        $this->load->view('group/create');
    }
}
