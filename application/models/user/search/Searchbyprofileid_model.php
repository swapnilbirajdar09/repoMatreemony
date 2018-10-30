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
    public function sendRequestToUser($profile_user_id, $user_id, $gender) {
        //sql query to get all user profile details
        $query = "SELECT * FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$user_id'";
        $result = $this->db->query($query);

        $receiveRequests = array();
        $sentRequests = array();
        $sentReqs = '';
        $userRequestCount = 0;
        $userRequestCountNew = '';
        foreach ($result->result_array() as $row) {
            $sentRequests = json_decode($row['user_sent_requests'], TRUE);
            $receiveRequests = json_decode($row['user_received_requests'], TRUE);
            $userRequestCount = $row['user_remaining_requests'];
        }
//-----checking the receivers id is in senders received requests coloumn

        if ($receiveRequests == '') {
            $receiveRequests = [];
        } else {
            $receiveRequests = $receiveRequests;
        }

        if (in_array($profile_user_id, $receiveRequests)) {
            return 900;
        } else {
            //------------minus the request count when request is sent

            if ($userRequestCount != 0 && $userRequestCount <= 5) {
                //if no record found for user

                $userRequestCount = $userRequestCount - 1;

                $sqlup = "UPDATE user_tab SET user_remaining_requests = '$userRequestCount' WHERE user_id = '$user_id'";

                $this->db->query($sqlup);

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

    //-----------------for update receivers received request coloumn by saving the senders userid
    //--------------fun for accept the user request-----------------//
    public function acceptUserConfirmRequest($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab join user_tab as u_tab "
                . "WHERE up_tab.user_id = u_tab.user_id "
                . "AND up_tab.user_id='$sessionUser_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $receiveReqs = array();
        $receiveRequests = array();
        $user_received_requests_approved = array();
        $sentReqs = '';
        $userRequestCount = 0;
        $reqApproved = '';
        foreach ($result->result_array() as $row) {
            $user_received_requests_approved = json_decode($row['user_received_requests_approved'], TRUE);
            $receiveRequests = json_decode($row['user_received_requests'], TRUE);
            $userRequestCount = $row['user_remaining_requests'];
        }

        foreach ($receiveRequests as $key) {
            if ($profile_user_id != $key) {
                $receiveReqs[] = $key;
            }
        }

        $recReq = json_encode($receiveReqs);
        $sql = "UPDATE user_profile_tab SET user_received_requests = '$recReq' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sql);

        if ($user_received_requests_approved == '') {
            $user_received_requests_approved[] = $profile_user_id;
        } else {
            //---------condition --------//  
            $user_received_requests_approved[] = $profile_user_id;
        }
        $reqApproved = json_encode($user_received_requests_approved);

        $sqlup = "UPDATE user_profile_tab SET user_received_requests_approved = '$reqApproved' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sqlup);

        if ($this->db->affected_rows() > 0) {  //----checking the sent requests coloumn updated then call the fun below
            //-----------------for update receivers received request coloumn by saving the senders userid
            $response = Searchbyprofileid_model::updateAcceptUserConfirmRequest_AtSenderSide($profile_user_id, $sessionUser_id);
            if ($response) {
                return 200;
            } else {
                return 500;
            }
        } else {
            return 500;
        }
    }

//-------------fun for update the user request coloumn and user request approved coloumns when user requst get accepted--//
    public function updateAcceptUserConfirmRequest_AtSenderSide($profile_user_id, $sessionUser_id) {
        $query = "SELECT * FROM user_profile_tab as up_tab join user_tab as u_tab "
                . "WHERE up_tab.user_id = u_tab.user_id "
                . "AND up_tab.user_id='$profile_user_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $reqArray = array();
        $user_sent_requests_approved = array();
        $sentRequests = array();
        $reqApproved = '';
        $userRequestCount = 0;
        $userRequestCountNew = '';
        foreach ($result->result_array() as $row) {
            $sentRequests = json_decode($row['user_sent_requests'], TRUE);
            $user_sent_requests_approved = json_decode($row['user_sent_requests_approved'], TRUE);
        }
        //echo $userRequestCount;
        foreach ($sentRequests as $key) {
            if ($sessionUser_id != $key) {
                $reqArray[] = $key;
            }
        }

        $recReq = json_encode($reqArray);
        $sql = "UPDATE user_profile_tab SET user_sent_requests = '$recReq' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);

        if ($user_sent_requests_approved == '') {
            $user_sent_requests_approved[] = $sessionUser_id;
        } else {
            //---------condition --------//  
            $user_sent_requests_approved[] = $sessionUser_id;
        }

        $reqApproved = json_encode($user_sent_requests_approved);

        $sqlup = "UPDATE user_profile_tab SET user_sent_requests_approved = '$reqApproved' WHERE user_id = '$profile_user_id'";

        $this->db->query($sqlup);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // -----------------------DELETE USER REQUEST ----------------------//
    //-------------------------------------------------------------//
    public function cancelRequestOfUser($profile_user_id, $sessionUser_id, $gender) {

        $query = "SELECT * FROM user_profile_tab as up_tab join user_tab as u_tab "
                . "WHERE up_tab.user_id = u_tab.user_id "
                . "AND up_tab.user_id='$sessionUser_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $reqArray = array();
        $receiveRequests = array();
        $sentRequests = array();
        $sentReqs = '';
        $userRequestCount = 0;
        $userRequestCountNew = '';
        foreach ($result->result_array() as $row) {
            $sentRequests = json_decode($row['user_sent_requests'], TRUE);
            $receiveRequests = json_decode($row['user_received_requests'], TRUE);
            $userRequestCount = $row['user_remaining_requests'];
        }
        //echo $userRequestCount;

        foreach ($sentRequests as $key) {
            if ($profile_user_id != $key) {
                $reqArray[] = $key;
            }
        }

        //if no record found for user
        $userRequestCount = $userRequestCount + 1;

        $sqlup = "UPDATE user_tab SET user_remaining_requests = '$userRequestCount' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sqlup);

        $sentReqs = json_encode($reqArray);
//        print_r($sentReqs);
//        die();
        $sql = "UPDATE user_profile_tab SET user_sent_requests = '$sentReqs' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {  //----checking the sent requests coloumn updated then call the fun below
            //-----------------for update receivers received request coloumn by saving the senders userid
            $response = Searchbyprofileid_model::updateUserReceivedRequestsForCancellation($profile_user_id, $sessionUser_id);
            if ($response) {
                return 200;
            } else {
                return 500;
            }
        } else {
            return 500;
        }
    }

    // -----------------------DELETE USER REQUEST----------------------//
    //-------------------------------------------------------------//

    public function updateUserReceivedRequestsForCancellation($profile_user_id, $sessionUser_id) {
        //sql query to get all user profile details
        $query = "SELECT * FROM user_profile_tab WHERE user_id='$profile_user_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $receivedRequests = array();
        $receiveReqs = array();
        $recReq = '';
        foreach ($result->result_array() as $row) {
            $receivedRequests = json_decode($row['user_received_requests'], TRUE);
        }

        foreach ($receivedRequests as $key) {
            if ($sessionUser_id != $key) {
                $receiveReqs[] = $key;
            }
        }

        $recReq = json_encode($receiveReqs);
        $sql = "UPDATE user_profile_tab SET user_received_requests = '$recReq' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//----------------fun for cancel the request from user received requests----------------//
    public function cancelRequestOfUserForReceived($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab join user_tab as u_tab "
                . "WHERE up_tab.user_id = u_tab.user_id "
                . "AND up_tab.user_id='$profile_user_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $reqArray = array();
        $receiveRequests = array();
        $sentRequests = array();
        $sentReqs = '';
        $userRequestCount = 0;
        $userRequestCountNew = '';
        foreach ($result->result_array() as $row) {
            $sentRequests = json_decode($row['user_sent_requests'], TRUE);
            $receiveRequests = json_decode($row['user_received_requests'], TRUE);
            $userRequestCount = $row['user_remaining_requests'];
        }
        //echo $userRequestCount;
        foreach ($sentRequests as $key) {
            if ($sessionUser_id != $key) {
                $reqArray[] = $key;
            }
        }

        //if no record found for user
        $userRequestCount = $userRequestCount + 1;

        $sqlup = "UPDATE user_tab SET user_remaining_requests = '$userRequestCount' WHERE user_id = '$profile_user_id'";

        $this->db->query($sqlup);

        $sentReqs = json_encode($reqArray);
//        print_r($sentReqs);
//        die();
        $sql = "UPDATE user_profile_tab SET user_sent_requests = '$sentReqs' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {  //----checking the sent requests coloumn updated then call the fun below
            //-----------------for update receivers received request coloumn by saving the senders userid
            $response = Searchbyprofileid_model::updateCancelRequestOfUserForReceived($profile_user_id, $sessionUser_id);
            if ($response) {
                return 200;
            } else {
                return 500;
            }
        } else {
            return 500;
        }
    }

//-------------------fun for update the received requests count --------------------------------//
    public function updateCancelRequestOfUserForReceived($profile_user_id, $sessionUser_id) {
        $query = "SELECT * FROM user_profile_tab WHERE user_id='$sessionUser_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $receivedRequests = array();
        $receiveReqs = array();
        $recReq = '';
        foreach ($result->result_array() as $row) {
            $receivedRequests = json_decode($row['user_received_requests'], TRUE);
        }

        foreach ($receivedRequests as $key) {
            if ($profile_user_id != $key) {
                $receiveReqs[] = $key;
            }
        }

        $recReq = json_encode($receiveReqs);
        $sql = "UPDATE user_profile_tab SET user_received_requests = '$recReq' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//---------------------fun for cancel the request from user received requests approved --------------------------//
    public function cancelRequestOfUserForReceivedApprovedRequest($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$sessionUser_id'";

        $result = $this->db->query($query);

        $reqArray = array();
        $receiveApprovRequests = array();
        $sentRequests = array();
        $receivReqs = '';
        $userRequestCount = 0;
        $userRequestCountNew = '';
        foreach ($result->result_array() as $row) {
            $receiveApprovRequests = json_decode($row['user_received_requests_approved'], TRUE);
        }
        //echo $userRequestCount;
        foreach ($receiveApprovRequests as $key) {
            if ($profile_user_id != $key) {
                $reqArray[] = $key;
            }
        }
        $receivReqs = json_encode($reqArray);
        $sql = "UPDATE user_profile_tab SET user_received_requests_approved = '$receivReqs' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {  //----checking the sent follow requests coloumn updated then call the fun below
            //-----------------for update receivers received follow request count coloumn 
            $response = Searchbyprofileid_model::updateRequestOfUserForReceivedApprovedRequestCancellation($profile_user_id, $sessionUser_id, $gender);
            if ($response) {
                return 200;
            } else {
                return 500;
            }
        } else {
            return 500;
        }
    }

//-------------------------------------------------------------------------------------------------//
    public function updateRequestOfUserForReceivedApprovedRequestCancellation($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab join user_tab as u_tab "
                . "WHERE up_tab.user_id = u_tab.user_id "
                . "AND up_tab.user_id='$profile_user_id'";
        //echo $query;die();
        $result = $this->db->query($query);

        $reqArray = array();
        $receiveRequests = array();
        $sentRequests = array();
        $sentReqs = '';
        $userRequestCount = 0;
        $userRequestCountNew = '';
        foreach ($result->result_array() as $row) {
            $sentRequests = json_decode($row['user_sent_requests_approved'], TRUE);
            $userRequestCount = $row['user_remaining_requests'];
        }
        //echo $userRequestCount;
        foreach ($sentRequests as $key) {
            if ($sessionUser_id != $key) {
                $reqArray[] = $key;
            }
        }

        //if no record found for user
        $userRequestCount = $userRequestCount + 1;

        $sqlup = "UPDATE user_tab SET user_remaining_requests = '$userRequestCount' WHERE user_id = '$profile_user_id'";

        $this->db->query($sqlup);

        $sentReqs = json_encode($reqArray);
//        print_r($sentReqs);
//        die();
        $sql = "UPDATE user_profile_tab SET user_sent_requests_approved = '$sentReqs' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//------------------fun for folloing the user profile or add to favourites---------------------//
    public function followUserProfile($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$sessionUser_id'";

        $result = $this->db->query($query);

        $userFavourites = array();
        foreach ($result->result_array() as $row) {
            $userFavourites = json_decode($row['user_favourite'], TRUE);
        }

        if ($userFavourites == '') {
            $userFavourites[] = $profile_user_id;
        } else {
            //---------condition --------//  
            $userFavourites[] = $profile_user_id;
        }
        //-------------update the profiles user id in senders sent request coloumn
        $favourites = json_encode($userFavourites);
        $sql = "UPDATE user_profile_tab SET user_favourite = '$favourites' WHERE user_id = '$sessionUser_id'";

        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {  //----checking the sent follow requests coloumn updated then call the fun below
            //-----------------for update receivers received follow request count coloumn 
            $response = Searchbyprofileid_model::updateFollowersCount($profile_user_id, $sessionUser_id, $gender);
            if ($response) {
                return 200;
            } else {
                return 500;
            }
        } else {
            return 500;
        }
    }

//----------------fun for update followers count by 1 of followers side
    public function updateFollowersCount($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$profile_user_id'";
        $result = $this->db->query($query);
        $who_make_me_favourite = array();
        $userFabouriteCount = 0;
        $madeMeFavourite = '';
        foreach ($result->result_array() as $row) {
            $userFabouriteCount = $row['self_favourite_count'];
            $who_make_me_favourite = json_decode($row['who_make_me_favourite'], TRUE);
        }
        //------------plus the follower count when request is sent
        //if no record found for user
        if ($who_make_me_favourite == '') {
            $who_make_me_favourite[] = $sessionUser_id;
        } else {
            //---------condition --------//  
            $count = count($who_make_me_favourite);
            $who_make_me_favourite[] = $sessionUser_id;
        }

        $madeMeFavourite = json_encode($who_make_me_favourite);
        $sql = "UPDATE user_profile_tab SET who_make_me_favourite = '$madeMeFavourite' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);

        $userFabouriteCount = $userFabouriteCount + 1;

        $sqlup = "UPDATE user_profile_tab SET self_favourite_count = '$userFabouriteCount' WHERE user_id = '$profile_user_id'";

        $this->db->query($sqlup);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//------------------------get my favourites profiles coloumn--------------//
    public function getUserFollows($user_id, $gender) {
        $query = "SELECT up_tab.user_favourite FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$user_id'";

        $result = $this->db->query($query);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//------------fun for unfollow user profile------------------------------//
    public function unFollowUserProfile($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$sessionUser_id'";

        $result = $this->db->query($query);
        $favrits = array();
        $userFavourites = array();
        foreach ($result->result_array() as $row) {
            $userFavourites = json_decode($row['user_favourite'], TRUE);
        }

        foreach ($userFavourites as $key) {
            if ($profile_user_id != $key) {
                $favrits[] = $key;
            }
        }

        $favourites = json_encode($favrits);
        $sql = "UPDATE user_profile_tab SET user_favourite = '$favourites' WHERE user_id = '$sessionUser_id'";
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            $response = Searchbyprofileid_model::updateUnFollowersCount($profile_user_id, $sessionUser_id, $gender);
            if ($response) {
                return 200;
            } else {
                return 500;
            }
        } else {
            return 500;
        }
    }

//-----------------fun for update the unfollowers count---------------------------------//
    public function updateUnFollowersCount($profile_user_id, $sessionUser_id, $gender) {
        $query = "SELECT * FROM user_profile_tab as up_tab,user_tab as ut_tab "
                . "WHERE up_tab.user_id = ut_tab.user_id "
                . "AND ut_tab.user_id='$profile_user_id'";
        $result = $this->db->query($query);
        $who_make_me_favourite = array();
        $userFabouriteCount = 0;
        $recReq = '';
        $who_make_favourite = array();
        foreach ($result->result_array() as $row) {
            $userFabouriteCount = $row['self_favourite_count'];
            $who_make_me_favourite = json_decode($row['who_make_me_favourite'], TRUE);
        }
        //------------plus the follower count when request is sent

        foreach ($who_make_me_favourite as $key) {
            if ($sessionUser_id != $key) {
                $who_make_favourite[] = $key;
            }
        }

        $recReq = json_encode($who_make_favourite);
        $sql = "UPDATE user_profile_tab SET who_make_me_favourite = '$recReq' WHERE user_id = '$profile_user_id'";

        $this->db->query($sql);

        $userFabouriteCount = $userFabouriteCount - 1;

        $sqlup = "UPDATE user_profile_tab SET self_favourite_count = '$userFabouriteCount' WHERE user_id = '$profile_user_id'";

        $this->db->query($sqlup);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
