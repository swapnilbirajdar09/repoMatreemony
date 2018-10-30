<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();

     $this->load->model('user/Contact_model');
    }

    // main index function
    public function index() {
    	  extract($_GET);
    	 // print_r($_GET);die();
        $data['info'] = Contact_us::admincontact_details();
       // print_r($data);die();
        $this->load->view('includes/user/userheader_static.php'); //------user header page
        $this->load->view('pages/user/contact_us.php',$data); //------landing page
        $this->load->view('includes/user/userfooter_landing.php'); //------user footer page
    }

      public function admincontact_details() {
        
        $result = $this->Contact_model->admincontact_details();
        return $result;
    }



    public function sendContactEmail() {
        extract($_POST);
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mx1.hostinger.in',
            'smtp_port' => '587',
            'smtp_user' => 'jobmandi@bms.bizmo-tech-admin.com', // change it to yours
            'smtp_pass' => 'Descartes@1990', // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        $config['smtp_crypto'] = 'tls';

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('jobmandi@bms.bizmo-tech-admin.com', "Admin Team");
        $this->email->to('jobmandi@bms.bizmo-tech-admin.com');
        $this->email->subject("Parinay-Contact Form");
        $this->email->message("<html>"
                . "<head>"
                . "</head>"
                . "<body>"
                . "<p><label><h3><b>Contact Form</label></b></h3></p>"
                . "<p><label>Contact form has been submitted by: Name:- $name </label></p>"
                . "<p><label>Email Id:- $email </label></p>"
                . "<p><label>Subject:- $number</label></p>"
                . "<p><label>For The Purpose Of: $message </label></p>"
                . "</body>"
                . "</html>");
        if (!$this->email->send()) {
            echo '<div class="alert alert-danger" style="margin-bottom:5px">
            <strong>Message Sending Failed.</strong> 
            </div>
            <script>
            window.setTimeout(function() {
              $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                 $(this).remove(); 
                 location.reload();
             });
            }, 100);
            </script>';
        } else {

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('jobmandi@bms.bizmo-tech-admin.com', "Admin Team");
            $this->email->to($email);
            $this->email->subject("JOBMANDI-Customer Care");
            $this->email->message( '<html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="http://jobmandi.in/css/bootstrap/bootstrap.min.css">
            <script src="http://jobmandi.in/css/bootstrap/jquery.min.js"></script>
            <script src="http://jobmandi.in/css/bootstrap/bootstrap.min.js"></script>
            </head>
            <body>
            <div class="container col-lg-8" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;margin:10px; font-family:Candara;">
            <img class="w3-border" style="width:100px;height:auto; margin-left:auto; margin-right: auto;" src="http://jobmandi.in/images/desktop/logo-main.png">
            <h2 style="color:#4CAF50; font-size:30px">ParinayCustomer Support</h2>
            <h3 style="font-size:15px;"> Your message was successfully sent!.<br><br>Thank you for contacting us, we will reply to your inquiry as soon as possible!</h3>
            <div class="col-lg-12">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            </div>
            <h4 style="font-size:15px;"><b>Thank You..!</b></h4>
            </div>
            </body></html>');
                    
            if ($this->email->send()) {
                echo '<div class="alert alert-success" style="margin-bottom:5px">
            <strong>Message Sent Successfully..!</strong> 
            </div>
            <script>
            window.setTimeout(function() {
              $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                 $(this).remove(); 
                 location.reload();
             });
            }, 100);
            </script>';
            } else {
                echo '<div class="alert alert-danger" style="margin-bottom:5px">
            <strong>Message Sending Failed..!</strong> 
            </div>
            <script>
            window.setTimeout(function() {
              $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                 $(this).remove(); 
                 location.reload();
             });
            }, 100);
            </script>';
            }
        }
    }

    //----------------------email verification code ends------------------------//
}