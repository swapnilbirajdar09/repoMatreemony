<?php

class Userlogin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // login function to authenticate user
    public function authenticateUser($username, $password) {
        $passwordNew = base64_encode($password);
        $sql = "SELECT * FROM user_tab WHERE user_email='$username' AND user_password='$passwordNew' LIMIT 1 ";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            $user_id='';
            $user_gender='';
            $status='';
            foreach ($result->result_array() as $key) {
                $user_id = $key['user_id'];
                $user_gender = $key['user_gender'];
                $status = $key['user_status'];
            }
            if($status=='0'){
                return 'deactivated';
                    die();
            }

            // update login time
            $updateuser = array(
                'user_login_at' => date ("Y-m-d H:i:s"),
                'user_status' => '1'
            );

            $this->db->where('user_id', $user_id);
            $this->db->update('user_tab', $updateuser);
            return $user_id.'|'.$user_gender;
        }
    }

    // logout function for user
    public function logoutUser($user_id){
        // update logout user
        $result = array(
            'user_logout_at' => date ("Y-m-d H:i:s")
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

}
