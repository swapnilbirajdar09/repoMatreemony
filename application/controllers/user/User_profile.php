<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_profile extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/search/Advancesearch_model');
        $this->load->model('user/user_model');
    }

    // main index function
    public function index() {
        //start session     
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
        $data['country'] = $this->Advancesearch_model->getAllCountries();
        $data['occupations'] = $this->Advancesearch_model->getOccupationDetails();
        $data['educations'] = $this->Advancesearch_model->getEducationDetails();        
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/User_profile.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }

    // update function for About me section
// --------------------------------------------------------------- //
    public function update_about_me(){
        // user user-id from session
        $encodedkey = $this->session->userdata('PariKey_session');
        $user_id='';
        $key=base64_decode($encodedkey);
        $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id

        if(!empty($_POST['about_me'])){
         $result = $this->user_model->update_about_me($_POST['about_me'],$keyarr[2]);

         if($result){
            $response=array(
                'status'    =>  'success',
                'message'   =>  '<b>Success:</b> You Have Successfully Edited <b>About Me</b>!'
            );
        }
        else{
            $response=array(
                'status'    =>  'error',
                'message'   =>  '<b>Error:</b> Perhaps you didn\'t make any change. <b>About Me</b> was not updated Successfully!'
            );
        } 
    }
    else{
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> About Me field is required!'
        );
    }

    echo json_encode($response);
}

    // update function for Expectations section
// ------------------------------------------------------------ //
public function update_expectations(){
        // user user-id from session
    $encodedkey = $this->session->userdata('PariKey_session');
    $user_id='';
    $key=base64_decode($encodedkey);
    $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id

    if(!empty($_POST['expectations'])){
     $result = $this->user_model->update_expectations($_POST['expectations'],$keyarr[2]);

     if($result){
        $response=array(
            'status'    =>  'success',
            'message'   =>  '<b>Success:</b> You Have Successfully Edited <b>Expectations</b>!'
        );
    }
    else{
        $response=array(
            'status'    =>  'error',
            'message'   =>  '<b>Error:</b> Perhaps you didn\'t make any change. <b>Expectations</b> were not updated Successfully!'
        );
    } 
}
else{
    $response=array(
        'status'    =>  'validation',
        'message'   =>  '<b>Warning:</b> Expectations field is required!'
    );
}

echo json_encode($response);
}

    // update function for Basic information section
// ------------------------------------------------------------ //
public function update_basic_info(){

        // user user-id from session
    $encodedkey = $this->session->userdata('PariKey_session');
    $user_id='';
    $key=base64_decode($encodedkey);
    $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id
    // print_r($_POST);die();
    extract($_POST);
        // validation
    if(empty($full_name)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Full name field is required!',
            'field'   =>  'full_name'
        );
        echo json_encode($response);
        die();
    }
    if($profile_created_by=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Profile created by option!',
            'field'   =>  'profile_created_by'
        );
        echo json_encode($response);
        die();
    }
    if(empty($dob)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Date of Birth field is required!',
            'field'   =>  'dob'
        );
        echo json_encode($response);
        die();
    }
    if($marital_status=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Marital Status option!',
            'field'   =>  'marital_status'
        );
        echo json_encode($response);
        die();
    }
    elseif($marital_status!='Never Married' && $no_of_children=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Number of Children option!',
            'field'   =>  'no_of_children'
        );
        echo json_encode($response);
        die();
    }
    if($mother_tongue=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Mother Tongue option!',
            'field'   =>  'mother_tongue'
        );
        echo json_encode($response);
        die();
    }
    if($blood_group=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Blood Group option!',
            'field'   =>  'blood_group'
        );
        echo json_encode($response);
        die();
    }
    if($body_type=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Body Type option!',
            'field'   =>  'body_type'
        );
        echo json_encode($response);
        die();
    }
    if($body_complexion=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Body Complexion option!',
            'field'   =>  'body_complexion'
        );
        echo json_encode($response);
        die();
    }
    if(empty($weight)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Weight field is required!',
            'field'   =>  'weight'
        );
        echo json_encode($response);
        die();
    }
    if(empty($height)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Height field is required!',
            'field'   =>  'height'
        );
        echo json_encode($response);
        die();
    }

    $result = $this->user_model->update_basic_info($_POST,$keyarr[2]);

    if($result){
        $response=array(
            'status'    =>  'success',
            'message'   =>  '<b>Success:</b> You Have Successfully Edited <b>Basic Information</b>!'
        );
    }
    else{
        $response=array(
            'status'    =>  'error',
            'message'   =>  '<b>Error:</b> Perhaps you didn\'t make any change. <b>Basic Information</b> was not updated Successfully!'
        );
    } 
    echo json_encode($response);
}

    // update function for Education and Professional section
