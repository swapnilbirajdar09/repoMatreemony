<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Renew_confirmation extends CI_Controller {

    // Renew Confirm controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/user_model');
        $this->load->model('admin/dashboard_model');     
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

    // print_r($_POST);
    if(isset($_POST) && !empty($_POST) && isset($_POST['payment_package'])){
        extract($_POST);
            // print_r($_POST);die();
        $arr=explode('|', base64_decode($payment_package));
        $package_title=$arr[0];
        $package_id=$arr[1];
        $package_amount='';
        $package_validity='';
        $package_period='';
        $udf1='';
        $udf2='';
        $udf3='';
        $udf4='';
        $udf5='';

            // get package details
        $package_details=$this->dashboard_model->getPackageDetail($package_id);

        foreach ($package_details as $key) {
            $package_period=$key['package_period'];
            $package_amount=$key['package_price'];
            $package_validity=$key['package_validity'];
        }

            //payumoney details         
            $MERCHANT_KEY = "wlQmQ5WT"; //change  merchant with yours
            $SALT = "JCdH7oOzWV";  //change salt with yours 

            $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

            // generate registration info
            $reg_data=$user_firstname.'|'.$user_lastname.'|'.$user_email.'|'.$user_gender.'|'.$user_mobile.'|'.$user_caste.'|'.$package_amount.'|'.$package_period.'|'.$package_validity.'|'.$package_title;
            
            $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $package_amount . '|' . $reg_data . '|' . $user_firstname . '|' . $user_email . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
            // print_r($hashstring);die();
            $hash = strtolower(hash('sha512', $hashstring)); //------creating hash value manually.

            $success = base_url() . 'user/payment/renew_status'; //-------url for success
            $fail = base_url() . 'user/payment/renew_status';  //--------url for failure
            $cancel = base_url() . 'user/payment/renew_status';  //-------url for cancel
            //--------------creating a data array for store the total information related to the submited form for confirmation

            
            $data = array(
                'mkey' => $MERCHANT_KEY,
                'tid' => $txnid,
                'hash' => $hash,
                'package_amount' => $package_amount,
                'package_title' => $package_title,
                'user_firstname' => $user_firstname,
                'user_email' => $user_email,
                'user_mobile' => $user_mobile,
                'reg_data' => $reg_data,
                'action' => "https://sandboxsecure.payu.in", //for live change action  https://secure.payu.in
                'sucess' => $success,
                'failure' => $fail,
                'cancel' => $cancel
            );
            $data['userDetails'] = $this->user_model->getUserDetails($user_id);
// print_r($data);die();
            $this->load->view('includes/user/userheader',$data); //--------loading the view
            $this->load->view('pages/user/payment/renew_check',$data);
            $this->load->view('includes/user/userfooter'); //--------loading the view
        }
        else{
            echo 'hii';die();
            redirect('/');
        }
        
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
