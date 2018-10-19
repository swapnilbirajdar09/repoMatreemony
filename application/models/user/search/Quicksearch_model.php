<?php

class Quicksearch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//---------------fun for get all user profiles by diffrent parameters like age , language, religion, gender

    public function getAllUserProfilesByQuickSearch($request) {
        extract($request);
       
        $sql = "SELECT * FROM user_profile_tab,user_tab WHERE user_tab.user_id = user_profile_tab.user_id ";

        if ($language != '') {
            $sql .= "AND user_profile_tab.user_mother_tongue = '$language'";
        }
        if ($religion != '') {
            $sql .= "AND user_profile_tab.user_caste = '$religion'";
        }
        if ($filter_aged_from != '') {
            $sql .= "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25)";
        }
        if ($filter_aged_to != '') {
            $sql .= "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
        }

        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//------fun for filter the users--------------------------//
}
