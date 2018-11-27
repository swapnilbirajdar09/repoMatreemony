<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Renew_status extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user/user_model');
        $this->load->model('user/payment/payment_model');
    }

    public function index() {
         // check session exist
            //start session     
     $gender= $this->session->userdata('key_gender');
     $encodedkey = $this->session->userdata('PariKey_session');
     $user_id='';
        // check session active or not
     if($encodedkey==''){
        redirect('/');
    }
    else{
        $session_key=base64_decode($encodedkey);
        $session_keyarr=explode('|', $session_key);
            //session key format is PARInaayKEY|email_id|user_id

        if($session_keyarr[0]!='PARInaayKEY' && $session_keyarr[1]!='' && $session_keyarr[2]!=''){
            redirect('/');
        }
        else{
            $user_id=$session_keyarr[2];
        }
    }
// session check ends here
    
    $status = $this->input->post('status');

    if(empty($status)) {
        redirect('user/payment/Welcome');
    }

    $firstname = $this->input->post('firstname');
    $amount = $this->input->post('amount');
    $txnid = $this->input->post('txnid');
    $posted_hash = $this->input->post('hash');
    $key = $this->input->post('key');
    $productinfo = $this->input->post('productinfo');
    $email = $this->input->post('email');

        $salt = "JCdH7oOzWV"; //  Your salt

        $add = $this->input->post('additionalCharges');
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        $data['hash'] = hash("sha512", $retHashSeq);
        $data['amount'] = $amount;
        $data['txnid'] = $txnid;
        $data['posted_hash'] = $posted_hash;
        $data['status'] = $status;
        $data['register_data'] = $productinfo;

        //--------------save transaction details

        //$result = $this->Payment_model->savePaymentInformation($data);
        //$data['response'] = $result;
        //&& $result['status']==200
        //--------------adding the method for save transaction details ends here------------//
        $data['userDetails'] = $this->user_model->getUserDetails($user_id);
        if ($status == 'success') { //-----checking the status
            // register user and save transaction
            $result=$this->payment_model->renewPaymentInformation($data);
            $data['db_info']=json_encode($result);

            $this->load->view('includes/user/userheader',$data); //--------loading the view
            $this->load->view('pages/user/payment/renew_success', $data);
            $this->load->view('includes/user/userfooter'); //--------loading the view
        } else {
            $this->load->view('includes/user/userheader',$data); //--------loading the view
            $this->load->view('pages/user/payment/renew_failure', $data);
            $this->load->view('includes/user/userfooter'); //--------loading the view
        }
    }

}
