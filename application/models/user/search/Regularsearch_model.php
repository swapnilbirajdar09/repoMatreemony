<?php

class Regularsearch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//---------------fun for get all user profiles by diffrent parameters like age , language, religion, marital status
    public function getAllUserProfilesByRegularSearch($request, $gender) {
        extract($request);
        //$sql = '';
        $sql = "SELECT * FROM user_profile_tab,user_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_gender != '$gender' ";

        if ($language != '') {
            $sql .= "AND user_profile_tab.user_mother_tongue = '$language' ";
        }
        if ($religion != '') {
            $sql .= "AND user_tab.user_caste = '$religion' ";
        }
        if ($filter_aged_from != '') {
            $sql .= "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25) ";
        }
        if ($filter_aged_to != '') {
            $sql .= "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25) ";
        }
        if ($maritalStatus != '') {
            $sql .= "AND user_profile_tab.user_marital_status = '$maritalStatus' ";
        }
        $sql .= "AND user_tab.user_status='1' AND user_tab.user_doc_verified='1' ORDER BY user_tab.user_id DESC";

        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

}
