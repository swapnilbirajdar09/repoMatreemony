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

    // update abput me section for user
    public function update_about_me($about_me,$user_id){

        $result = array(
            'user_about_me' => $about_me
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update abput me section for user
    public function update_expectations($expectations,$user_id){

        $result = array(
            'user_partner_expections' => $expectations
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }


}
