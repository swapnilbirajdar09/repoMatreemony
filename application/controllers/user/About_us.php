<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/Contact_model');
    }

    // main index function
    public function index() {

        $data['info'] = $this->Contact_model->admincontact_details();
        $this->load->view('includes/user/userheader_static.php'); //------user header page
        $this->load->view('pages/user/about_us.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter_landing.php'); //------user footer page
    }

}
