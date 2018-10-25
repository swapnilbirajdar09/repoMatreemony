<?php

class Searchbyprofileid_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//---------------fun for get all user profiles by user profile id

    public function searchByProfile_id($filter_member_id, $gender) {
        if ($filter_member_id == 'undefined') {
            $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_tab.user_gender !='$gender' ORDER BY user_tab.user_id DESC ";
        } else {
            $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_tab.user_gender !='$gender' AND user_profile_key like '%$filter_member_id%' ORDER BY user_tab.user_id DESC";
        }
        //echo $sql;die();
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//---------------fun for get all user profiles
    public function getAllUserProfiles($gender) {
        $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_tab.user_gender != '$gender' ORDER BY user_tab.user_id DESC";
        $result = $this->db->query($sql);
        //echo $sql;die();
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//--------------fun for send request to user
    public function sendRequestToUser($profile_user_id, $user_id) {
        //sql query to get all user profile details



        $query = "SELECT * FROM user_profile_tab as up_tab join user_tab as u_tab WHERE up_tab.user_id='$user_id'";
        //echo $query;die();
        $result = $this->db->query($query);
        $receiveRequests = array();
        $sentRequests = array();
        $sentReqs = '';
        $userRequestCount = '';
        foreach ($result->result_array() as $row) {
            $sentRequests = json_decode($row['user_sent_requests'], TRUE);
            $receiveRequests = json_decode($row['user_received_requests'], TRUE);
            $userRequestCount = $row['user_remaining_requests'];
        }
//-----checking the receivers id is in senders received requests coloumn
        if (in_array($profile_user_id, $receiveRequests)) {
            return 700;
        } else {
            //------------minus the request count when request is sent
            $userRequestCount = $userRequestCount - 1;

            if ($userRequestCount != 0 && $userRequestCount <= 5) {
                //if no record found for user
                if ($sentRequests == '') {
                    $sentRequests[] = $profile_user_id;
                } else {
                    //---------condition --------//  
                    $count = count($sentRequests);
                    $sentRequests[] = $profile_user_id;
                }
                //-------------update the profiles user id in senders sent request coloumn
                $sentReqs = json_encode($sentRequests);
                $sql = "UPDATE user_profile_tab SET user_sent_requests = '$sentReqs' WHERE user_id = '$user_id'";

                $this->db->query($sql);
                if ($this->db->affected_rows() > 0) {  //----checking the sent requests coloumn updated then call the fun below
                    //-----------------for update receivers received request coloumn by saving the senders userid
                    $response = Searchbyprofileid_model::updateUserReceivedRequests($profile_user_id, $user_id);
                    if ($response) {
                        return 200;
                    } else {
                        return 500;
                    }
                } else {
                    return 500;
                }
            } else {
                return 700;
            }
        }
    }

    //-----------------for update receivers received request coloumn by saving the senders userid

    public function updateUserReceivedRequests($profile_user_id, $user_id) {
        //sql query to get all user profile details
        $query = "SELECT * FROM user_profile_tab WHERE user_id='$profile_user_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $receivedRequests = array();
        $receiveReqs = '';
        foreach ($result->result_array() as $row) {
            $receivedRequests = json_decode($row['user_received_requests'], TRUE);
        }

        //if no record found for user
        if ($receivedRequests == '') {
            $receivedRequests[] = $user_id;
        } else {
            //---------condition --------//  
            $count = count($receivedRequests);
            $receivedRequests[] = $user_id;
        }

        $receiveReqs = json_encode($receivedRequests);
        $sql = "UPDATE user_profile_tab SET user_received_requests = '$receiveReqs' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
