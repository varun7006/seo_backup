<?php

class UserModel extends CI_Model {

    public function getUserList() {
        $this->db->select("a.*,b.name as country_name");
        $this->db->from("users as a");
        $this->db->join("country as b","a.country_id = b.id","LEFT");
        $this->db->where("a.status", "TRUE");
        $result = $this->db->get()->result_array();
        $userCount = count($result);
        if ($userCount > 0) {
            return array("status" => "SUCCESS", "value" => array("list" => $result, "count" => $userCount), "message" => "user List is present");
        } else {
            return array("status" => "ERR", "value" => array(), "message" => "No user Found");
        }
    }

    public function saveNewUserDetails($dataArr) {
        $result = $this->db->insert("users", $dataArr);
        if (count($result) > 0) {
            return array("status" => "SUCCESS", "value" => $result, "msg" => "user details saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to save new user.");
        }
    }

    public function updateUserDetails($dataArr, $updateId) {
        $this->db->where('id', $updateId);
        $updateResult = $this->db->update('users', $dataArr);
        
        if ($this->db->affected_rows() > 0) {
            return array("status" => "SUCCESS", "value" => "1", "msg" => "user details saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to updae user details.");
        }
    }
    
    public function deleteUser($deleteId) {
        $this->db->where('id', $deleteId);
        $deleteResult = $this->db->update('users', array("status"=>'FALSE'));
        if ($this->db->affected_rows() > 0) {
            return array("status" => "SUCCESS", "value" => "1", "msg" => "user deleted successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to delete user.");
        }
    }
    
    public function saveUserByExcel($dataArr) {
        $result = $this->db->insert_batch('users',$dataArr);
       
        if (count($result) > 0) {
            return array("status" => "SUCCESS", "value" => $result, "msg" => "user details saved successfully.");
        } else {
            return array("status" => "ERR", "value" => "-1", "msg" => "unable to save user by excel.");
        }
    }

}
