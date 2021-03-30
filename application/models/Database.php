<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Model
{
    public function select($select = NULL, $where = NULL, $limit = NULL, $join = NULL, $table)
    {
        if ($select != NULL) $this->db->select($select);
        if ($where != NULL) $this->db->where($where);
        if ($limit != NULL) $this->db->limit($limit);
        if ($join != NULL) $this->db->join($join);

        return $this->db->get($table)->result_array();
    }

    public function insert($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function delete($where, $table)
    {
        return $this->db->where($where)->delete($table);
    }

    public function update($where, $data, $table)
    {
        return $this->db->where($where)->set($data)->update($table);
    }
}
