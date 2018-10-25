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
        $data['states'] = User_profile::getAllStates();
        $data['cities'] = User_profile::getAllCities();
        $data['occupations'] = $this->Advancesearch_model->getOccupationDetails();
        $data['educations'] = $this->Advancesearch_model->getEducationDetails();        
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/User_profile.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }
    //----------------function to get all states
    public function getAllStates() {
        $sql = "SELECT * FROM states WHERE country_id='101'";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

    //----------------function to get all cities
    public function getAllCities() {
        $sql = "SELECT * FROM cities WHERE state_id<='41' ORDER BY name";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
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

    // update function for Family section
// ------------------------------------------------------------ //
public function update_family_info(){

        // user user-id from session
    $encodedkey = $this->session->userdata('PariKey_session');
    $user_id='';
    $key=base64_decode($encodedkey);
    $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id
    // print_r($_POST);die();
    extract($_POST);
        // validation
    if(empty($father_name)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Father Name field is required!',
            'field'   =>  'father_name'
        );
        echo json_encode($response);
        die();
    }
    if(empty($father_occupation)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Father Occupation field is required!',
            'field'   =>  'father_occupation'
        );
        echo json_encode($response);
        die();
    }
    if(empty($mother_name)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Mother Name field is required!',
            'field'   =>  'mother_name'
        );
        echo json_encode($response);
        die();
    }
    if(empty($mother_occupation)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Mother Occupation field is required!',
            'field'   =>  'mother_occupation'
        );
        echo json_encode($response);
        die();
    }
    if(empty($residence_address)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Residential Address field is required!',
            'field'   =>  'residence_address'
        );
        echo json_encode($response);
        die();
    }
    if($country=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Country option!',
            'field'   =>  'country'
        );
        echo json_encode($response);
        die();
    }    
    if($state=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select State option!',
            'field'   =>  'state'
        );
        echo json_encode($response);
        die();
    }
    if($native_place=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select City/ Native Place option!',
            'field'   =>  'native_place'
        );
        echo json_encode($response);
        die();
    }
    if(empty($contact_no_1)){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> At least 1 Contact Number is required!',
            'field'   =>  'contact_no_1'
        );
        echo json_encode($response);
        die();
    }

    $result = $this->user_model->update_family_info($_POST,$keyarr[2]);

    if($result){
        $response=array(
            'status'    =>  'success',
            'message'   =>  '<b>Success:</b> You Have Successfully Edited <b>Family Information</b>!'
        );
    }
    else{
        $response=array(
            'status'    =>  'error',
            'message'   =>  '<b>Error:</b> Perhaps you didn\'t make any change. <b>Family Information</b> was not updated Successfully!'
        );
    } 
    echo json_encode($response);
}

    // upload function for Documents
// ------------------------------------------------------------ //
public function update_documents(){

    // user user-id from session
    $encodedkey = $this->session->userdata('PariKey_session');
    $user_id='';
    $key=base64_decode($encodedkey);
    $keyarr=explode('|', $key);
    //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id
    // print_r($_POST);die();
    extract($_FILES);
    extract($_POST);
    
    // validation
    if($document_type=='0'){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Select Document Type option!',
            'field'   =>  'document_type'
        );
        echo json_encode($response);
        die();
    }  
    if(empty(($_FILES['document_file']['name']))){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Document file is required!',
            'field'   =>  'document_file'
        );
        echo json_encode($response);
        die();
    }

    $data = $_POST;
    $filepath = '';

    $file_name = $_FILES['document_file']['name'];
    if (!empty(($_FILES['document_file']['name']))) {
        //file validating---------------------------//
        if ($_FILES['document_file']['size'] > 10485760) {  //for prod images
            $response=array(
                'status'    =>  'validation',
                'message'   =>  '<b>Warning:</b> Document size exceeds size limit of 10MB. Upload file having size less than 10MB!',
                'field'   =>  'document_file'
            );
            echo json_encode($response);
            die();
        }

        $extension = pathinfo($_FILES['document_file']['name'], PATHINFO_EXTENSION);
        $_FILES['userFile']['name'] = $document_type.'_0'.$keyarr[2].'.'.$extension;
        $_FILES['userFile']['type'] = $_FILES['document_file']['type'];
        $_FILES['userFile']['tmp_name'] = $_FILES['document_file']['tmp_name'];
        $_FILES['userFile']['error'] = $_FILES['document_file']['error'];
        $_FILES['userFile']['size'] = $_FILES['document_file']['size'];

        $uploadPath = 'assets/users/documents/';  //upload images in images/desktop/ folder

        $config['upload_path'] = $uploadPath;
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*'; //allowed types of files
        $this->load->library('upload', $config);  //load upload file config.
        $this->upload->initialize($config);
        // print_r($config);die();
        $image_path = '';

        if ($this->upload->do_upload('userFile')) {
            $fileData = $this->upload->data();
            $filepath = 'assets/users/documents/'.$fileData['file_name'];
        }
        else{
             $response=array(
                'status'    =>  'validation',
                'message'   =>  $this->upload->display_errors('<p><b>File upload Error: </b>', '</p>'),
                'field'   =>  'document_file'
            );
            echo json_encode($response);
            die();
        }
        // print_r($filepath);die();
    }

    $data['filepath'] = $filepath;
    if($filepath==''){
        $response=array(
            'status'    =>  'validation',
            'message'   =>  '<b>Warning:</b> Document file not uploaded Successfully!',
            'field'   =>  'document_file'
        );
        echo json_encode($response);
        die();
    }
    $result = $this->user_model->upload_document($data,$keyarr[2]);

    if($result){
        $response=array(
            'status'    =>  'success',
            'message'   =>  '<b>Success:</b> You Have Successfully uploaded <b>'.$document_type.'</b> Document!'
        );
    }
    else{
        $response=array(
            'status'    =>  'error',
            'message'   =>  '<b>Error:</b> <b>'.$document_type.'</b> Document was not uploaded Successfully!'
        );
    } 
    echo json_encode($response);
}

}