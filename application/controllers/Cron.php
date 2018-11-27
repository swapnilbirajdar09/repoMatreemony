<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cron extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
        $this->load->model('user/user_model');   
    }

    // main index function
    public function index() {
        $data['result']=$this->user_model->checkPackageExpired();
        print_r($data['result']);
    }

}