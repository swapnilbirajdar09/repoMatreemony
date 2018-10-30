<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quick_search extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/search/Quicksearch_model');
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

    $this->load->view('includes/user/userheader',$data);
    $this->load->view('pages/user/search/quickSearch'); //------loading the profile page for Quick search 
    $this->load->view('includes/user/userfooter');
}

//------fun for filter the users--------------------------//
public function getAllUserProfilesByQuickSearch() {
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata, TRUE);
        //extract($request);
    $gender = $this->session->userdata('key_gender');
    $result = $this->Quicksearch_model->getAllUserProfilesByQuickSearch($request,$gender);
        //print_r($result);die();
    if (!$result) {
        echo '500';
    } else {
        print_r(json_encode($result));
    }
}

//------fun for filter the users--------------------------//
public function showPackage() {
    $this->load->view('includes/user/userheader');
        $this->load->view('pages/user/search/temp'); //------loading the profile page for Quick search 
        $this->load->view('includes/user/userfooter');
    }

}
