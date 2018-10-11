<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();

       
    }

    // main index function
    public function index() {
        
        $this->load->view('pages/user/homepage.php'); //------landing page
    }
}