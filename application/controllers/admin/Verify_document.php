<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_document extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Allusers_model');
    }

    // main index function
    public function index() {
        $this->load->view('includes/header');
        $this->load->view('pages/admin/test');
        $this->load->view('includes/footer');
    }
}