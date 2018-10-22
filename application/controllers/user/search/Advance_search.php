<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Advance_search extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        // load common model
        $this->load->model('user/search/Advancesearch_model');
    }

    // main index function
    public function index() {
        // start session		
//        $admin_name = $this->session->userdata('admin_name'); //----session variable
//        if ($admin_name == '') {
//            redirect('admin/admin_login');
//        }
        $data['country'] = $this->Advancesearch_model->getAllCountries();
        $data['occupations'] = $this->Advancesearch_model->getOccupationDetails();
        $data['educations'] = $this->Advancesearch_model->getEducationDetails();
        $this->load->view('includes/user/userheader');
        $this->load->view('pages/user/search/advanceSearch', $data); //------loading the profile page for Quick search 
        $this->load->view('includes/user/userfooter');
    }
//---------------fun for get all profile by diff filters in advanced 
    public function getAllUserProfilesByAdvanceSearch() {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata, TRUE);
        //extract($request);
        $result = $this->Advancesearch_model->getAllUserProfilesByAdvanceSearch($request);
        //print_r($result);die();
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }
//------------fun for get the state by country id
    public function getCountryState() {
        extract($_GET);
        $result = $this->Advancesearch_model->getAllStatesByCountryId($country);
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }
//-------------fun for get the cities by state id
    public function getStateCity() {
        extract($_GET);
        $result = $this->Advancesearch_model->getAllCitiesByStateId($state);
        if (!$result) {
            echo '500';
        } else {
            print_r(json_encode($result));
        }
    }

}
