<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_profile extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/search/Advancesearch_model');
    }

    // main index function
    public function index() {

        $data['country'] = $this->Advancesearch_model->getAllCountries();        
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/User_profile.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }
}