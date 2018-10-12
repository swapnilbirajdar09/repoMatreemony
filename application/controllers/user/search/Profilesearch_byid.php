<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profilesearch_byid extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('admin/Adminprofile_model');
        $this->load->model('user/search/Searchbyprofileid_model');
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
        $this->load->view('pages/user/search/profileSearchById'); //------loading the profile search by id view
        $this->load->view('includes/user/userfooter');
    }

//---------------fun for get all user profiles by user profile id

    public function searchByProfile_id() {
        extract($_GET);
        //print_r($_GET);
        $result = $this->Searchbyprofileid_model->searchByProfile_id($filter_member_id);
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

//---------------fun for get all user profiles

    public function getAllUserProfiles() {
        extract($_GET);
        //print_r($_GET);
        $result = $this->Searchbyprofileid_model->getAllUserProfiles();
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

}
