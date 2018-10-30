<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user/payment/Payment_model');
    }

    public function index() {
        $status = $this->input->post('status');
        print_r($_POST);die();
        if (empty($status)) {
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
        //--------------adding the method for save transaction details
        //$result = $this->Payment_model->savePaymentInformation($data);
        //$data['response'] = $result;
        //&& $result['status']==200
        //--------------adding the method for save transaction details ends here------------//

        if ($status == 'success') { //-----checking the status
            $this->load->view('includes/user/userheader'); //--------loading the view
            $this->load->view('pages/user/payment/success', $data);
            $this->load->view('includes/user/userfooter'); //--------loading the view
        } else {
            $this->load->view('includes/user/userheader'); //--------loading the view
            $this->load->view('pages/user/payment/failure', $data);
            $this->load->view('includes/user/userfooter'); //--------loading the view
        }
    }

}
