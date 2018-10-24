<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
                $this->load->model('admin/Allusers_model');  
    }

    // main index function
    public function index() {
        $data['user_info'] = $this->Allusers_model->getAllUsers();
        $this->load->view('includes/user/userheader.php'); //------user header page
        $this->load->view('pages/user/dashboard.php',$data); //------user profile page
        $this->load->view('includes/user/userfooter.php'); //------user footer page
    }
}