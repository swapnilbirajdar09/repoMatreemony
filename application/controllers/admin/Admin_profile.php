<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_profile extends CI_Controller {

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
        if ($admin_name == '') {
            redirect('admin/admin_login');
        }
        $this->load->view('includes/adminheader');
        $this->load->view('pages/admin/admin_profile'); //------loading the admin login view
         $this->load->view('includes/admin_footer');
    }

//    public function saveAdminDetails(){
//        
//    }
    
}
