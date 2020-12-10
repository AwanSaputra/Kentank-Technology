<?php

class loginmodel extends CI_Model
{
    public function checkLogin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
