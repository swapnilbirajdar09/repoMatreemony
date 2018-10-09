<?php

class Adminprofile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // update admin details function
    public function updateAdminDetails($data) {

        $username = $data['username'];
        $companyName = $data['companyName'];
        $eMail = $data['eMail'];
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $officeAddress = $data['officeAddress'];
        $officeType = $data['officeType'];
        $adminCity = $data['adminCity'];
        $adminCountry = $data['adminCountry'];
        $postalCode = $data['postalCode'];
        $adminInfo = $data['adminInfo'];
        $sql = "UPDATE admin_tab SET username = '$username',admin_email = '$eMail',company_name = '$companyName',"
                . "admin_officetype = '$officeType',admin_office_address = '$officeAddress',admin_firstname = '$firstName',"
                . "admin_lastname = '$lastName',admin_city = '$adminCity',admin_country = '$adminCountry',"
                . "admin_postal_code = '$postalCode',admin_details = '$adminInfo' WHERE admin_id = '1'";
        $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getAdminDetails() {
        $sql = "SELECT * FROM admin_tab";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

}
