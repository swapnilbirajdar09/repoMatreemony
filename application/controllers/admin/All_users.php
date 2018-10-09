<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_users extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();

        // load common model
        $this->load->model('admin/Allusers_model');
    }

    // main index function
    public function index() {
        // start session		
       
          $data['all_users'] = $this->Allusers_model->getAllUsers();
          // print_r($data);die();
          $this->load->view('includes/adminheader');
        $this->load->view('pages/admin/all_users',$data); //------loading the admin login view
         $this->load->view('includes/admin_footer');
    }
}