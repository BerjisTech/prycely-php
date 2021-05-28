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

        if (!isset($this->session->the_person_id)) {
            redirect(base_url('auth/login'));
        }
    }

    public function index()
    {
        $data['page_name'] = 'group/index';
        $data['page_title'] = 'Group';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $data['groups'] = array();

        $my_groups = $this->db->select('the_person_groups')->where('the_person_id', $this->session->the_person_id)->get('the_people')->row()->the_person_groups;
        
        if ($my_groups != '') {
            $my_groups =  explode(',', $my_groups);
            if (count($my_groups) > 0 || sizeof($my_groups) > 0) {
                foreach ($my_groups as $key => $group) {
                    $data['groups'][$key] = $this->db
                        ->select('*, sum(the_transaction_amount) as so_far')
                        ->where('the_group_id', $group)
                        ->join('the_transactions', 'the_transactions.the_transaction_group = the_groups.the_group_id')
                        ->where('the_transaction_status !=', 2)
                        ->get('the_groups')->result_array()[0];
                }
            }
        }
        $this->load->view('index', $data);
    }

    public function g($group_id)
    {
        if (!$this->db->table_exists('group_' . $group_id)) {
            $this->session->sess_destroy();
            redirect(base_url());
            $this->db->close();
            exit;
        }

        $group = $this->db->where('the_group_id', $group_id)->get('the_groups')->row();
        $group_members = $this->db->get('group_' . $group_id)->result_array();
        if ($this->db->where('the_user_id', $this->session->the_person_id)->get('group_' . $group_id)->num_rows() != 1) {
            $this->session->sess_destroy();
            redirect(base_url());
            $this->db->close();
            exit;
        }
        $dates = $this->db
            ->select('the_transaction_date')
            ->where('the_transaction_user', $this->session->the_person_id)
            ->where('the_transaction_status !=', 2)
            ->where('the_transaction_group', $group_id)
            ->group_by('date_format(from_unixtime(the_transaction_date), "%d")')
            ->order_by('the_transaction_date', 'DESC')
            ->limit('6')
            ->get('the_transactions')->result_array();

        $transactions = array();
        foreach ($dates as $key => $date) {
            $limit = 6;
            $collection_date = date('dmY', $date['the_transaction_date']);
            $collection_stamp = date('j\<\s\u\p\>S\<\/\s\u\p\> M', $date['the_transaction_date']);
            $da_query = $this->db
                ->query("SELECT * FROM `the_transactions` WHERE `the_transaction_group` = $group_id AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date AND `the_transaction_status` != 2 ORDER BY `the_transaction_id` DESC LIMIT $limit");
            $transactions[$collection_stamp] = $da_query->result_array();
        }

        $data['transactions'] = $transactions;

        $data['group'] = $group;
        $data['group_total'] = $this->db->select('sum(the_transaction_amount) as total')->where('the_transaction_group', $group_id)->where('the_transaction_status !=', 2)->get('the_transactions')->row()->total;
        $data['group_id'] = $group_id;
        $data['currencies'] = $this->db->get('currency')->result_array();
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
        $data['page_name'] = 'group/group';
        $data['page_title'] = $group->the_group_name;
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
        if ($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST) && count($_POST) !== 0) {

            if (
                empty($this->input->post('the_group_type')) ||
                empty($this->input->post('the_group_name')) ||
                empty($this->input->post('the_group_goal')) ||
                empty($this->input->post('the_group_currency'))
            ) {
                $response = array(
                    'status' => 'failed',
                    'message' => 'Some data is missing. Kindly ensure that you\'ve filled all fields',
                    'group' => ''
                );
                echo json_encode($response);
                exit;
            }

            $group_data = array(
                'the_group_type' => $this->input->post('the_group_type'),
                'the_group_name' => $this->input->post('the_group_name'),
                'the_group_goal' => $this->input->post('the_group_goal'),
                'the_group_currency' => $this->input->post('the_group_currency'),
                'the_group_purpose' => $this->input->post('the_group_purpose'),
                'the_group_creator' => $this->session->the_person_id,
                'the_group_date' => time()
            );

            $first_member = array(
                'the_member_id' => '',
                'the_user_id' => $this->session->the_person_id,
                'the_member_status' => 1,
                'date_joined' => time()
            );

            $my_groups = $this->db->select('the_person_groups')->where('the_person_id', $this->session->the_person_id)->get('the_people')->row()->the_person_groups;

            if ($this->db->insert('the_groups', $group_data)) {
                $group_id = $this->db->where('the_group_creator', $this->session->the_person_id)->order_by('the_group_id', 'DESC')->limit('1')->get('the_groups')->row()->the_group_id;

                if ($this->generate_group_table($group_id) == 'done') {
                    if ($this->db->table_exists('group_' . $group_id)) {
                        $this->db->insert('group_' . $group_id, $first_member);
                        $this->add_to_my_groups($group_id, $my_groups);
                        $response = array(
                            'status' => 'done',
                            'message' => 'Group succesfully created',
                            'group' => $group_id
                        );
                        echo json_encode($response);
                    } else {
                        $response = array(
                            'status' => 'pending',
                            'message' => 'We couldn\'t add the first member data to <strong>' . $this->input->post('the_group_name') . '</strong>. Kindly go to ' . base_url('group/g/' . $group_id) . 'to finish setting up the group',
                            'group' => $group_id
                        );
                        echo json_encode($response);
                    }
                } else {
                    $response = array(
                        'status' => 'failed',
                        'message' => 'There has been an error creating your group. Check your groups page to finish creating <strong>' . $this->input->post('the_group_name') . '</strong>',
                        'group' => $group_id
                    );
                    echo json_encode($response);
                }
                exit;
            } else {
                $response = array(
                    'status' => 'failed',
                    'message' => 'There was an error creating your group. Please check your information and try again',
                    'group' => ''
                );
                echo json_encode($response);
                exit;
            }
        } else {
            $response = array(
                'status' => 'failed',
                'message' => 'There was an error proccessing your data. Please reload the page and try again',
                'group' => ''
            );
            echo json_encode($response);
            exit;
        }
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

    private function add_to_my_groups($group_id, $my_groups)
    {
        if ($my_groups == '') {
            $this->db->where('the_person_id', $this->session->the_person_id)->set('the_person_groups', $group_id)->update('the_people');
        } else {
            $this->db->where('the_person_id', $this->session->the_person_id)->set('the_person_groups', $my_groups . ',' . $group_id)->update('the_people');
        }
    }
}
