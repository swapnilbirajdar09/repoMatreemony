<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regular_search extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/search/Quicksearch_model');
    }

    // main index function
    public function index() {
        // start session		
//        $admin_name = $this->session->userdata('admin_name'); //----session variable
//        if ($admin_name == '') {
//            redirect('admin/admin_login');
//        }
        //$data['adminInfo'] = $this->Adminprofile_model->getAdminDetails();
        // print_r($data['adminInfo']);die();
        $this->load->view('includes/user/userheader');
        $this->load->view('pages/user/search/regularSearch'); //------loading the profile page for Quick search 
        $this->load->view('includes/user/userfooter');
    }

}
