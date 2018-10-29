<?php

class Registeruser_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // --------------function to register user
    public function register_user($data) {
       //  print_r($data);
        extract($data);
        $pac = $package;
        $package_select = explode("|", $pac);
      //  echo $package_select[0]."hii";
        $reg_date = date('Y-m-d');
        $expiry_date = '';
        switch ($package_select[1]) {
            case 'Monthly':
            $expiry_date = date('Y-m-d', strtotime('+'.$package_select[2].' months'));
            break;
            case 'Yearly':
            $expiry_date = date('Y-m-d', strtotime('+'.$package_select[2].' years'));
            break;
            default:
                # code...
            break;
        }
//echo $expiry_date;die();
        $result = array(
            'user_gender' => $gender,
            'user_firstname' => $fname,
            'user_lastname' => $lname,
            'user_email' => $eMail,
            'user_password' => $password,
            'user_reg_date'=> date('Y-m-d'),
            'user_expiry_date' => $expiry_date,
            'user_caste' => $caste,
            'user_package'=> $package,
            'user_mobile_num' => $number,
            'user_remaining_requests' =>'5',
            'user_status' => '1'
        );
        // $query = "INSERT INTO user_tab(user_gender,user_firstname,user_lastname,user_email,user_password,user_caste,user_mobile_num,user_status)"
        //         . "VALUES ('$gender','$fname','$lname','$eMail','$password','$caste','$number','1')";
         //echo $query;die();
        $this->db->insert('user_tab',$result);
        
        $insert_id = $this->db->insert_id();
        $profile_key=substr(base64_encode($insert_id),0,4) ;
        
        $profile_tab = array(
            'user_id' => $insert_id,
            'user_profile_key' => 'BPARI#'.date('Ymd').'0'.$insert_id.$profile_key
        );
        $this->db->insert('user_profile_tab',$profile_tab);
            //print_r($profile_tab);die();
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }
}