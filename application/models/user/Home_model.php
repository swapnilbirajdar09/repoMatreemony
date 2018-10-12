<?php

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // get all countries details
    public function getCountries() {
        $sql = "SELECT * From countries";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return FALSE;
        } else {
            return $result->result_array();
        }
    }
}