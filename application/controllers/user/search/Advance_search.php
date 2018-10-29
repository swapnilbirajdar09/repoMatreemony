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
        $encodedkey = $this->session->userdata('PariKey_session');
        $gender = $this->session->userdata('key_gender');
        $user_id = '';
        // check session active or not
        if ($encodedkey == '') {
            redirect('/');
        } else {
            $key = base64_decode($encodedkey);
            $keyarr = explode('|', $key);
            // print_r($keyarr);die();
            //session key format is PARInaayKEY|email_id|user_id

            if ($keyarr[0] != 'PARInaayKEY' && $keyarr[1] != '' && $keyarr[2] != '') {
                redirect('/');
            } else {
                $user_id = $keyarr[2];
            }
        }
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
        $gender = $this->session->userdata('key_gender');
        $result = $this->Advancesearch_model->getAllUserProfilesByAdvanceSearch($request,$gender);
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
