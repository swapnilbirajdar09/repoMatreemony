<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_profile extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('admin/Adminprofile_model');
    }

    // main index function
    public function index() {
        // start session		
        $admin_name = $this->session->userdata('admin_name'); //----session variable
        if ($admin_name == '') {
            redirect('admin/admin_login');
        }
        $data['adminInfo'] = $this->Adminprofile_model->getAdminDetails();
        // print_r($data['adminInfo']);die();
        $this->load->view('includes/header');
        $this->load->view('pages/admin/admin_profile', $data); //------loading the admin login view
        $this->load->view('includes/footer');
    }

    public function updateAdminDetails() {
        $data = $_POST;

        // call to model function to update AdminDetails
        $result = $this->Adminprofile_model->updateAdminDetails($data);
        if ($result) {
            echo '<p class="w3-text-white w3-green w3-padding-small message"><strong>Success!</strong> Admin Profile updated successfully.</p>';
        } else {
            echo '<p class="w3-text-white w3-red w3-padding-small message"><strong>Failure!</strong> None of the fields were changed. Admin Profile updation failed!</p>';
        }
    }

}
