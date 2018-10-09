<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_profile extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('admin/Adminlogin_model');
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
        $this->load->view('includes/adminheader');
        $this->load->view('pages/admin/admin_profile', $data); //------loading the admin login view
        $this->load->view('includes/admin_footer');
    }

    public function updateAdminDetails() {
        // get data passed through ANGULAR AJAX
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);

        //print_r($request);
        // call to model function to update AdminDetails
        $result = $this->Adminprofile_model->updateAdminDetails($request);
        if ($result) {
            echo '<div class="alert w3-text-white alert-dismissible fade in alert-fixed w3-round" style = "background-color: #2A3F54; color: #ECF0F1;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> Admin Profile Updated successfully.
			</div>
			<script>
			window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
			location.reload();
			}, 1000);
			</script>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round" >
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Failure!</strong> you Have Not Changed Anything.
			</div>
			<script>
			window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
			}, 5000);
			</script>';
        }
    }

}
