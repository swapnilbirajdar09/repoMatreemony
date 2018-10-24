<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_users extends CI_Controller {

    // Login controller
    public function __construct() {
        parent::__construct();

        // load common model
        $this->load->model('admin/Allusers_model');
        $this->load->helper('file');
        $this->load->helper('url');
        $this->load->helper('download');
    }

    // main index function
    public function index() {
        // start session		
       if(isset($_GET['search_byID']) || isset($_GET['search_byName']) || isset($_GET['valid']) && $_GET['valid']=='true'){
      extract($_GET);
      //echo "check if";
            $data['all_users'] = $this->Allusers_model->filtermember($_GET['search_byID'],$_GET['search_byName'],$sortbyGender); //------------fun for get all users on filter search
        }
        else{
              //echo "check else";
           $data['all_users'] = $this->Allusers_model->getAllUsers();
        }
          
          // print_r($data);die();
           $this->load->view('includes/header');
        $this->load->view('pages/admin/all_users',$data);
         $this->load->view('includes/footer');
    }

  

   //-----------------fun for Delete user details------------------------------------------//

    public function deleteUserDetails() {
        extract($_POST);
        $result = $this->Allusers_model->deleteUserDetails($user_id);
        //print_r($result);die();
        if ($result == 200) {
    
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> Member Details Deleted SuccessFully.
      </div>
      <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
      });
      }, 5000);
      location.reload();

      </script>';
        } else {

            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Warning!</strong> Member Details Not Deleted SuccessFully.
      </div>
      <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
      });
      }, 5000);
      </script>';
        }
    }

    //------------fun for activate user-----------------------//
      public function activeuser() {
        extract($_POST);
        $result = $this->Allusers_model->activeuser($user_id);
        //print_r($result);die();
        if ($result['status'] == 200) {
                echo "check if";
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> Member active  SuccessFully.
      </div>
      <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
      });
      }, 5000);
      location.reload();

      </script>';
        } else {
           echo "check else";
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Warning!</strong> Member active Not Deleted SuccessFully.
      </div>
      <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
      });
      }, 5000);
      </script>';
        }
    }

    //------------fun for deactivate user-----------------------//
      public function deactiveuser() {
        extract($_POST);
        $result = $this->Allusers_model->deactiveuser($user_id);
        //print_r($result);die();
        if ($result['status'] == 200) {
               // echo "check if";
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> Member deactive  SuccessFully.
      </div>
      <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
      });
      }, 5000);
      location.reload();

      </script>';
        } else {
          // echo "check else";
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Warning!</strong> Member deactive Not Deleted SuccessFully.
      </div>
      <script>
      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
      });
      }, 5000);
      </script>';
        }
    }
//---------function for view user -------------//
       public function viewuser() {
        $response = $this->Allusers_model->viewuser();
        return $response;
    }

    //---------function for filter user -------------//
       public function filtermember() {
        $response = $this->Allusers_model->filtermember();
        return $response;
    }

    //-------download user list csv
    public function downloadAllUsers() {
        extract($_GET);
        $result = $this->Allusers_model->downloadAllUsers();
        //print_r(json_encode($result));
        $filename = 'All_User_list_' . date('Y-m-d') . '.csv';
        header("Content-Type: application/csv; ");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
// get data 
        $usersData = $result;
// file creation 
        $file = fopen('php://output', 'w');
        $header = array("Full Name", "Gender", "Registration Date", "City", "Marital Status");
        fputcsv($file, $header);
        if ($result) {
            foreach ($usersData as $key => $line) {
                fputcsv($file, $line);
            }
        } else {
            fputcsv($file, array('------------No data available-----------'));
        }
        fclose($file);
        //force_download($file);
        exit;
    }

}