<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_requests extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/requests/Userrequests_model');
    }

    // main index function
    public function index() {
        $encodedkey = $this->session->userdata('PariKey_session');
        $gender = $this->session->userdata('key_gender');
        $sessionUser_id = '';
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
                $sessionUser_id = $keyarr[2];
            }
        }
        $data['sentRequests'] = $this->Userrequests_model->getMySentRequests($sessionUser_id, $gender);
        $data['receivRequests'] = $this->Userrequests_model->getMyReceivedRequests($sessionUser_id, $gender);
        $data['recApproveRequests'] = $this->Userrequests_model->getMyReceivedApprovedRequests($sessionUser_id, $gender);
        $data['sentApproveRequests'] = $this->Userrequests_model->getMySentApprovedRequests($sessionUser_id, $gender);
        $data['myFollowers'] = $this->Userrequests_model->getMyFollowers($sessionUser_id, $gender);
        $this->load->view('includes/user/userheader');
        $this->load->view('pages/user/requests/myRequests',$data); //------loading the profile page for Quick search 
        $this->load->view('includes/user/userfooter');
    }

}
