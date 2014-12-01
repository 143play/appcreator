<?php
class M_common extends CI_Model
{
    function checkCredentials($username, $password)
    {
        $this->db->select();
        $this->db->from("user");
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get()->row();
    }
    function getAllRow($tableName)
    {
        $this->db->select();
        $this->db->from($tableName);
        return $this->db->get()->result();
    }
    
    function getGlobalUserInfo($userId)
    {
        $this->db->select();
        $this->db->from("user");
        $this->db->where("user.id", $userId);
        return $this->db->get()->row();
    }
    function insert($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function update($tableName, $data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update($tableName, $data);
        return $this->db->affected_rows();
    }

    function delete($tableName, $id)
    {
        $this->db->where("id",$id);
        $this->db->delete($tableName);
        return $this->db->affected_rows();
    }
}
