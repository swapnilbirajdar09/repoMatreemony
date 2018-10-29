<?php

class Advancesearch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//----------------fun for get all countries
    public function getAllCountries() {
        $sql = "SELECT * FROM countries";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//-------------fun for get all occupations
    public function getOccupationDetails() {
        $sql = "SELECT * FROM occupation_tab";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

    //-------------fun for get all Education
    public function getEducationDetails() {
        $sql = "SELECT * FROM education_tab";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//------------fun for get all states by country id
    public function getAllStatesByCountryId($country) {
        $countryName = '';
        $countryId = '';
        $countries = explode("/", $country);
        $countryName = $countries[0]; // piece1
        $countryId = $countries[1]; // piece2

        $sql = "SELECT * FROM states WHERE country_id = '$countryId'";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//------------fun for get all states by state id
    public function getAllCitiesByStateId($state) {
        $stateName = '';
        $stateId = '';
        $states = explode("/", $state);
        $stateName = $states[0]; // piece1
        $stateId = $states[1]; // piece2

        $sql = "SELECT * FROM cities WHERE state_id = '$stateId'";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

//-------------fun for filter the profiles by diifrent attribute or filters
    public function getAllUserProfilesByAdvanceSearch($request,$gender) {
        extract($request);
        $sql = "SELECT * FROM user_profile_tab,user_tab WHERE user_tab.user_id = user_profile_tab.user_id AND user_tab.user_gender != '$gender'";

        if ($language != '') {
            $sql .= "AND user_profile_tab.user_mother_tongue = '$language'";
        }
        if ($religion != '') {
            $sql .= "AND user_tab.user_caste = '$religion'";
        }
        if ($filter_aged_from != '') {
            $sql .= "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25)";
        }
        if ($filter_aged_to != '') {
            $sql .= "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
        }
        if ($maritalStatus != '') {
            $sql .= "AND user_profile_tab.user_marital_status = '$maritalStatus'";
        }

        if ($country != '') {
            $countryName = '';
            $countryId = '';
            $countries = explode("/", $country);
            $countryName = $countries[0]; // piece1
            $countryId = $countries[1]; // piece2
            $sql .= "AND user_profile_tab.user_country = '$countryName'";
        }

        if ($state != '') {
            $stateName = '';
            $stateId = '';
            $states = explode("/", $state);
            $stateName = $states[0]; // piece1
            $stateId = $states[1]; // piece2
            $sql .= "AND user_profile_tab.user_state = '$stateName'";
        }
        if ($city != '') {
            $sql .= "AND user_profile_tab.user_city = '$city'";
        }
        if ($filter_member_id != '') {
            $sql .= "AND user_profile_tab.user_profile_key = '$filter_member_id'";
        }
        if ($working_field != '') {
            $sql .= "AND user_profile_tab.user_working_field = '$working_field'";
        }
        if ($occupation != '') {
            $sql .= "AND user_profile_tab.user_occupation_type = '$occupation'";
        }
        if ($education != '') {
            $sql .= "AND user_profile_tab.user_education_field = '$education'";
        }
        if ($max_height != '') {
            $sql .= "AND user_profile_tab.user_height <= '$max_height'";
        }
        if ($min_height != '') {
            $sql .= "AND user_profile_tab.user_height >= '$min_height'";
        }
        if ($from_weight != '') {
            $sql .= "AND user_profile_tab.user_weight >= '$from_weight'";
        }
        if ($to_weight != '') {
            $sql .= "AND user_profile_tab.user_weight <= '$to_weight'";
        }
        if ($from_salary != '') {
            $sql .= "AND user_profile_tab.user_annual_income >= '$from_salary'";
        }
        if ($to_salary != '') {
            $sql .= "AND user_profile_tab.user_annual_income <= '$to_salary'";
        }
        $sql .= "ORDER BY user_tab.user_id DESC";
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }

}
