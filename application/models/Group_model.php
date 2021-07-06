<?php

class Group_model extends CI_Model
{
    public function get_members($group, $limit, $offset)
    {
        $data = array();
        $data['the_group_name'] = $this->db->where('the_group_id', $group)->get('the_groups')->row()->the_group_name;
        $data['member_count'] = $this->db->where('the_group_id', $group)->get('the_group_members')->num_rows();
        $data['members'] = $this->db->where('the_group_id', $group)->join('the_people', 'the_people.the_person_id = the_group_members.the_member_id')->limit($limit, $offset)->get('the_group_members')->result_array();

        return $data;
    }
}
