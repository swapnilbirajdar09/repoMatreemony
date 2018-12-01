<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profilesearch_byid extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('admin/Adminprofile_model');
        $this->load->model('user/search/Searchbyprofileid_model');
        $this->load->model('user/user_model');
    }

    // main index function
    public function index() {
        //start session     
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $user_id = '';
        // check session active or not
        if ($encodedkey == '') {
            redirect('/');
        } else {
            $key = base64_decode($encodedkey);
            $keyarr = explode('|', $key);
            // print_r($this->session->userdata('key_gender'));die();
            //session key format is PARInaayKEY|email_id|user_id

            if ($keyarr[0] != 'PARInaayKEY' && $keyarr[1] != '' && $keyarr[2] != '') {
                redirect('/');
            } else {
                $user_id = $keyarr[2];
            }
        }

        $data['userDetails'] = $this->user_model->getUserDetails($user_id);
        // check subscription expired or not
    if($data['userDetails'][0]['user_payment_renewed']==0){
        redirect('user/payment/renew_package');
        die();
    }
        // check Profile completed
        $mandate_values = [$data['userDetails'][0]['user_about_me'], $data['userDetails'][0]['user_fullname'], $data['userDetails'][0]['user_dob'], $data['userDetails'][0]['user_educational_field'], $data['userDetails'][0]['user_father_name'], $data['userDetails'][0]['user_diet'], $data['userDetails'][0]['user_partner_expections'], $data['userDetails'][0]['user_photos'], $data['userDetails'][0]['user_profile_image']];
        $show_alert = 0;
        for ($j = 0; $j < count($mandate_values); $j++) {
            if ($mandate_values[$j] != '' && $mandate_values[$j] != '0' && $mandate_values[$j] != '[]') {
                $show_alert = 1;
            }
        }
        // echo $show_alert;
        if ($show_alert == 0) {
            redirect('user/user_profile');
        }

        // check doucents submitted
//    $data['userDocuments'] = $this->user_model->getUserDocuments($user_id);
//    if($data['userDetails'][0]['user_doc_verified']==0){
//        redirect('user/user_profile');
//    } 

        $this->load->view('includes/user/userheader', $data);
        $this->load->view('pages/user/search/profileSearchById'); //------loading the profile search by id view
        $this->load->view('includes/user/userfooter');
    }

//---------------fun for get all user profiles by user profile id

    public function searchByProfile_id() {
        $gender = $this->session->userdata('key_gender');
        extract($_GET);
        //print_r($_GET);
        $result = $this->Searchbyprofileid_model->searchByProfile_id($filter_member_id, $gender);
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

//---------------fun for get all user profiles

    public function getAllUserProfiles() {
        $gender = $this->session->userdata('key_gender');
        extract($_GET);
        //print_r($_GET);
        $result = $this->Searchbyprofileid_model->getAllUserProfiles($gender);
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

//-------------------fun for send request to user
    public function sendRequestToUser() {
        extract($_GET);
        //print_r($_GET);die();
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $user_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->sendRequestToUser($profile_user_id, $user_id, $gender);
        //print_r($result);die();
        if ($result == 200) {
            echo 200;
        } elseif ($result == 700) {
            echo 700;
        } elseif ($result == 900) {
            echo 900;
        } elseif ($result == 600) {
            echo 600;
        } else {
            echo 500;
        }
    }

//-----------fun for cancel the user request
    public function cancelRequestOfUser() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->cancelRequestOfUser($profile_user_id, $sessionUser_id, $gender);
//        print_r($result);
//        die();

        if ($result == 200) {
            echo 200;
        } else {
            echo 500;
        }
    }

//-----------fun for cancel the user request from received request
    public function cancelRequestOfUserForReceived() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->cancelRequestOfUserForReceived($profile_user_id, $sessionUser_id, $gender);
//        print_r($result);
//        die();
        if ($result == 200) {
            echo 200;
        } else {
            echo 500;
        }
    }

//------------------fun for cancel the user request from received request confirmed and approved-----------//
    public function cancelRequestOfUserForReceivedApprovedRequest() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->cancelRequestOfUserForReceivedApprovedRequest($profile_user_id, $sessionUser_id, $gender);
//        print_r($result);
//        die();
        if ($result == 200) {
            echo 200;
        } else {
            echo 500;
        }
    }

    //--------------fun for accept the user request---------------------//
    public function acceptUserConfirmRequest() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->acceptUserConfirmRequest($profile_user_id, $sessionUser_id, $gender);
//        print_r($result);
//        die();
        if ($result == 200) {
            echo 200;
        } else {
            echo 500;
        }
    }

    //-------------------------------------------------------------------//
//------------------fun for follow the user or add to favourites--------------//
    public function followUserProfile() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->followUserProfile($profile_user_id, $sessionUser_id, $gender);
        echo $result;
//        print_r($result);
//        die();
        
    }

//--------------fun for unfollow the user or remove from favourites
    public function unFollowUserProfile() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->unFollowUserProfile($profile_user_id, $sessionUser_id, $gender);
//        print_r($result);
//        die();
        if ($result == 200) {
            echo 200;
        } else {
            echo 500;
        }
    }

    public function getUserFollows() {
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        extract($_GET);
        //print_r($_GET);
        $result = $this->Searchbyprofileid_model->getUserFollows($sessionUser_id, $gender);
        if (!$result) {
            echo '';
        } else {
            print_r(json_encode($result));
        }
    }

}
