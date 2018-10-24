<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // function to get user details
    public function getUserDetails($user_id) {
        $sql = "SELECT * FROM user_tab, user_profile_tab WHERE user_tab.user_id=user_profile_tab.user_id AND user_tab.user_id='$user_id' LIMIT 1 ";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

    // logout function for user
    public function logoutUser($user_id){
        // update logout user
        $result = array(
            'user_logout_at' => date ("Y-m-d H:i:s"),
            'user_status' => '0'
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

}
