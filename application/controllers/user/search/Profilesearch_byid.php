<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profilesearch_byid extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('admin/Adminprofile_model');
        $this->load->model('user/search/Searchbyprofileid_model');
    }

    // main index function
    public function index() {
        $encodedkey = $this->session->userdata('PariKey_session');
        $gender = $this->session->userdata('key_gender');
        $user_id = '';
        // check session active or not
        if ($encodedkey == '') {
            redirect('/');
        } else {
            $key = base64_decode($encodedkey);
            $keyarr = explode('|', $key);
            // print_r($keyarr);die();
            //session key format is PARInaayKEY|email_id|user_id

            if ($keyarr[0] != 'PARInaayKEY' && $keyarr[1] != '' && $keyarr[2] != '') {
                redirect('/');
            } else {
                $user_id = $keyarr[2];
            }
        }

        //$data['followers'] = $this->Searchbyprofileid_model->getUserFollows($user_id, $gender);
        $this->load->view('includes/user/userheader');
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

//------------------fun for follow the user or add to favourites
    public function followUserProfile() {
        extract($_GET);
        $gender = $this->session->userdata('key_gender');
        $encodedkey = $this->session->userdata('PariKey_session');
        $key = base64_decode($encodedkey);
        $keyarr = explode('|', $key);
        $sessionUser_id = $keyarr[2];
        $result = $this->Searchbyprofileid_model->followUserProfile($profile_user_id, $sessionUser_id, $gender);
//        print_r($result);
//        die();
        if ($result == 200) {
            echo 200;
        } else {
            echo 500;
        }
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
