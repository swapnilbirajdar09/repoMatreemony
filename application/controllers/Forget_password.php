<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_password extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/home_model');
    }

    // main index function
    public function index() {
//        $this->load->view('includes/user/userheader_landing.php'); //------user header page
        $this->load->view('pages/user/forgetPassword.php');
//        $this->load->view('includes/user/userfooter_landing.php');
    }

    public function getPassword() {
        extract($_POST);
        //print_r($_POST);die();
        //Connection establishment, processing of data and response from REST API		
        $data = array(
            'forget_email' => $forget_email
        );
        $result = $this->home_model->getPassword($data);
        //print_r($result);die();
        if ($result['status'] == 200) {
            echo '<div class="alert alert-success">
            <strong>' . $result['status_message'] . '</strong> 
            </div>';
        } elseif ($result['status'] == 412) {
            echo '<div class="alert alert-danger">
            <strong>' . $result['status_message'] . '</strong> 
            </div>';
        } else {
            echo '<div class="alert alert-danger">
            <strong>' . $result['status_message'] . '</strong> 
            </div>';
        }
    }

}
