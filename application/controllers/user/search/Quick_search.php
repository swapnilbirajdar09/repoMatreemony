<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quick_search extends CI_Controller {

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
        $this->load->view('pages/user/search/quickSearch'); //------loading the profile page for Quick search 
        $this->load->view('includes/user/userfooter');
    }

    public function getAllUserProfilesByRegularSearch() {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        $result = $this->Quicksearch_model->getAllUserProfilesByRegularSearch($request);
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

}
