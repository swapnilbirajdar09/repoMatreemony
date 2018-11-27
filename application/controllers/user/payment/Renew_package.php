<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Renew_package extends CI_Controller {

    // Renew Package controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/user_model');
        $this->load->model('admin/dashboard_model');     
    }

    // main index function
    public function index() {

            //start session     
       $gender= $this->session->userdata('key_gender');
       $encodedkey = $this->session->userdata('PariKey_session');
       $user_id='';
        // check session active or not
       if($encodedkey==''){
        redirect('/');
    }
    else{
        $key=base64_decode($encodedkey);
        $keyarr=explode('|', $key);
            //session key format is PARInaayKEY|email_id|user_id

        if($keyarr[0]!='PARInaayKEY' && $keyarr[1]!='' && $keyarr[2]!=''){
            redirect('/');
        }
        else{
            $user_id=$keyarr[2];
        }
    }

    $data['userDetails'] = $this->user_model->getUserDetails($user_id);
    $data['package'] = $this->dashboard_model->getAllPackages();
    $this->load->view('includes/user/userheader.php',$data); 
    $this->load->view('pages/user/payment/renew_package.php',$data); 
    $this->load->view('includes/user/userfooter.php');

}



}