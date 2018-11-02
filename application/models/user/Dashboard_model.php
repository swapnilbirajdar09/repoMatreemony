<?php

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

  public function getAllUserProfiles($gender) {
        $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_tab.user_gender!='$gender' AND user_tab.user_status='1' AND user_tab.user_doc_verified='1' order by user_tab.user_id DESC limit 5";
        $result = $this->db->query($sql);
        //echo $sql;die();
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }
}