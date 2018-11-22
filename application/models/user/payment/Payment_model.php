<?php

class Payment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    //---------------------function for save membership package payment Information--------------//
    function savePaymentInformation($data) {
        //print_r($data);die();
        extract($data);
        $checkTransaction = Payment_model::checkTransactionIdExist($txnid); //----check fun for transaction id is already exist

        $key=explode('|',$register_data);

        $user_firstname=$key[0];
        $user_lastname=$key[1];
        $user_email=$key[2];
        $user_gender=$key[3];
        $user_mobile=$key[4];
        $user_caste=$key[5];
        $package_amount=$key[6];
        $package_period=$key[7];
        $package_validity=$key[8];
        $package_title=$key[9];
        $date = date('Y-m-d');

        if ($checkTransaction) {

            $insert_transaction = array(
                'user_email' => $user_email,
                'user_name' => $user_firstname.' '.$user_lastname,
                'payment_status' => $status,
                'transaction_id' => $txnid,
                'payment_amount' => $amount,
                'payment_package' => $package_title,
                'hash_key' => $hash,
                'payment_date' => $date
            );
            $this->db->insert('membership_payment_tab',$insert_transaction);
            if($this->db->affected_rows()>0){
                $expiry_date = '';
                switch ($package_period) {
                    case 'Monthly':
                    $expiry_date = date('Y-m-d', strtotime('+'.$package_validity.' months'));
                    break;
                    case 'Yearly':
                    $expiry_date = date('Y-m-d', strtotime('+'.$package_validity.' years'));
                    break;
                }
            //----function to auto generate password
                $passwd = Payment_model::get_random_password(); 

                $insert_usertab = array(
                    'user_gender' => $user_gender,
                    'user_firstname' => $user_firstname,
                    'user_lastname' => $user_lastname,
                    'user_email' => $user_email,
                    'user_password' => base64_encode($passwd),
                    'user_reg_date'=> $date,
                    'user_expiry_date' => $expiry_date,
                    'user_caste' => $user_caste,
                    'user_package'=> $package_title,
                    'user_mobile_num' => $user_mobile,
                    'user_remaining_requests' =>'5',
                    'user_status' => '1'
                );

                $this->db->insert('user_tab',$insert_usertab);

                $insert_id = $this->db->insert_id();
                $profile_key=substr(base64_encode($insert_id),0,4) ;

                $insert_profiletab = array(
                    'user_id' => $insert_id,
                    'user_profile_key' => 'BPARI#'.date('Ymd').'0'.$insert_id.$profile_key
                );
                $this->db->insert('user_profile_tab',$insert_profiletab);
            //print_r($profile_tab);die();
                if($this->db->affected_rows()>0){
                    $sendMail=Payment_model::sendPasswordMail($user_email,$passwd);
                    $response=array(
                        'db_status' =>  'success',
                        'db_message'    => 'We have received a payment of Rs. '.$amount.'. Your account was successfully created. We have send a password on your Email. Log In & Search your perfect match !',
                        'db_error_level'    =>  'none'
                    );
                    return $response;
                }
                else{
                    $response=array(
                        'db_status' =>  'false',
                        'db_message'    => 'There was an error generating your profile. Please contact administrator if your money was deducted from account !',
                        'db_error_level'    =>  'fatal'
                    );
                    return $response;
                }
            }
            else{
                $response=array(
                    'db_status' =>  'false',
                    'db_message'    => 'There was an error saving your transaction. Please contact administrator if your money was deducted from account !',
                    'db_error_level'    =>  'fatal'
                );
                return $response;
            }

        } else {
            //if Transaction Id already Exist then show error
            $response=array(
                'db_status' =>  'false',
                'db_message'    => 'Transaction ID: ' . $txnid . ' already completed. Please Go Back to Homepage !',
                'db_error_level'    =>  'warning'
            );
            return $response;
        }
    }

    //----------fun for check transaction Id is already exist-------------------//
    public function checkTransactionIdExist($txnid) {
        $query = null;
        $query = $this->db->get_where('membership_payment_tab', array(//making selection
            'transaction_id' => $txnid
        ));

        if ($query->num_rows() > 0) {
            return 0;
        } else {
            return 1;
        }
    }

    // send password by mail
    public function sendPasswordMail($email,$password){
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mx1.hostinger.in',
            'smtp_port' => '587',
            'smtp_user' => 'support@buddhistparinay.in', // change it to yours
            'smtp_pass' => 'Descartes@1990', // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );
        $config['smtp_crypto'] = 'tls';

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('support@buddhistparinay.in', "Admin Team");
        $this->email->to($email);
        $this->email->subject("Account Registration - Buddhist Parinay");
        $this->email->message('<html><head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="http://jobmandi.in/css/bootstrap/bootstrap.min.css">
            <script src="http://jobmandi.in/css/bootstrap/jquery.min.js"></script>
            <script src="http://jobmandi.in/css/bootstrap/bootstrap.min.js"></script>
            </head><body>
            <p><label><h3><b>Account Registration Success</label></b></h3></p>
            <p>Welcome to Buddhist Parinay, we are very glad to inform you that your registration for <b>Buddhist Parinay</b> was successfull. Following are your credentials to login in our system:</p>
            <p><label>Email Id:- '.$email.' </label></p>
            <p><label>Password:- '.$password.'</label></p><br>
            <p>Search your dream partner here and get a perfect match. Happy Matching!</p><br>
            <p>Kind Regards,</p>
            <p><b>Admin - Buddhist Parinay</b></p>
            </body>
            </html>');
        if (!$this->email->send()) {
            return true;
        } else {           
        }
    }

    // function to autogenerate password
    public function get_random_password()
    {
        $chars_min=6;
        $chars_max=8;
        $use_upper_case=false;
        $include_numbers=false;
        $include_special_chars=false;

        $length = rand($chars_min, $chars_max);

        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        if($include_numbers) {
            $selection .= "1234567890";
        }
        if($include_special_chars) {
            $selection .= "!@#$%&[]?";
        }

        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $password .=  $current_letter;
        }                
        
        return $password;
    }

}
