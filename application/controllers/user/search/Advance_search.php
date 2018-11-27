<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Advance_search extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/search/Advancesearch_model');
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
    // check subscription expired or not
    if($data['userDetails'][0]['user_payment_renewed']==0){
        redirect('user/payment/renew_package');
        die();
    }
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
    $data['country'] = $this->Advancesearch_model->getAllCountries();
    $data['occupations'] = $this->Advancesearch_model->getOccupationDetails();
    $data['educations'] = $this->Advancesearch_model->getEducationDetails();
    $this->load->view('includes/user/userheader',$data);
    $this->load->view('pages/user/search/advanceSearch', $data); //------loading the profile page for Quick search 
    $this->load->view('includes/user/userfooter');
}

//---------------fun for get all profile by diff filters in advanced 
public function getAllUserProfilesByAdvanceSearch() {
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata, TRUE);
        //extract($request);
    $gender = $this->session->userdata('key_gender');
    $result = $this->Advancesearch_model->getAllUserProfilesByAdvanceSearch($request,$gender);
        //print_r($result);die();
    if (!$result) {
        echo '500';
    } else {
        print_r(json_encode($result));
    }
}

//------------fun for get the state by country id
public function getCountryState() {
    extract($_GET);
    $result = $this->Advancesearch_model->getAllStatesByCountryId($country);
    if (!$result) {
        echo '500';
    } else {
        print_r(json_encode($result));
    }
}

//-------------fun for get the cities by state id
public function getStateCity() {
    extract($_GET);
    $result = $this->Advancesearch_model->getAllCitiesByStateId($state);
    if (!$result) {
        echo '500';
    } else {
        print_r(json_encode($result));
    }
}

}
