<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('includes/user/userheader'); //--------loading the view
        $this->load->view('pages/user/payment/product_form');
        $this->load->view('includes/user/userfooter'); //--------loading the view
    }

    public function check() {
        $amount = $this->input->post('packageAmmount');
        $product_info = $this->input->post('packageType');
        $customer_name = $this->input->post('userFullname');
        $customer_emial = $this->input->post('userEmail');
        $customer_mobile = $this->input->post('userMobile');
        $customer_address = $this->input->post('userAddress');

        //payumoney details	   	    
        $MERCHANT_KEY = "wlQmQ5WT"; //change  merchant with yours
        $SALT = "JCdH7oOzWV";  //change salt with yours 

        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        //optional udf values 
        $udf1 = '';
        $udf2 = '';
        $udf3 = '';
        $udf4 = '';
        $udf5 = '';

        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
        $hash = strtolower(hash('sha512', $hashstring)); //------creating hash value manually.

        $success = base_url() . 'user/payment/status'; //-------url for success
        $fail = base_url() . 'user/payment/status';  //--------url for failure
        $cancel = base_url() . 'user/payment/status';  //-------url for cancel
//--------------creating a data array for store the total information related to the submited form for confirmation
        $data = array(
            'mkey' => $MERCHANT_KEY,
            'tid' => $txnid,
            'hash' => $hash,
            'amount' => $amount,
            'name' => $customer_name,
            'productinfo' => $product_info,
            'mailid' => $customer_emial,
            'phoneno' => $customer_mobile,
            'address' => $customer_address,
            'action' => "https://sandboxsecure.payu.in", //for live change action  https://secure.payu.in
            'sucess' => $success,
            'failure' => $fail,
            'cancel' => $cancel
        );
        //--------data arrray is to be passed to the the view
        $this->load->view('includes/user/userheader'); //--------loading the view
        $this->load->view('pages/user/payment/confirmation', $data); //--------loading the view
        $this->load->view('includes/user/userfooter'); //--------loading the view
    }

    public function help() {
        $this->load->view('help');
    }

}
