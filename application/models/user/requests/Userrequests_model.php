<?php

class Userrequests_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMySentRequests($sessionUser_id, $gender) {

        $query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$sessionUser_id'";
        $result = $this->db->query($query);

        $user_sent_requests = '';
        // if no db errors
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            foreach ($result->result_array() as $row) {
                $user_sent_requests = $row['user_sent_requests'];
            }
            $arr = json_decode($user_sent_requests, TRUE);
            $allUsersForSentRequests = [];
            // get subproductsb details
            if ($arr != '' && $arr != []) {
                foreach ($arr as $key) {
                    $sub_query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$key'";
                    $sub_result = $this->db->query($sub_query);
                    $allUsersForSentRequests[] = $sub_result->result_array();
                }
                return $allUsersForSentRequests;
            } else {
                return 500;
            }
            //$allData['subProduct_detail'] = $allSubProducts;
        }
    }

    public function getMySentApprovedRequests($sessionUser_id, $gender) {
        $query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$sessionUser_id'";
        $result = $this->db->query($query);

        $user_sent_requests_approved = '';
        // if no db errors
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            foreach ($result->result_array() as $row) {
                $user_sent_requests_approved = $row['user_sent_requests_approved'];
            }
            $arr = json_decode($user_sent_requests_approved, TRUE);
            $allUsersForSentRequestsApproved = [];
            // get subproductsb details
            if ($arr != '' && $arr != []) {
                foreach ($arr as $key) {
                    $sub_query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$key'";
                    $sub_result = $this->db->query($sub_query);
                    $allUsersForSentRequestsApproved[] = $sub_result->result_array();
                }
                return $allUsersForSentRequestsApproved;
            } else {
                return 500;
            }
        }
    }

    public function getMyReceivedRequests($sessionUser_id, $gender) {
        $query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$sessionUser_id'";
        $result = $this->db->query($query);

        $user_received_requests = '';
        // if no db errors
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            foreach ($result->result_array() as $row) {
                $user_received_requests = $row['user_received_requests'];
            }
            $arr = json_decode($user_received_requests, TRUE);
            $allUsersForReceivedRequests = [];
            // get subproductsb details
            if ($arr != '' && $arr != []) {
                foreach ($arr as $key) {
                    $sub_query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$key'";
                    $sub_result = $this->db->query($sub_query);
                    $allUsersForReceivedRequests[] = $sub_result->result_array();
                }
                return $allUsersForReceivedRequests;
            } else {
                return 500;
            }
            //$allData['subProduct_detail'] = $allSubProducts;
        }
    }

    public function getMyReceivedApprovedRequests($sessionUser_id, $gender) {
        $query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$sessionUser_id'";
        $result = $this->db->query($query);

        $user_received_requests_approved = '';
        // if no db errors
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            foreach ($result->result_array() as $row) {
                $user_received_requests_approved = $row['user_received_requests_approved'];
            }
            $arr = json_decode($user_received_requests_approved, TRUE);
            $allUsersForReceivedApprovedRequests = [];
            // get subproductsb details
            if ($arr != '' && $arr != []) {
                foreach ($arr as $key) {
                    $sub_query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$key'";
                    $sub_result = $this->db->query($sub_query);
                    $allUsersForReceivedApprovedRequests[] = $sub_result->result_array();
                }
                return $allUsersForReceivedApprovedRequests;
            } else {
                return 500;
            }
            //$allData['subProduct_detail'] = $allSubProducts;
        }
    }

//-----------------------fun for get the list of followers which are followed by session user------//
    public function getMyFollowers($sessionUser_id, $gender) {
        $query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$sessionUser_id'";
        $result = $this->db->query($query);

        $user_favourite = '';
        // if no db errors
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            foreach ($result->result_array() as $row) {
                $user_favourite = $row['user_favourite'];
            }
            $arr = json_decode($user_favourite, TRUE);
            $allUserFavourites = [];
            // get subproductsb details
            if ($arr != '' && $arr != []) {
                foreach ($arr as $key) {
                    $sub_query = "SELECT * FROM user_tab,user_profile_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_id = '$key'";
                    $sub_result = $this->db->query($sub_query);
                    $allUserFavourites[] = $sub_result->result_array();
                }
                return $allUserFavourites;
            } else {
                return 500;
            }
            //$allData['subProduct_detail'] = $allSubProducts;
        }
    }

}
