<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/home_model');       
    }

    // main index function
    public function index() {
        
        $data['all_countries']=$this->home_model->getCountries();
        $data['all_contact']=$this->home_model->getContactDetails();
        $this->load->view('includes/user/userheader_landing.php'); //------user header page
        // $this->load->view('pages/user/homepage.php',$data); //------landing page
        // $this->load->view('includes/user/userfooter.php'); //------user footer page
        $this->load->view('pages/user/home2',$data);
        $this->load->view('includes/user/userfooter_landing.php');
    }
}