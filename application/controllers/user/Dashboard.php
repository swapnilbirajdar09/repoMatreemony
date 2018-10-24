<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
         $this->load->model('user/user_model');
         $this->load->model('user/dashboard_model'); 
       }

    // main index function
    public function index() {
         //start session     
        $encodedkey = $this->session->userdata('PariKey_session');
         $gender= $this->session->userdata('key_gender');
        $user_id='';
        // check session active or not
        if($encodedkey==''){
            redirect('/');
        }
        else{
            $key=base64_decode($encodedkey);
            $keyarr=explode('|', $key);
            // print_r($keyarr);die();
            //session key format is PARInaayKEY|email_id|user_id

            if($keyarr[0]!='PARInaayKEY' && $keyarr[1]!='' && $keyarr[2]!=''){
                redirect('/');
            }
            else{
                $user_id=$keyarr[2];
            }
        }
        $data['userDetails'] = $this->user_model->getUserDetails($user_id);
         $data['userprofile'] = $this->dashboard_model->getAllUserProfiles($gender);
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/dashboard.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }
}