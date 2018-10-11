<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();

        // load common model
        $this->load->model('admin/Adminlogin_model');
    }

    // main index function
    public function index() {
        // start session		
        $admin_name = $this->session->userdata('admin_name'); //----session variable
        if ($admin_name != '') {
            redirect('admin/dashboard');
        }
        $this->load->view('pages/admin/adminlogin'); //------loading the admin login view
    }

    // check login authentication-----------------------------------------------------------
    public function adminlogin() {
        // get data passed through ANGULAR AJAX
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        //print_r($request['username']);
        // call to model function to authenticate user
        $result = $this->Adminlogin_model->adminlogin($request['username'], $request['password']);
        // print valid message
        if (!$result) {
            // failure scope
            echo '<p class="w3-red w3-padding-small">Sorry, your credentials are incorrect!</p>';
        } else {
            // success scope
            //----create session array--------//
            $session_data = array(
                'admin_name' => $request['username']
            );
            //start session of user if login success
            $this->session->set_userdata($session_data);
            //redirect('admin/dashboard');
            echo '200';
            //echo '<p class="w3-green w3-padding-small">Login successfull! Welcome Admin.</p>';
        }
        //print_r($result);
    }

    // logout function starts here----------------------------------------------------
    public function logoutAdmin() {
        //start session		
        $admin_name = $this->session->userdata('admin_name');

        //if logout success then destroy session and unset session variables
        $this->session->unset_userdata(array('admin_name'));
        $this->session->sess_destroy();
        redirect('admin/admin_login');
    }

    // logout function ends here---------------------------------------------------------
}
