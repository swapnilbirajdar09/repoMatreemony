<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();

        // load common model
        $this->load->model('user/userlogin_model');
    }

    // main index function
    public function index() {
        
    }

    // check login authentication-----------------------------------------------------------
    public function authenticateUser() {
        // get data passed through ANGULAR AJAX
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        // print_r($request['login_email_id']);die();
        // call to model function to authenticate user
        $result = $this->userlogin_model->authenticateUser($request['login_email_id'], $request['login_password']);

        // print valid message
        if (!$result) {
            // failure scope
            echo 'false';
        } else {

            if($result=='deactivated'){
                echo 'deactivated';
                die();
            }

            // success scope
            $resultArr=explode('|', $result);
            //----create session array--------//
            $key=base64_encode('PARInaayKEY|'.$request['login_email_id'].'|'.$resultArr[0]);  
            //session key format is PARInaayKEY|email_id|user_id

            $session_data = array(
                'PariKey_session' => $key,
                'key_gender' => $resultArr[1]
            );
            //start session of user if login success
            $this->session->set_userdata($session_data);
            echo 'true';
        }
    }

    // logout function starts here----------------------------------------------------
    public function logoutUser() {
        //start session		
        $encodedkey = $this->session->userdata('PariKey_session');
        $key=base64_decode($encodedkey);
        $keyarr=explode('|', $key);

        // call to model function to logout user
        $result = $this->userlogin_model->logoutUser($keyarr[2]);
        //if logout success then destroy session and unset session variables
        $this->session->unset_userdata(array('PariKey_session'));
        $this->session->unset_userdata(array('key_gender'));
        $this->session->sess_destroy();
        redirect('/');
    }

    // logout function ends here---------------------------------------------------------

      public function forgetPassword() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        //sprint_r($request);

        $admin_email = $this->Adminlogin_model->getAdminEmail();
        $admin_password = $this->Adminlogin_model->getAdminPassword();
        //print_r($result);die();
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mx1.hostinger.in',
            'smtp_port' => '587',
             'smtp_user' => '', // change it to yours
            'smtp_pass' => 'Descartes@1990',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        $config['smtp_crypto'] = 'tls';

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('vaidehi@bizmo-tech.com', "Admin Team");
        $this->email->to($admin_email);
        $this->email->subject("Parinay-Forget Password Request");
        $this->email->message('<html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="' . base_url() . 'assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <script src="' . base_url() . 'assets/js/jquery.min.js"></script>
            <script src="' . base_url() . 'assets/bootstrap/js/bootstrap.min.js"></script>
            </head>
            <body>
            <div class="container col-lg-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;margin:10px; font-family:Candara;">
            <h1><i class="fa fa-circle-o w3-orange w3-padding-tiny w3-text-white" style="text-shadow: 2px 2px #ff0000;"></i> Parinay Vadhu-Var Suchak Mandal </h1>
            <h2 style="color: black; font-size:30px">Forgot Your Password?</h2>
            <h3 style="font-size:15px;">Hello Sir,<br>We have recieved a request from '.$request['email_id'].' to have your password for <b>Parinay Vadhu-Var Suchak Mandal</b>. </h3>
            <div class="col-lg-12">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
            <h4><b>Password: </b>' . $password . '<br>
            </div>
            <div class="col-lg-4"></div>
            </div>
            <hr>    
            </div>
            </body>
                        </html>');

        if ($this->email->send()) {
            echo 'Email Sent Successfully';

        } else {
            echo 'Email Sending Failed.';
        }
    }
}