// ------------------------------------------------------------ //
public function update_edu_professional(){

        // user user-id from session
    $encodedkey = $this->session->userdata('PariKey_session');
    $user_id='';
    $key=base64_decode($encodedkey);
    $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id
    // print_r($_POST);die();
    extract($_POST);
        // validation
    if($educational_field=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Education Field option!',
            'field'   =>  'educational_field'
        );
        echo json_encode($response);
        die();
    }
    if(empty($university)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> University/ Institute field is required!',
            'field'   =>  'university'
        );
        echo json_encode($response);
        die();
    }
    if($occupation_type=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Occupation Type option!',
            'field'   =>  'occupation_type'
        );
        echo json_encode($response);
        die();
    }
    
    if($working_sector=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Working Sector option!',
            'field'   =>  'working_sector'
        );
        echo json_encode($response);
        die();
    }
    if(empty($company_name)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Company Name field is required!',
            'field'   =>  'company_name'
        );
        echo json_encode($response);
        die();
    }
    if(empty($designation)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Designation field is required!',
            'field'   =>  'designation'
        );
        echo json_encode($response);
        die();
    }
    if(empty($monthly_income)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Monthly Income field is required!',
            'field'   =>  'monthly_income'
        );
        echo json_encode($response);
        die();
    }
    if(empty($annual_income)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Annual Income field is required!',
            'field'   =>  'annual_income'
        );
        echo json_encode($response);
        die();
    }

    $result = $this->user_model->update_edu_professional($_POST,$keyarr[2]);

    if($result){
        $response=array(
            'status'    =>  'success',
            'message'   =>  '<b>Success:</b> You Have Successfully Edited <b>Educational & Professional</b>!'
        );
    }
    else{
        $response=array(
            'status'    =>  'error',
            'message'   =>  '<b>Error:</b> Perhaps you didn\'t make any change. <b>Educational & Professional</b> was not updated Successfully!'
        );
    } 
    echo json_encode($response);
}

    // update function for Lifestyle section
// ------------------------------------------------------------ //
public function update_life_style(){

        // user user-id from session
    $encodedkey = $this->session->userdata('PariKey_session');
    $user_id='';
    $key=base64_decode($encodedkey);
    $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id
    // print_r($_POST);die();
    extract($_POST);
        // validation
    if($diet=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Diet option!',
            'field'   =>  'diet'
        );
        echo json_encode($response);
        die();
    }
    if($drink=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Drink option!',
            'field'   =>  'drink'
        );
        echo json_encode($response);
        die();
    }
    
    if($smoke=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Smoke option!',
            'field'   =>  'smoke'
        );
        echo json_encode($response);
        die();
    }
    if(empty($living_with)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Living With field is required!',
            'field'   =>  'living_with'
        );
        echo json_encode($response);
        die();
    }
    
    $result = $this->user_model->update_life_style($_POST,$keyarr[2]);

    if($result){
        $response=array(
            'status'    =>  'success',
            'message'   =>  '<b>Success:</b> You Have Successfully Edited <b>Educational & Professional</b>!'
        );
    }
    else{
        $response=array(
            'status'    =>  'error',
            'message'   =>  '<b>Error:</b> Perhaps you didn\'t make any change. <b>Educational & Professional</b> was not updated Successfully!'
        );
    } 
    echo json_encode($response);
}


}