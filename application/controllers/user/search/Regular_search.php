<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regular_search extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/search/Regularsearch_model');
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
        $this->load->view('includes/user/userheader');
        $this->load->view('pages/user/search/regularSearch'); //------loading the profile page for Quick search 
        $this->load->view('includes/user/userfooter');
    }

    //------fun for filter the users--------------------------//
    public function getAllUserProfilesByRegularSearch() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        //extract($request);
        $gender = $this->session->userdata('key_gender');
        $result = $this->Regularsearch_model->getAllUserProfilesByRegularSearch($request,$gender);
        //print_r($result);die();
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

}
