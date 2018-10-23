<?php

class Registeruser_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // --------------function to register user
    public function register_user($data) {
        // print_r($data);
        extract($data);
        $query = "INSERT INTO hospital_tab(hosp_name,hosp_location,hosp_addr,hosp_number,hosp_email)"
                . "VALUES ('$hospital_name','$hospital_location','$hospital_address','$hospital_num','$hosp_email')";
        // echo $query;die();
        // $result = $this->db->query($query);
        if ($this->db->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}