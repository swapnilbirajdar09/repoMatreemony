<?php
error_reporting(E_ERROR | E_PARSE);

defined('BASEPATH') OR exit('No direct script access allowed');

class Full_profile extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/search/Advancesearch_model');
        $this->load->model('user/user_model');
    }

    // main index function
    public function index($param='') {
        //start session     
        $encodedkey = $this->session->userdata('PariKey_session');
        $session_id='';
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
                $session_id=$keyarr[2];
            }
        }
        if($param!=''){
            $url=base64_decode($param);
            $urlArr=explode('I', $url);
            $user_id=$urlArr[3];
            $result=$this->user_model->getApprovedProfile($session_id);
            if($result){
                $sentArr=json_decode($result[0]['user_sent_requests_approved'],TRUE);
                $recievedArr=json_decode($result[0]['user_received_requests_approved'],TRUE);
                if(in_array($user_id, $sentArr) || in_array($user_id, $recievedArr)){
                    $data['userDetails'] = $this->user_model->getUserDetails($user_id);
                    $data['userDocuments'] = $this->user_model->getUserDocuments($user_id);
                }
                else{
                    $data['userDetails']=array(
                        'status'    =>  'error',
                        'message'   =>  'User not found!'
                    );
                }
            }
            else{
                $data['userDetails']=array(
                    'status'    =>  'error',
                    'message'   =>  'User not found!'
                );
            }            
        }
        else{
            $data['userDetails']=array(
                'status'    =>  'error',
                'message'   =>  'User not found!'
            );
        }       

// $this->m_pdf->pdf->Output("./uploads/".$filename, "F");
        // $this->load->view('includes/user/userheader.php',$data); //------user header page
        $this->load->view('pages/user/view_profile',$data); //------user profile page
        // $this->load->view('includes/user/userfooter.php'); //------user footer page
    }

}