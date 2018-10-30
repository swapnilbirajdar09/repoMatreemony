<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_package extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
       $this->load->model('admin/dashboard_model');     
    }

    // main index function
    public function index() {
         $data['package'] = $this->dashboard_model->getAllPackages();
         $this->load->view('includes/user/userheader_static.php'); 
         $this->load->view('pages/user/purchase_package.php',$data); //------user purchase package  page
         $this->load->view('includes/user/userfooter_landing.php');
    }

    

}