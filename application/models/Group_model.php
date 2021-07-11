<?php

class Group_model extends CI_Model
{
    public function get_members($group, $limit, $offset, $search = '')
    {
        $data = array();
        $data['member_count'] = $this->db->where('the_group_id', $group)->get('the_group_members')->num_rows();
        $query = "SELECT * FROM `the_people` JOIN `the_group_members` ON `the_people`.`the_person_id` = `the_group_members`.`the_user_id` WHERE `the_group_id` = $group LIMIT 10 OFFSET $offset";

        if ($search != '') {
            $query = "SELECT * FROM `the_people` JOIN `the_group_members` ON `the_people`.`the_person_id` = `the_group_members`.`the_user_id` WHERE `the_group_id` = $group AND (`the_person_first_name` LIKE '%$search%' OR `the_person_last_name` LIKE '%$search%') LIMIT 10 OFFSET $offset";
        }

        $data['members'] = $this->db->query($query)->result_array();

        return $data;
    }
}
