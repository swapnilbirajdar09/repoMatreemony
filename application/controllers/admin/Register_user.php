<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();
         $this->load->model('admin/registeruser_model');       
    }

    // main index function
    public function index() {
        
        // $data['all_countries']=$this->home_model->getCountries();
        // $data['all_contact']=$this->home_model->getContactDetails();
         $this->load->view('includes/header');
        $this->load->view('pages/admin/register_user');
        $this->load->view('includes/footer');
    }


      public function register_user() {
          extract($_POST);
          $data=$_POST;
          //print_r($data);die();
           $result = $this->Registeruser_model->register_user($data);
        // print_r($result);die();
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> user Details Saved SuccessFully.
            </div>
            <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
            });
            window.location.reload();
            }, 1000);
                        
            </script>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Warning!</strong>user Details Not Saved SuccessFully.
            </div>
            <script>
            window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
            });
            }, 5000);
            </script>';
        }
        // return $response;
    }

}