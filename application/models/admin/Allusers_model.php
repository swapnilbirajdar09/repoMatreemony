<?php

class Allusers_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//------tget all user list--------------//
     public function getAllUsers() {
        $sql = "SELECT * FROM user_profile_tab";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            $response = array(
                'status' => 500,
                'status_message' => 'No data found.');
        } else {
            $response = array(
                'status' => 200,
                'status_message' => $result->result_array());
        }
        return $response;
    }
}
