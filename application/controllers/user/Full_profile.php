<?php

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


        
        if($param!=''){
            $user_id=base64_decode($param);

            // $result=$this->user_model->getApprovedProfile($user_id);
            // if($result){
            //     echo $result[0]['user_received_requests_approved'];
            // }
            // else{
            // }
            // die();
            $data['userDetails'] = $this->user_model->getUserDetails($user_id);
            $data['userDocuments'] = $this->user_model->getUserDocuments($user_id);
        }
        else{
            $data['userDetails']=array(
                'status'    =>  'error',
                'message'   =>  'User not found!'
            );
        }       
       
// $this->m_pdf->pdf->Output("./uploads/".$filename, "F");
        // $this->load->view('includes/user/userheader.php',$data); //------user header page
        $this->load->view('pages/admin/view_profile',$data); //------user profile page
        // $this->load->view('includes/user/userfooter.php'); //------user footer page
    }

}