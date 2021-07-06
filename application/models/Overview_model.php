<?php

class Overview_model extends CI_Model
{
    public function get_groups($limit, $offset, $user)
    {
        $groups = $this
            ->db
            ->where('the_user_id', $user)
            ->where('the_member_status', 1)
            ->join('the_groups', 'the_groups.the_group_id = the_group_members.the_group_id')
            ->limit($limit, $offset)
            ->get('the_group_members')
            ->result_array();

        foreach ($groups as $key => $group) {
            $group[$key]['the_transaction_amount'] = $this->db->select('SUM(the_transaction_amount) so_far')->where('the_transaction_group', $group['the_group_id'])->get('the_transactions')->row()->so_far;
        }

        return $groups;
    }

    public function get_transactions($user)
    {
        $dates = $this->db
            ->select('the_transaction_date')
            ->where('the_transaction_user', $user)
            ->where('the_transaction_status !=', 2)
            ->group_by('date_format(from_unixtime(the_transaction_date), "%d")')
            ->limit('10')
            ->order_by('the_transaction_date', 'DESC')
            ->get('the_transactions')->result_array();

        $transactions = array();

        foreach ($dates as $date) {
            $collection_date = date('dmY', $date['the_transaction_date']);
            $collection_stamp = date('j\<\s\u\p\>S\<\/\s\u\p\> M', $date['the_transaction_date']);
            $transactions[$collection_stamp] = $this->db
                ->query("SELECT * FROM `the_transactions` WHERE `the_transaction_user` = $user AND date_format(from_unixtime(the_transaction_date), '%d%m%Y') = $collection_date AND `the_transaction_status` != 2 ORDER BY `the_transaction_id` DESC LIMIT 10")->result_array();
        }

        return $transactions;
    }
}
