<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Model
{
    public function select($select = NULL, $where = NULL, $limit = NULL, $join = NULL, $table = NULL)
    {
        if ($select != NULL) $this->db->select($select);
        if ($where != NULL) $this->db->where($where);
        if ($limit != NULL) $this->db->limit($limit);
        if ($join != NULL) $this->db->join($join);

        return $this->db->get($table)->result_array();
    }

    public function select_single($select = NULL, $where = NULL, $join = NULL, $table = NULL)
    {
        if ($select != NULL) $this->db->select($select);
        if ($where != NULL) $this->db->where($where);
        if ($join != NULL) $this->db->join($join);

        return $this->db->get($table)->row();
    }

    public function insert($data, $table)
    {
        if ($this->db->insert($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($where, $table)
    {
        return $this->db->where($where)->delete($table);
    }

    public function update($where, $data, $table)
    {
        return $this->db->where($where)->set($data)->update($table);
    }

    public function count($where, $table)
    {
        return $this->db->get_where($table, $where)->num_rows();
    }
}
