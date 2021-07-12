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
        $this->load->model('Overview_model');

        $me = $this->session->the_person_id;

        $data['page_name'] = 'groups/index';
        $data['page_title'] = 'Group';
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $data['groups'] = array();
        $data['groups'] = $this->Overview_model->get_groups(5, 0, $me);

        $this->load->view('index', $data);
    }

    public function g($group_id)
    {
        $group = $this->db->where('the_group_id', $group_id)->get('the_groups')->row();
        $members = $this->db->where('the_group_id', $group_id)->get('the_group_members');

        if ($this->db->where('the_user_id', $this->session->the_person_id)->where('the_group_id', $group_id)->get('the_group_members')->num_rows() != 1) {
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
        $data['group_members'] = $members->result_array();
        $data['group_total_members'] = $members->num_rows();
        $data['group_total'] = $this->db->select('sum(the_transaction_amount) as total')->where('the_transaction_group', $group_id)->where('the_transaction_status !=', 2)->get('the_transactions')->row()->total;
        $data['group_id'] = $group_id;
        $data['currencies'] = $this->db->get('currency')->result_array();
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');
        $data['page_name'] = 'groups/group/index';
        $data['page_title'] = $group->the_group_name;
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $this->load->view('index', $data);
    }

    public function create()
    {
        $data['currencies'] = $this->db->get('currency')->result_array();
        $data['page_name'] = 'groups/create/index';
        $this->load->view('groups/create/index', $data);
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

            if ($this->db->insert('the_groups', $group_data)) {
                $group_id = $this->db->order_by('the_group_id', 'DESC')->limit('1')->get('the_groups')->row()->the_group_id;

                if ($this->db->where('the_user_id', $this->session->the_person_id)->where('the_group_id', $group_id)->get('the_group_members')->num_rows == 0) {

                    $first_member = array(
                        'the_member_id' => '',
                        'the_group_id' => $group_id,
                        'the_user_id' => $this->session->the_person_id,
                        'the_member_status' => 1,
                        'the_date_joined' => time(),
                        'the_date_exit' => 0
                    );

                    $this->db->insert('the_group_members', $first_member);

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

    public function f($group_id, $feature)
    {
        $this->load->model('Group_model');

        $page_name = 'group/features';

        if ($feature != 'members' && !$this->db->table_exists('group_' . $group_id . '_' . $feature)) {
            header('location: ' . base_url('group/activate/' . $feature . '/' . $group_id));
            exit;
        } else {
            // $page_name = 'group/' . $feature;
            $page_name = "groups/$feature/index";
        }

        $the_group_name = $this->db->where('the_group_id', $group_id)->get('the_groups')->row()->the_group_name;

        $data['page_title'] = "$the_group_name | $feature";

        switch ($feature):
            case 'members':
                break;
            case 'projects':
                break;
            case 'activites':
                break;
            case 'income':
                break;
            case 'expense':
                break;
            case 'contributions':
                break;
            case 'assets':
                break;
            case 'loans':
                break;
            default:
        endswitch;

        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $data['page_name'] = $page_name;
        $data['group_id'] = $group_id;
        $data['for_the_statics'] = $data;

        $this->load->view('index', $data);
    }

    public function load_members($group_id, $limit, $offset, $search = '')
    {
        $this->load->model('Group_model');
        $group_data = (object)$this->Group_model->get_members($group_id, $limit, $offset, $search);

        $data['member_count'] = $group_data->member_count;
        $data['members'] = $group_data->members;

        return $this->load->view('groups/members/member_list', $data, false);
    }

    public function activate($feature, $group_id)
    {
        $group = $this->db->where('the_group_id', $group_id)->get('the_groups')->row();
        $data['user_details'] = $this->Database->select_single('the_person_first_name, the_person_last_name', array('the_person_email' => $this->session->the_person_email), NULL, 'the_people');

        $data['page_name'] = 'group/features';
        $data['page_title'] = "$group->the_group_name | $feature";

        $this->load->view('index', $data);
    }

    public function invites($group, $limit, $offset, $search = '')
    {
        $this->load->model('Group_model');
        $data['invites'] = $this->Group_model->get_invites($group, $limit, $offset, $search);

        return $this->load->view('groups/invites/invites', $data, false);
    }

    public function invite_member()
    {
    }

    public function new_group_member()
    {
        if ($_SERVER['REQUEST_METHOD'] = 'POST' && isset($_POST) && count($_POST) !== 0) {
            $group_member = array(
                'the_member_id' => '',
                'the_group_id' => $this->input->post('group'),
                'the_user_id' => $this->session->the_person_id,
                'the_member_status' => 1,
                'the_date_joined' => time(),
                'the_date_exit' => 0
            );

            $this->db->insert('the_group_members', $group_member);

            $response = array(
                'status' => 'done',
                'message' => 'User succesfully added',
                'group' => $this->input->post('group')
            );
            echo json_encode($response);
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

    public function accept_invite()
    {
    }

    private function generate_invite_link()
    {
    }

    private function send_email_invite()
    {
    }

    private function send_sms_invite()
    {
    }
}
