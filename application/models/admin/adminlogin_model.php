<?php

class adminlogin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // login function to authenticate user
    public function adminlogin($username, $password) {

        //print_r($username);die();
        // get admin username
        //---get admin details
        $sql = "SELECT * FROM admin_tab";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            $Admin_username = '';
            $Admin_password = '';
            foreach ($result->result_array() as $key) {
                $Admin_username = $key['username'];
                $Admin_password = $key['password'];
            }
        }

        if ($Admin_username != $username) {
            echo '<p class="w3-red w3-padding-small">Invalid Key passed for username!</p>';
        }
        if ($Admin_password != $password) {
            echo '<p class="w3-red w3-padding-small">Invalid Key passed for password!</p>';
        }
//        $admin_username = adminlogin_model::getAdminDetails('username');
//        // check passed key valid or not
//        if (!$admin_username) {
//            echo '<p class="w3-red w3-padding-small">Invalid Key passed for username!</p>';
//        }
//
//        // get admin password
//        $admin_password = adminlogin_model::getAdminDetails('password');
//        // check passed key valid or not
//        if (!$admin_password) {
//            echo '<p class="w3-red w3-padding-small">Invalid Key passed for password!</p>';
//        }
        // check post values with db values
        if ($Admin_username == $username && $Admin_password == $password) {
            return TRUE;
        } else {
            return FALSE;
        }
//        if ($admin_username == $username && $admin_password == $password) {
//            return true;
//        } else {
//            return false;
//        }
    }

    // -----------------------GET ADMIN DETAILS----------------------//
    //-------------------------------------------------------------//
    public function getAdminDetails($name) {

        $query = "SELECT * FROM admin_details WHERE name='$name'";
        //echo $query;die();
        $result = $this->db->query($query);

        // handle db error
        if (!$result) {
            // Has keys 'code' and 'message'
            $error = $this->db->error();
            return $error;
            die();
        }

        // if no db errors
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            $value = '';
            foreach ($result->result_array() as $key) {
                $value = $key['value'];
            }
            return $value;
        }
    }

}
