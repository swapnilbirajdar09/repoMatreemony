<?php

class Searchbyprofileid_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
//---------------fun for get all user profiles by user profile id

    public function searchByProfile_id($filter_member_id) {
        if ($filter_member_id == '') {
            $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id";
        } else {
            $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_profile_id like '%$filter_member_id%'";
        }
        $result = $this->db->query($sql);
        //echo $sql;die();
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }
//---------------fun for get all user profiles
    public function getAllUserProfiles() {
        $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id";
        $result = $this->db->query($sql);
        //echo $sql;die();
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

}
