<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

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
        $this->load->view('pages/admin/dashboard'); //------loading the admin dashboard view
         $this->load->view('includes/admin_footer');
    }
  }
