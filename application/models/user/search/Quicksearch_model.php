<?php

class Quicksearch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//---------------fun for get all user profiles by diffrent parameters like age , language, religion, gender

    public function getAllUserProfilesByRegularSearch($request) {
        extract($request);

        if ($customerName == 'all' && $prod_type == 'all') {
            $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id";
//        } elseif ($prod_type != 'all' && $customerName != 'all') {
//            $sql = "SELECT * FROM product_master WHERE prod_type = '$prod_type' AND customer_name = '$customerName'";
//        } elseif ($prod_type == 'all' && $customerName != 'all') {
//            $sql = "SELECT * FROM product_master WHERE customer_name = '$customerName'";
//        } elseif ($prod_type != 'all' && $customerName == 'all') {
//            $sql = "SELECT * FROM product_master WHERE prod_type = '$prod_type'";
//        } else {
//            $sql = "SELECT * FROM product_master";
//        }
        //echo $sql;
        //die();
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

}
