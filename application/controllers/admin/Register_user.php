<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/home_model');       
    }

    // main index function
    public function index() {
        
        $data['all_countries']=$this->home_model->getCountries();
        $data['all_contact']=$this->home_model->getContactDetails();
         $this->load->view('includes/header');
        $this->load->view('pages/admin/register_user',$data);
        $this->load->view('includes/footer');
    }
}