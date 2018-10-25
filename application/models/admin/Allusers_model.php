<?php

class Allusers_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//------tget all user list--------------//
     public function getAllUsers() {
        $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            $response = array(
                'status' => 500,
                'status_message' => 'No data found.');
        } else {
            $response = array(
                'status' => 200,
                'status_message' => $result->result_array());
        }
        return $response;
    }

    //-------------------fun for Delete Member Profile -----------------------------------//

    public function deleteUserDetails($user_id) {
        $sql = "DELETE FROM user_tab WHERE user_id = '$user_id'";
        $result = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return 200;
        } else {
            return 500;
        }
    }

//-------------fun for deactive user------------//
    public function deactiveuser($user_id)
    {
      $sql = "UPDATE user_tab SET user_status='0' WHERE user_id='$user_id'";
  //echo $sql;die();
     if ($this->db->query($sql)) {
        $response = array(
            'status' => 200,
            'status_message' => 'Request for #UID-0'.$user_id.' Rejected');
    } else {
        $response = array(
            'status' => 500,
            'status_message' => 'User Rejection Failed...!');
    }
    return $response;
   }


//-------------fun for active user------------//
    public function activeuser($user_id)
    {
      $sql = "UPDATE user_tab SET user_status='1' WHERE user_id='$user_id'";
      //echo $sql;die();
     if ($this->db->query($sql)) {
        $response = array(
            'status' => 200,
            'status_message' => 'Request for #UID-0'.$user_id.' activate');
    } else {
        $response = array(
            'status' => 500,
            'status_message' => 'User Activation Failed...!');
    }
    return $response;
   }

   // ----------- function for view user------------//

   public function viewuser($user_id)
   {
    $sql = "SELECT * user_profile_tab where user_id = '$user_id'";
    $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            $response = array(
                'status' => 500,
                'status_message' => 'No data found.');
        } else {
            $response = array(
                'status' => 200,
                'status_message' => $result->result_array());
        }
        return $response;

    }

    //--- fun. to get member records on filter
    public function filtermember($sort_byID,$query_string,$sortbyGender){
       
        $sql="SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_profile_tab.user_fullname LIKE '$query_string%' OR user_profile_tab.user_profile_id='$sort_byID' OR user_profile_tab.user_gender = '$sortbyGender' ";
        //echo $sql;die();
            if($sortbyGender== 0)
            {
                $sql = "SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id AND user_profile_tab.user_fullname LIKE '$query_string%' OR user_profile_tab.user_profile_id ='$sort_byID'";
            }
            if($query_string =='')
            {
               $sql="SELECT * FROM user_profile_tab,user_tab where user_tab.user_id = user_profile_tab.user_id  AND user_profile_tab.user_profile_id='$sort_byID' OR user_profile_tab.user_gender = '$sortbyGender' ";
            }
            // echo $sql;die();
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            $response = array(
                'status' => 500,
                'status_message' => 'No data found.');
        } else {
            $response = array(
                'status' => 200,
                'status_message' => $result->result_array());
        }
        return $response;
    }

    //----code for user csv download
    public function downloadAllUsers()
    {
        $sql = "SELECT up.user_profile_id,up.user_fullname , ut.user_gender, ut.user_reg_date,up.user_city,up.user_marital_status FROM user_profile_tab as up,user_tab as ut where ut.user_id = up.user_id";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
           return $result->result_array();
        }
  
    }
}
