<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ModelAccountOperation extends CI_Model { 

    public function Validate_Data($data) {
    
        $condition = "Email='{$data['email']}' AND Password='{$data['password']}'";

        $this->db->select("*");
        $this->db->from("t_users");

        $this->db->where($condition);

        $query = $this->db->get();

        if($query->num_rows() == 0) {
            return false;
        }

        return $query->result();
    }

    public function insertData($data) {
        
        $this->db->insert("t_users", $data);
    }

    public function changePassword($data) {
        $condition = "Email='{$data['email']}'";

        $this->db->where($condition);
        $this->db->update("t_users",$data);
    }

}?>