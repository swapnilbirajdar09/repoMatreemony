<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
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
        $result = array(
            'user_father_name' => $father_name,
            'user_father_occupation' => $father_occupation,
            'user_mother_name' => $mother_name,
            'user_mother_occupation' => $mother_occupation,
            'user_residential_address' => $residence_address,
            'user_country' => $country,
            'user_state' => $state,
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


}
