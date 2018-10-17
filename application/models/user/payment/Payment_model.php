<?php

class Payment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //---------------------function for save membership package payment Information--------------//
    function save_paymentdetails($data) {
        //print_r($data);die();
        extract($data);
        $checkTransaction = Payment_model::checkTransactionIdExist($txnid); //----check fun for transaction id is already exist
        if ($checkTransaction) {
            $date = date('Y-m-d');
            $query = "INSERT INTO membership_payment_tab"
                    . "(jm_user_id,jm_user_name,jm_package,jm_status,jm_txnid,jm_amount,jm_hash,jm_subscribed_date)"
                    . "VALUES('$user_id','$user_name','$productinfo','$status','$txnid','$amount','$hash',NOW())";
            //echo $query;die();

            if ($this->db->query($query)) {
                if ($status != 'failure' && $status != '') {
                    Payment_model::getUpdateUserDetails($productinfo, $user_id);
                }
//-------------if query returns true or fired successfully-------------//
                $response = array(
                    'status' => 200,
                    'status_message' => 'Transaction saved successfully.');
            } else {
                //-------------if query returns False or not fired successfully-------------//

                $response = array(
                    'status' => 500,
                    'status_message' => 'Transaction failed.');
            }
        } else {
            //if Transaction Id already Exist then show error
            $response = array(
                'status' => 500,
                'status_message' => 'Transaction ID: ' . $txnid . ' already saved !!!'
            );
        }

        return $response;
    }

    //-----End function for save membership package payment Information-----------------------------//
    //----------fun for check transaction Id is already exist-------------------//
    public function checkTransactionIdExist($txnid) {
        $query = null;
        $query = $this->db->get_where('membership_payment_tab', array(//making selection
            'jm_txnid' => $txnid
        ));

        if ($query->num_rows() > 0) {
            return 0;
        } else {
            return 1;
        }
    }

    //----------fun for check transaction Id is already exist Ends here-------------------//
//--------------fun for get update user details----------------------//
//    public function getUpdateUserDetails() {
//        
//    }

//--------------fun for get update user details Ends here----------------------//
}
