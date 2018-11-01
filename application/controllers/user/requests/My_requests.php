<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_requests extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/requests/Userrequests_model');
        $this->load->model('user/user_model');
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
            // print_r($this->session->userdata('key_gender'));die();
            //session key format is PARInaayKEY|email_id|user_id

        if($keyarr[0]!='PARInaayKEY' && $keyarr[1]!='' && $keyarr[2]!=''){
            redirect('/');
        }
        else{
            $user_id=$keyarr[2];
        }
    }

    $data['userDetails'] = $this->user_model->getUserDetails($user_id);
    // check Profile completed
    $mandate_values=[$data['userDetails'][0]['user_about_me'],$data['userDetails'][0]['user_fullname'],$data['userDetails'][0]['user_dob'],$data['userDetails'][0]['user_educational_field'],$data['userDetails'][0]['user_father_name'],$data['userDetails'][0]['user_diet'],$data['userDetails'][0]['user_partner_expections'],$data['userDetails'][0]['user_photos'],$data['userDetails'][0]['user_profile_image']];
    $show_alert=0;
    for ($j=0; $j < count($mandate_values); $j++) { 
        if($mandate_values[$j]!='' && $mandate_values[$j]!='0' && $mandate_values[$j]!='[]'){
            $show_alert=1;
        }
    }
    // echo $show_alert;
    if($show_alert==0){
        redirect('user/user_profile');
    } 

    // check doucents submitted
    $data['userDocuments'] = $this->user_model->getUserDocuments($user_id);
    if($data['userDetails'][0]['user_doc_verified']==0){
        redirect('user/user_profile');
    } 

    $data['sentRequests'] = $this->Userrequests_model->getMySentRequests($user_id, $gender);
    $data['receivRequests'] = $this->Userrequests_model->getMyReceivedRequests($user_id, $gender);
    $data['recApproveRequests'] = $this->Userrequests_model->getMyReceivedApprovedRequests($user_id, $gender);
    $data['sentApproveRequests'] = $this->Userrequests_model->getMySentApprovedRequests($user_id, $gender);
    $data['myFollowers'] = $this->Userrequests_model->getMyFollowers($user_id, $gender);
    $this->load->view('includes/user/userheader',$data);
    $this->load->view('pages/user/requests/myRequests',$data); //------loading the profile page for Quick search 
    $this->load->view('includes/user/userfooter');
}

}
