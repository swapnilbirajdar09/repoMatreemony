<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Piller_2 extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
           
    }

    // main index function
    public function index() {
        
     
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/piller_2.php'); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }
}