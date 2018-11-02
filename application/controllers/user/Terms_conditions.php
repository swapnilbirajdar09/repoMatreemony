<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_conditions extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
    }

    // main index function
    public function index() {
        $this->load->view('includes/user/userheader_static.php'); //------user header page
        $this->load->view('pages/user/terms_conditions.php'); //------user profile page
        $this->load->view('includes/user/userfooter_landing.php'); //------user footer page
    }

}
