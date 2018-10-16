<?php

class Quicksearch_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//---------------fun for get all user profiles by diffrent parameters like age , language, religion, gender

    public function getAllUserProfilesByRegularSearch($request) {
        extract($request);
        //print_r($request);
        //die();
        $condi = '';
        $sql = '';

        if ($filter_aged_from == '' && $filter_aged_to != '' && $religion != '' && $language != '') {
            $filter_aged_from = 0;
            $condi = "AND user_profile_tab.user_caste = '$religion' AND user_profile_tab.user_mother_tongue = '$language' AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($filter_aged_to == '' && $filter_aged_from != '' && $religion != '' && $language != '') {
            $filter_aged_to = 0;
            $condi = "AND user_profile_tab.user_caste = '$religion' AND user_profile_tab.user_mother_tongue = '$language' AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($religion == '' && $filter_aged_to != '' && $filter_aged_from != '' && $language != '') {
            $religion = 0;
            $condi = "AND user_profile_tab.user_mother_tongue = '$language' AND (DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25) AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25))";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        }elseif ($language == '' && $religion != '' && $filter_aged_to != '' && $filter_aged_from != '') {
            $language = 0;
            $condi = "AND user_profile_tab.user_caste = '$religion' AND (DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25) AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25))";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        }
        
        //---------if any two values are to be null
         elseif ($filter_aged_from == '' && $filter_aged_to == '' && $language != '' && $religion != '') {
            $filter_aged_from = 0;
            $filter_aged_to = 0;
            $condi = "AND user_profile_tab.user_caste = '$religion' AND user_profile_tab.user_mother_tongue = '$language'";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        }  elseif ($filter_aged_from != '' && $religion != '' && $filter_aged_to == '' && $language == '' ) {
            $filter_aged_to = 0;
            $language = 0;
            $condi = "AND user_profile_tab.user_caste = '$religion' AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($filter_aged_from == '' && $filter_aged_to != '' && $language != '' && $religion == '') {
            $filter_aged_from = 0;
            $religion = 0;
            $condi = "AND user_profile_tab.user_mother_tongue = '$language' AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($language == '' && $religion == '' && $filter_aged_from != '' && $filter_aged_to != '') {
            $language = 0;
            $religion = 0;
            $condi = "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25) AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($language != '' && $religion == '' && $filter_aged_from != '' && $filter_aged_to == '') {
            $filter_aged_to = 0;
            $religion = 0;
            $condi = "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25) AND user_profile_tab.user_mother_tongue = '$language'";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        }
        elseif ($language == '' && $religion != '' && $filter_aged_from == '' && $filter_aged_to != '') {
            $filter_aged_from = 0;
            $language = 0;
            $condi = "AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25) AND user_profile_tab.user_caste = '$religion'";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        }
                //---------if any two values are to be null ---ends here

        
        elseif ($filter_aged_from == '' && $language == '' && $religion == '' && $filter_aged_to != '') {
            $language = 0;
            $religion = 0;
            $filter_aged_from = 0;
            $condi = "AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($filter_aged_to == '' && $language == '' && $religion == '' && $filter_aged_from != '') {
            $language = 0;
            $religion = 0;
            $filter_aged_to = 0;
            $condi = "AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($filter_aged_from == '' && $language == '' && $filter_aged_to == '' && $religion != '') {
            $language = 0;
            $filter_aged_from = 0;
            $filter_aged_to = 0;
            $condi = "AND user_profile_tab.user_caste = '$religion'";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } elseif ($filter_aged_from == '' && $religion == '' && $filter_aged_to == '' && $language != '') {
            $religion = 0;
            $filter_aged_from = 0;
            $filter_aged_to = 0;
            $condi = "AND user_profile_tab.user_mother_tongue = '$language'";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        }
        
        
        elseif ($filter_aged_from != '' && $religion != '' && $filter_aged_to != '' && $language != '') {            
            $condi = "AND user_profile_tab.user_mother_tongue = '$language' AND user_profile_tab.user_caste = '$religion' AND DATEDIFF(CURRENT_DATE, user_profile_tab.user_dob) >= ('$filter_aged_from' * 365.25) AND DATEDIFF(CURRENT_DATE,user_profile_tab.user_dob) <= ('$filter_aged_to' * 365.25)";
            $sql = "SELECT * FROM user_profile_tab,user_tab "
                    . "WHERE user_tab.user_id = user_profile_tab.user_id $condi";
        } else {
            $sql = "SELECT * FROM user_profile_tab,user_tab WHERE user_tab.user_id = user_profile_tab.user_id";
        }
//        echo $sql;
//        die();
        $result = $this->db->query($sql);
        if ($result->num_rows() <= 0) {
            return false;
        } else {
            return $result->result_array();
        }
    }
//------fun for filter the users--------------------------//

}
