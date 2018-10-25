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
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/User_profile.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }

    // update function for About me section
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
    public function update_basic_info(){
        // user user-id from session
        $encodedkey = $this->session->userdata('PariKey_session');
        $user_id='';
        $key=base64_decode($encodedkey);
        $keyarr=explode('|', $key);
        //session key format is $keyarr[0]=PARInaayKEY|$keyarr[1]=email_id|$keyarr[2]=user_id

        if(!empty($_POST['expectations'])){
           $result = $this->user_model->update_basic_info($_POST['expectations'],$keyarr[2]);

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
}