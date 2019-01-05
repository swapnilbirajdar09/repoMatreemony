<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
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

    // function to get user details
    public function getUserDetails($user_id) {
        $sql = "SELECT * FROM user_tab, user_profile_tab WHERE user_tab.user_id=user_profile_tab.user_id AND user_tab.user_id='$user_id' LIMIT 1 ";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

    // function to get user approved profiles
    public function getApprovedProfile($user_id) {
        $sql = "SELECT user_sent_requests_approved, user_received_requests_approved FROM user_profile_tab WHERE user_id='$user_id' ";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

    // function to get user documents
    public function getUserDocuments($user_id) {
        $sql = "SELECT * FROM document_tab WHERE user_id='$user_id' ";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

    // update abput me section for user
    public function update_about_me($about_me,$user_id){

        $result = array(
            'user_about_me' => $about_me
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update expectations section for user
    public function update_expectations($expectations,$user_id){

        $result = array(
            'user_partner_expections' => $expectations
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update basic info section for user
    public function update_basic_info($data,$user_id){
        extract($data);
        $result = array(
            'user_fullname' => $full_name,
            'user_profile_created_by' => $profile_created_by,
            'user_dob' => $dob,
            'user_marital_status' => $marital_status,
            'user_no_of_children' => $no_of_children,
            'user_mother_tongue' => $mother_tongue,
            'user_blood_grp' => $blood_group,
            'user_body_type' => $body_type,
            'user_body_complexion' => $body_complexion,
            'user_weight' => $weight,
            'user_height' => $height,
            'user_hobbies' => $hobbies
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update educational and professional section for user
    public function update_edu_professional($data,$user_id){
        extract($data);
        $result = array(
            'user_educational_field' => $educational_field,
            'user_school/clg_name' => $clg_name,
            'user_university_name' => $university,
            'user_additional_edu' => $additional_education,
            'user_occupation_type' => $occupation_type,
            'user_working_field' => $working_sector,
            'user_company_name' => $company_name,
            'user_designation' => $designation,
            'user_workplace_address' => $workplace_address,
            'user_monthly_income' => $monthly_income,
            'user_annual_income' => $annual_income
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update lifestyle section for user
    public function update_life_style($data,$user_id){
        extract($data);
        $result = array(
            'user_diet' => $diet,
            'user_drink' => $drink,
            'user_smoke' => $smoke,
            'user_living_with' => $living_with
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update family section for user
    public function update_family_info($data,$user_id){
        extract($data);
        $countryArr=explode('/', $country);
        $stateArr=explode('/', $state);
        $result = array(
            'user_father_name' => $father_name,
            'user_father_occupation' => $father_occupation,
            'user_mother_name' => $mother_name,
            'user_mother_occupation' => $mother_occupation,
            'user_residential_address' => $residence_address,
            'user_country' => $countryArr[0],
            'user_state' => $stateArr[0],
            'user_city' => $native_place,
            'user_contact_no1' => $contact_no_1,
            'user_contact_no2' => $contact_no_2
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // insert uploaded document in table
    public function upload_document($data,$user_id){
        extract($data);
        // print_r($data);die();
        $result = array(
            'document_type' => $document_type,
            'document_path' => $filepath,
            'user_id' => $user_id,
            'document_status' => 'pending'
        );

        $this->db->insert('document_tab',$result);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }

    // check document alreqdy exist or not
    public function checkDocumentExist($document_type,$user_id){
        $sql = "SELECT * FROM document_tab WHERE user_id='$user_id' AND document_type='$document_type' ";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return true;
        }
    }

    // delete the selected user's document
    public function delDocument($doc_id){
        $sql = "DELETE FROM document_tab WHERE document_id='$doc_id'";
        $result = $this->db->query($sql);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }

    // insert/upload image in gallery in table
    public function upload_image($data,$user_id){
        extract($data);
        // print_r($data);die();
        $user_photos='';
        $final_gallery='';
        $sql = "SELECT user_photos FROM user_profile_tab WHERE user_id='$user_id' ";
        $result = $this->db->query($sql);

        foreach ($result->result_array() as $key) {
            $user_photos = $key['user_photos'];
        }

        if($user_photos!=''){
            $arr=json_decode($user_photos,TRUE);
            array_push($arr, $filepath);
            $final_gallery=json_encode($arr);
        }
        else{
            $arr=array();
            $arr[]=$filepath;
            $final_gallery=json_encode($arr);
            
        }

        $result_update = array(
            'user_photos' => $final_gallery
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result_update);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // insert/upload image in gallery and set profile image
    public function upload_profileimage($data,$user_id){
        extract($data);
        // print_r($data);die();
        $user_photos='';
        $final_gallery='';
        $sql = "SELECT user_photos FROM user_profile_tab WHERE user_id='$user_id' ";
        $result = $this->db->query($sql);

        foreach ($result->result_array() as $key) {
            $user_photos = $key['user_photos'];
        }

        if($user_photos!=''){
            $arr=json_decode($user_photos,TRUE);
            array_push($arr, $filepath);
            $final_gallery=json_encode($arr);
        }
        else{
            $arr=array();
            $arr[]=$filepath;
            $final_gallery=json_encode($arr);
            
        }

        // upload image in gallery
        $result_update = array(
            'user_photos' => $final_gallery,
            'user_profile_image' => $filepath
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result_update);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // delete the selected user's image from gallery
    public function delImage($img_path,$user_id){
        $user_photos='';
        $final_gallery='';
        $sql = "SELECT user_photos FROM user_profile_tab WHERE user_id='$user_id' ";
        $result = $this->db->query($sql);

        foreach ($result->result_array() as $key) {
            $user_photos = $key['user_photos'];
        }

        if($user_photos!=''){
            $arr=json_decode($user_photos,TRUE);
            foreach ($arr as $key => $value) {
                // check if image exist
                if($img_path==$value){
                    unset($arr[$key]);
                    unlink($img_path);
                }                
            }
            $final_gallery=json_encode($arr);
        }
        $result_update = array(
            'user_photos' => $final_gallery
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result_update);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
        
    }

    // update profile picture
    public function setProfilePicture($img_path,$user_id){
        // print_r($data);die();
        $result_update = array(
            'user_profile_image' => $img_path
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result_update);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update relatives information
    public function update_relatives_info($relative_json,$user_id){
        // print_r($data);die();
        $result_update = array(
            'user_relative_info' => $relative_json
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_profile_tab', $result_update);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // update change password
    public function update_change_password($data,$user_id){
        extract($data);
        // print_r($data);die();
        $result_update = array(
            'user_password' => base64_encode($new_password)
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_tab', $result_update);
        if($this->db->affected_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }

    // generate email verify code
    public function generate_email_verify_code($entity,$user_id){
        $code=base64_encode($entity.'|'.rand());
        // print_r($code);die();
        $result_update = array(
            'user_email_verify_code' => $code
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_tab', $result_update);
        if($this->db->affected_rows()==1){
            $response=array(
                'verify_code'  =>  $code,
                'status'  =>  true,
            );
            return $response;
        }
        else{
            return false;
        }
    }

    // generate mobile otp code
    public function generate_mobile_otp_code($user_id){
        $code=mt_rand(100000, 999999);
        // print_r($code);die();
        $result_update = array(
            'user_mobile_verify_code' => $code
        );

        $this->db->where('user_id', $user_id);
        $this->db->update('user_tab', $result_update);
        if($this->db->affected_rows()==1){
            $response=array(
                'otp_code'  =>  $code,
                'status'  =>  true,
            );
            return $response;
        }
        else{
            return false;
        }
    }

    // email verify code
    public function verify_email_code($code){
        $decrptcode=base64_decode($code);
        $arr=explode('|', $decrptcode);
        // echo $arr[0];die();
        $user_email_verify_code='';
        $sql = "SELECT user_email_verify_code FROM user_tab WHERE user_email='$arr[0]' ";
        $result = $this->db->query($sql);

        foreach ($result->result_array() as $key) {
            $user_email_verify_code = $key['user_email_verify_code'];
        }

        if($user_email_verify_code!=''){
            if($user_email_verify_code==$code){
                $result_update = array(
                    'user_email_verified' => '1'
                );

                $this->db->where('user_email', $arr[0]);
                $this->db->update('user_tab', $result_update);
                if($this->db->affected_rows()==1){
                    $response=array(
                        'status'    =>  'success',
                        'message'   =>  'Success: Email verification was done successfully.'
                    );
                    return $response;
                }
                else{
                    $response=array(
                        'status'    =>  'validated',
                        'message'   =>  'Warning: Email verification already done !'
                    );
                    return $response;
                }
            }
            else{
             $response=array(
                'status'    =>  'error',
                'message'   =>  'Failure: Verification code did not match. Email Verification failed !'
            );
             return $response;
         }
     }
     else{
         $response=array(
            'status'    =>  'error',
            'message'   =>  'Failure: Email Verification failed. Try resending verification code !'
        );
         return $response;
     }
 }

// mobile verify code
 public function verify_otp($code,$user_id){
    $user_mobile_verify_code='';
    $sql = "SELECT user_mobile_verify_code FROM user_tab WHERE user_id='$user_id' ";
    $result = $this->db->query($sql);

    foreach ($result->result_array() as $key) {
        $user_mobile_verify_code = $key['user_mobile_verify_code'];
    }

    if($user_mobile_verify_code!=''){
        if($user_mobile_verify_code==$code){
            $result_update = array(
                'user_mobile_verified' => '1'
            );

            $this->db->where('user_id', $user_id);
            $this->db->update('user_tab', $result_update);
            if($this->db->affected_rows()==1){
                $response=array(
                    'status'    =>  'success',
                    'message'   =>  'Success: Mobile Number verified successfully.',
                    'field'   =>  'otp_code'
                );
                return $response;
            }
            else{
                $response=array(
                    'status'    =>  'validation',
                    'message'   =>  'Warning: Mobile Number verification already done !',
                    'field'   =>  'otp_code'
                );
                return $response;
            }
        }
        else{
         $response=array(
            'status'    =>  'error',
            'message'   =>  'Failure: OTP code incorrect. Mobile Number Verification failed !',
            'field'   =>  'otp_code'
        );
         return $response;
     }
 }
 else{
     $response=array(
        'status'    =>  'error',
        'message'   =>  'Failure: OTP code not found. Try Resending OTP code !'
    );
     return $response;
 }
}

 // check email id exist or not
public function checkEmailExist($email_id){
    $query = null;
        // ------------ check email exist 
        $query = $this->db->get_where('user_tab', array(//making selection
            'user_email' => $email_id
        ));

        if ($query->num_rows() <= 0) {
            return 0;
        } else {
            return 1;
        }
    }

    // check image count of user
    public function checkImageCount($user_id){
        $sql = "SELECT user_photos FROM user_profile_tab WHERE user_id='$user_id' ";
        $result = $this->db->query($sql);

        foreach ($result->result_array() as $key) {
            $user_photos = $key['user_photos'];
        }

        $imgCount=0;
        if($user_photos!='' && $user_photos!='[]'){
            $img_Arr=json_decode($user_photos,TRUE);
            $imgCount=count($img_Arr);
        }
        if ($imgCount >3) {
            return false;
        } else {
            return true;
        }
    }

    // check user subscription expired of all users
    public function checkPackageExpired(){
        $sql = "SELECT user_id,user_expiry_date FROM user_tab WHERE user_status='1' ";
        $result = $this->db->query($sql);

        foreach ($result->result_array() as $key) {
            $current=date('Y-m-d');
            $current_date =new DateTime($current);
            $user_expiry_date =new DateTime($key['user_expiry_date']);
            $remainingDays = $current_date->diff($user_expiry_date)->days;

            if($remainingDays=='0'){
                $result_update = array(
                    'user_payment_renewed' => '0'
                );

                $this->db->where('user_id', $key['user_id']);
                $this->db->update('user_tab', $result_update);
            }

        }
    }

}
