<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Group extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        /* cache control */


        if (!isset($this->session->the_person_email)) {
            redirect(base_url('p/wrong_turn'));
        }
    }

    public function index()
    {
        $data['page_name'] = 'group/index';
        $data['page_title'] = 'Group';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $this->load->view('index', $data);
    }

    public function g($group_id)
    {
        $dates = $this->db
            ->select('the_transaction_date')
            ->where('the_transaction_user', $this->session->the_person_id)
            ->group_by('date_format(from_unixtime(the_transaction_date), "%d")')
            ->order_by('the_transaction_date', 'DESC')
            ->limit('6')
            ->get('the_transactions')->result_array();

        foreach ($dates as $date) {
            $limit = 6;
            $collection_date = date('dmY', $date['the_transaction_date']);
            $collection_stamp = date('j\<\s\u\p\>S\<\/\s\u\p\> M', $date['the_transaction_date']);
            $da_query = $this->db
                ->query("SELECT * FROM `the_transactions` WHERE `the_transaction_user` = 1 AND `the_transaction_group` = $group_id AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date ORDER BY `the_transaction_id` DESC LIMIT $limit");
            $transactions[$collection_stamp] = $da_query->result_array();
        }

        $data['transactions'] = $transactions;

        $data['group'] = $this->db->where('the_group_id', $group_id)->get('the_groups')->row();
        $data['currencies'] = $this->db->get('currency')->result_array();
        $data['groups'] = $this->db->where('the_group_user', $this->session->the_person_id)->where('the_group_currency !=', $data['group']->the_group_currency)->get('the_groups')->result_array();
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
        $data['page_name'] = 'group/group';
        $data['page_title'] = 'Diani Vacation';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $this->load->view('index', $data);
    }

    public function create()
    {
        $data['currencies'] = $this->db->get('currency')->result_array();
        $this->load->view('group/create', $data);
    }

    public function create_new()
    {
        $_POST['the_group_creator'] = $this->session->the_person_id;

        $first_member = array(
            'the_member_id' => '',
            'the_user_id' => $this->session->the_person_id,
            'the_member_status' => 1,
            'date_joined' => time()
        );

        $this->db->insert('the_groups', $this->input->post());

        $group_id = $this->db->where('the_group_creator', $this->session->the_person_id)->order_by('the_group_id', 'DESC')->limit('1')->get('the_groups')->row()->the_group_id;

        if ($this->generate_group_table($group_id) == 'done') {
            $this->db->insert('group_' . $group_id, $first_member);
            $response = array(
                'status' => 'done',
                'message' => 'Group succesfully created',
                'group' => $group_id
            );
            echo json_encode($response);
        } else {
            $response = array(
                'status' => 'failed',
                'message' => 'There has been an error creating your group. Check your groups page to finish creating <strong>' . $this->input->post('the_group_name') . '</strong>',
                'group' => $group_id
            );
            echo json_encode($response);
        }

        echo $this->db->last_query();
    }

    private function generate_group_table($group_id)
    {
        $this->load->dbforge();
        $fields = array(
            'the_member_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ),
            'the_user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unique' => true,
            ),
            'the_member_status' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'default' => '0',
            ),
            'date_joined' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('the_member_id', true);
        if ($this->db->table_exists('group_' . $group_id)) {
            return 'exists';
            exit;
        }

        if ($this->dbforge->create_table('group_' . $group_id)) {
            return 'done';
        } else {
            return 'error';
        }
    }
}
