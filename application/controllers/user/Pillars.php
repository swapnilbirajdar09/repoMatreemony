<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pillars extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
           
    }

    // pillar one page function
    public function pillar_1() {
        $this->load->view('includes/user/userheader_static.php'); //------user header page
        $this->load->view('pages/user/piller_1.php'); //------pillar page
        $this->load->view('includes/user/userfooter_landing.php'); //------user footer page
    }

    // pillar two page function
    public function pillar_2() {
        $this->load->view('includes/user/userheader_static.php'); //------user header page
        $this->load->view('pages/user/piller_2.php'); //------pillar page
        $this->load->view('includes/user/userfooter_landing.php'); //------user footer page
    }
}