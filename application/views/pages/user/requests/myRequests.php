<?php error_reporting(E_ERROR | E_PARSE); ?>
<title>My Requests - Buddhist Parinay</title>
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h2 class="heading heading-3 strong-400 mb-0" style="color: #5E32E1 !important"><i class="fa fa-user-plus"></i> My Requests</h2>
            </div>
        </div>
    </div>
</section>
<section class="slice sct-color-1" ng-app="AllRequestsFollowersApp" ng-controller="AllRequestsFollowersAppController">
    <div class="container">

        <div class="row clearfix" style=" margin-top: 5px;">
            <!-- Alert for Validating Ajax Profile Edit Section -->
            <div class="col-lg-3 col-md-4 alert_message" id="ajax_validation_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                <div class="alert alert-warning  fade show alert-dismissible" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <span class="ajax_validation_alert"></span>
                </div>
            </div>
            <!-- Alert for Validating Ajax Profile Edit Section -->
            <!-- Alerts for Member actions -->
            <div class="col-lg-3 col-md-4 alert_message" id="ajax_success_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                <div class="alert alert-success  fade show alert-dismissible" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <!-- Success Alert Content -->
                    <span class="ajax_success_alert"></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 alert_message" id="ajax_danger_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                <div class="alert alert-danger  fade show alert-dismissible" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <!-- Success Alert Content -->
                    <span class="ajax_danger_alert"></span>
                </div>
            </div>
            <!-- Alerts for Member actions -->

            <div class="col-md-3 col-lg-3 d-lg-block d-md-block w3-border-right w3-padding-large sidebar--style-1 bg-base-1 z-depth-2-top">
                <a href="#" id="recr_btn" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5" onclick="changecolor(2)" href="#recieved_tab" data-toggle="pill" title="Recieved Requests" style="color: white; background-color: #2A3F54">Recieved Requests</a>
                <a href="#" id="sentr_btn" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5" onclick="changecolor(1)" href="#sent_tab" data-toggle="pill" title="Sent Requests">Send Requests</a>
                <a href="#" id="follower_btn" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5" onclick="changecolor(3)" href="#favourite_tab" data-toggle="pill" title="My favourites">My Favourites</a>
            </div>
            <div class="tab-content col-lg-9 col-md-9 ">
                <div class="tab-pane" id="sent_tab">
                    <ul class="nav nav-tabs">
                        <li class="active" style="width: 50%"><a id="AllReq" class="btn" onclick="change(1)" href="#allRequests" data-toggle="tab" style="width: 100%"><i class="fa fa-user-plus"></i> Sent Requests</a></li>
                        <li style="width: 50%"><a class="btn" id="AllSentReq" href="#sentRequests" onclick="change(2)" data-toggle="tab"  style="width: 100%"><i class="fa fa-thumbs-up"></i> Sent Approved</a></li>
                    </ul>
                    <div class="tab-content clearfix" ><br> 
                        <div class="tab-pane active" id="allRequests">  
                            <div class="row x_title">
                                <div class="w3-pa col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="hidden" id="member_type" value="">
<!--                                    <div ng-show="finderloader" class="w3-center"><center><i class="w3-center fa fa-refresh fa-5x fa-spin"></i><p>Please Wait...</p></center></div>-->

                                    <!-----------------------------this Div is for all users profiles---------------------------------->
                                    <div class="block-wrapper" id="result">
                                        <?php
                                        $encodedkey = $this->session->userdata('PariKey_session');
                                        $key = base64_decode($encodedkey);
                                        $keyarr = explode('|', $key);
                                        $session_user_id = $keyarr[2];
                                        //print_r($sentRequests);
                                        if ($sentRequests != '500') {
                                            for ($i = 0; $i < count($sentRequests); $i++) {
//                                                $email = $sentRequests[$i][0]['user_email'];
//                                                $user_id = $sentRequests[$i][0]['user_id'];
//                                                
                                                if ($sentRequests[$i][0]['user_profile_image'] == '') {
                                                    $profileimage = 'assets/images/user.png';
                                                } else {
                                                    $profileimage = $sentRequests[$i][0]['user_profile_image'];
                                                }
                                                ?>
                                                <!-----------------------------this Div is for single user profile---------------------------------->
                                                <div class="block block--style-3 list z-depth-1-top w3-margin-bottom" id="block_1">
                                                    <div class="block-image">
                                                        <a >
                                                            <div class="listing-image" style="background-image: url(<?php echo base_url(); ?><?php echo $profileimage; ?>)"></div>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    if ($sentRequests[$i][0]['user_firstname'] != '' && $sentRequests[$i][0]['user_lastname'] != '') {
                                                        for ($j = 0; $j < strlen($sentRequests[$i][0]['user_firstname']); $j++) {
                                                            if ($j == 0) {
                                                                $firstname = $sentRequests[$i][0]['user_firstname'][0];
                                                            } else {
                                                                $firstname .= '*';
                                                            }
                                                        }
                                                        $lastname = $sentRequests[$i][0]['user_lastname'];
                                                    } else {
                                                        $firstname = 'N/A';
                                                        $lastname = 'N/A';
                                                    }
                                                    ?>
                                                    <div class="block-title-wrapper">
                                                        <h3 class="heading heading-5 strong-500 mt-1">
                                                            <a class="c-base-1"><?php echo $firstname . ' ' . $lastname; ?></a>
                                                        </h3>

                                                        <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"><?php echo $sentRequests[$i][0]['user_designation']; ?></h4>
                                                        <table class="mb-2" style="font-size: 12px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a onclick="return goto_profile()" class="c-base-1"><b><?php echo $sentRequests[$i][0]['user_profile_key']; ?></b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php
                                                                        $dateOfBirth = $sentRequests[$i][0]['user_dob'];
                                                                        if ($dateOfBirth == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            $today = date("Y-m-d");
                                                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                                            echo $diff->format('%y');
                                                                        }
                                                                        ?></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Height</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($sentRequests[$i][0]['user_height'] == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            echo $sentRequests[$i][0]['user_height'];
                                                                        }
                                                                        ?> Feet</td>
                                                                </tr>                                    
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($sentRequests[$i][0]['user_mother_tongue'] != '') {
                                                                            echo $sentRequests[$i][0]['user_mother_tongue'];
                                                                        } else {
                                                                            echo 'N/A';
                                                                        }
                                                                        ?></td>

                                                                    <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $sentRequests[$i][0]['user_marital_status']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                                                    <?php
                                                                    if ($sentRequests[$i][0]['user_country'] == '') {
                                                                        $country = 'N/A';
                                                                    } else {
                                                                        $country = $sentRequests[$i][0]['user_country'];
                                                                    }
                                                                    if ($sentRequests[$i][0]['user_state'] == '') {
                                                                        $state = 'N/A';
                                                                    } else {
                                                                        $state = $sentRequests[$i][0]['user_state'];
                                                                    }
                                                                    if ($sentRequests[$i][0]['user_city'] == '') {
                                                                        $city = 'N/A';
                                                                    } else {
                                                                        $city = $sentRequests[$i][0]['user_city'];
                                                                    }
                                                                    ?>
                                                                    <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $country . ', ' . $state . ', ' . $city; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                        $alreadySent = 0;
                                                        $receivedReq = 0;
                                                        $alreadyfollowed = 0;
                                                        $followers = 0;

                                                        //-----------check the received requests are null or not null
                                                        if ($sentRequests[$i][0]['user_received_requests'] != '') {
                                                            $receivedReq = json_decode($sentRequests[$i][0]['user_received_requests'], TRUE);
                                                        }
                                                        // Make sure user hasnt already added this item
                                                        foreach ($receivedReq as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadySent = 1;
                                                            }
                                                        }
                                                        if ($sentRequests[$i][0]['who_make_me_favourite'] != '') {
                                                            $followers = json_decode($sentRequests[$i][0]['who_make_me_favourite'], TRUE);
                                                        }
                                                        // Make sure user hasnt already added this item
                                                        foreach ($followers as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadyfollowed = 1;
                                                            }
                                                        }
                                                        ?>
                                                        <!--                            <div class="block-footer b-xs-top">-->
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-12 text-center">
                                                                <ul class="inline-links inline-links--style-3">
                                                                    <?php if ($alreadySent == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a ng-click="sendRequestToUser(<?php echo $sentRequests[$i][0]['user_id']; ?>);" title="Send Request">
                                                                                <span id="" class="w3-text-green"><i class="fa fa-user-plus "></i> Send Request</span></a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a ng-click="cancelRequestOfUser(<?php echo $sentRequests[$i][0]['user_id']; ?>);" title="Cancel Request">
                                                                                <span id="" class="w3-text-red"><i class="fa fa-user-plus w3-text-red"></i> Cancel Request</span></a>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($alreadyfollowed == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="followUserProfile(<?php echo $sentRequests[$i][0]['user_id']; ?>);" title="Follow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="unFollowUserProfile(<?php echo $sentRequests[$i][0]['user_id']; ?>);" title="UnFollow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-pink"><i class="fa fa-heart"></i> Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <!-----------------------------this Div is for single user profile---------------------------------->
                                            <div class=" w3-center w3-padding list z-depth-1-top" id="block_1">
                                                <div class="w3-padding w3-margin-top">
                                                    <p class="w3-center w3-medium w3-text-black"> No Profile Available ! </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-----------------------------this Div is for all users profiles---------------------------------->                                        
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="sentRequests"> 
                            <div class="row x_title">
                                <div class="w3-pa col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="hidden" id="member_type" value="">
                                    <!-----------------------------this Div is for all users profiles---------------------------------->
                                    <div class="block-wrapper" id="result">
                                        <?php
                                        $encodedkey = $this->session->userdata('PariKey_session');
                                        $key = base64_decode($encodedkey);
                                        $keyarr = explode('|', $key);
                                        $session_user_id = $keyarr[2];
                                        //print_r($sentApproveRequests);
                                        $email = '';
                                        if ($sentApproveRequests != '500') {
                                            for ($i = 0; $i < count($sentApproveRequests); $i++) {
                                                $email = $sentApproveRequests[$i][0]['user_email'];
                                                $user_id = $sentApproveRequests[$i][0]['user_id'];
                                                if ($sentApproveRequests[$i][0]['user_profile_image'] == '') {
                                                    $profileimage = 'assets/images/user.png';
                                                } else {
                                                    $profileimage = $sentApproveRequests[$i][0]['user_profile_image'];
                                                }
                                                ?>
                                                <!-----------------------------this Div is for single user profile---------------------------------->
                                                <div class="block block--style-3 list z-depth-1-top w3-margin-bottom" id="block_1">
                                                    <div class="block-image">
                                                        <a target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>">
                                                            <div class="listing-image" style="background-image: url(<?php echo base_url(); ?><?php echo $profileimage; ?>)"></div>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    if ($sentApproveRequests[$i][0]['user_firstname'] != '' && $sentApproveRequests[$i][0]['user_lastname'] != '') {
//                                                        for ($j = 0; $j < strlen($sentApproveRequests[$i][0]['user_firstname']); $j++) {
//                                                            if ($j == 0) {
//                                                                $firstname = $sentApproveRequests[$i][0]['user_firstname'][0];
//                                                            } else {
//                                                                $firstname .= '*';
//                                                            }
//                                                        }
                                                        $firstname = $sentApproveRequests[$i][0]['user_firstname'];
                                                        $lastname = $sentApproveRequests[$i][0]['user_lastname'];
                                                    } else {
                                                        $firstname = 'N/A';
                                                        $lastname = 'N/A';
                                                    }
                                                    ?>
                                                    <div class="block-title-wrapper">
                                                        <h3 class="heading heading-5 strong-500 mt-1">
                                                            <a class="c-base-1" target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>"><?php echo $firstname . ' ' . $lastname; ?></a>
                                                        </h3>

                                                        <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"><?php echo $sentApproveRequests[$i][0]['user_designation']; ?></h4>
                                                        <table class="mb-2" style="font-size: 12px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>" class="c-base-1"><b><?php echo $sentApproveRequests[$i][0]['user_profile_key']; ?></b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php
                                                                        $dateOfBirth = $sentApproveRequests[$i][0]['user_dob'];
                                                                        if ($dateOfBirth == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            $today = date("Y-m-d");
                                                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                                            echo $diff->format('%y');
                                                                        }
                                                                        ?></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Height</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($sentApproveRequests[$i][0]['user_height'] == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            echo $sentApproveRequests[$i][0]['user_height'];
                                                                        }
                                                                        ?> Feet</td>
                                                                </tr>                                    
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($sentApproveRequests[$i][0]['user_mother_tongue'] != '') {
                                                                            echo $sentApproveRequests[$i][0]['user_mother_tongue'];
                                                                        } else {
                                                                            echo 'N/A';
                                                                        }
                                                                        ?></td>

                                                                    <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $sentApproveRequests[$i][0]['user_marital_status']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                                                    <?php
                                                                    if ($sentApproveRequests[$i][0]['user_country'] == '') {
                                                                        $country = 'N/A';
                                                                    } else {
                                                                        $country = $sentApproveRequests[$i][0]['user_country'];
                                                                    }
                                                                    if ($sentApproveRequests[$i][0]['user_state'] == '') {
                                                                        $state = 'N/A';
                                                                    } else {
                                                                        $state = $sentApproveRequests[$i][0]['user_state'];
                                                                    }
                                                                    if ($sentApproveRequests[$i][0]['user_city'] == '') {
                                                                        $city = 'N/A';
                                                                    } else {
                                                                        $city = $sentApproveRequests[$i][0]['user_city'];
                                                                    }
                                                                    ?>
                                                                    <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $country . ', ' . $state . ', ' . $city; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                        $alreadySent = 0;
                                                        $sentReq = 0;
                                                        $alreadyfollowed = 0;
                                                        $followers = 0;


                                                        if ($sentApproveRequests[$i][0]['who_make_me_favourite'] != '') {
                                                            $followers = json_decode($sentApproveRequests[$i][0]['who_make_me_favourite'], TRUE);
                                                        }
                                                        // Make sure user hasnt already added this item
                                                        foreach ($followers as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadyfollowed = 1;
                                                            }
                                                        }
                                                        ?>
                                                        <!--                            <div class="block-footer b-xs-top">-->
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-12 text-center">
                                                                <ul class="inline-links inline-links--style-3">
                                                                    <li class="listing-hover">
                                                                        <a target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>">
                                                                            <i class="fa fa-id-card"></i>Full Profile</a>
                                                                    </li>
                                                                    <?php if ($alreadyfollowed == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="followUserProfile(<?php echo $sentApproveRequests[$i][0]['user_id']; ?>);" title="Follow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="unFollowUserProfile(<?php echo $sentApproveRequests[$i][0]['user_id']; ?>);" title="UnFollow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-pink"><i class="fa fa-heart"></i> Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <!-----------------------------this Div is for single user profile---------------------------------->
                                            <div class=" w3-center w3-padding list z-depth-1-top" id="block_1">
                                                <div class="w3-padding w3-margin-top">
                                                    <p class="w3-center w3-medium w3-text-black"> No Profile Available ! </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-----------------------------this Div is for all users profiles---------------------------------->                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="recieved_tab">
                    <ul class="nav nav-tabs">
                        <li class="active" style="width: 50%"><a id="AllReceivReq" class="btn" onclick="changeclr(1)" href="#allReceiveRequests" data-toggle="tab" style="color: white; background-color: #5E32E1;width: 100%"><i class="fa fa-user-plus"></i> Received Requests</a></li>
                        <li style="width: 50%"><a class="btn" id="ApproveReceivReq" href="#receivedRequests" onclick="changeclr(2)" data-toggle="tab" style="width: 100%"><i class="fa fa-thumbs-up"></i> Received Approved</a></li>
                    </ul>
                    <div class="tab-content clearfix" ><br> 
                        <div class="tab-pane active" id="allReceiveRequests">  
                            <div class="row x_title">
                                <div class="w3-pa col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="hidden" id="member_type" value="">
<!--                                    <div ng-show="finderloader" class="w3-center"><center><i class="w3-center fa fa-refresh fa-5x fa-spin"></i><p>Please Wait...</p></center></div>-->

                                    <!-----------------------------this Div is for all users profiles---------------------------------->
                                    <div class="block-wrapper" id="result">
                                        <?php
                                        $encodedkey = $this->session->userdata('PariKey_session');
                                        $key = base64_decode($encodedkey);
                                        $keyarr = explode('|', $key);
                                        $session_user_id = $keyarr[2];
                                        //print_r($sentRequests);
                                        if ($receivRequests != '500') {
                                            for ($i = 0; $i < count($receivRequests); $i++) {
                                                if ($receivRequests[$i][0]['user_profile_image'] == '') {
                                                    $profileimage = 'assets/images/user.png';
                                                } else {
                                                    $profileimage = $receivRequests[$i][0]['user_profile_image'];
                                                }
                                                ?>
                                                <!-----------------------------this Div is for single user profile---------------------------------->
                                                <div class="block block--style-3 list z-depth-1-top w3-margin-bottom" id="block_1">
                                                    <div class="block-image">
                                                        <a onclick="goto_profile(p.user_id)">
                                                            <div class="listing-image" style="background-image: url(<?php echo base_url(); ?><?php echo $profileimage; ?>)"></div>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    if ($receivRequests[$i][0]['user_firstname'] != '' && $receivRequests[$i][0]['user_lastname'] != '') {
                                                        for ($j = 0; $j < strlen($receivRequests[$i][0]['user_firstname']); $j++) {
                                                            if ($j == 0) {
                                                                $firstname = $receivRequests[$i][0]['user_firstname'][0];
                                                            } else {
                                                                $firstname .= '*';
                                                            }
                                                        }
                                                        $lastname = $receivRequests[$i][0]['user_lastname'];
                                                    } else {
                                                        $firstname = 'N/A';
                                                        $lastname = 'N/A';
                                                    }
                                                    ?>
                                                    <div class="block-title-wrapper">
                                                        <h3 class="heading heading-5 strong-500 mt-1">
                                                            <a class="c-base-1"><?php echo $firstname . ' ' . $lastname; ?></a>
                                                        </h3>

                                                        <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"><?php echo $receivRequests[$i][0]['user_designation']; ?></h4>
                                                        <table class="mb-2" style="font-size: 12px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a onclick="return goto_profile()" class="c-base-1"><b><?php echo $receivRequests[$i][0]['user_profile_key']; ?></b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php
                                                                        $dateOfBirth = $receivRequests[$i][0]['user_dob'];
                                                                        if ($dateOfBirth == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            $today = date("Y-m-d");
                                                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                                            echo $diff->format('%y');
                                                                        }
                                                                        ?></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Height</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($receivRequests[$i][0]['user_height'] == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            echo $receivRequests[$i][0]['user_height'];
                                                                        }
                                                                        ?> Feet</td>
                                                                </tr>                                    
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($receivRequests[$i][0]['user_mother_tongue'] != '') {
                                                                            echo $receivRequests[$i][0]['user_mother_tongue'];
                                                                        } else {
                                                                            echo 'N/A';
                                                                        }
                                                                        ?></td>

                                                                    <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $receivRequests[$i][0]['user_marital_status']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                                                    <?php
                                                                    if ($receivRequests[$i][0]['user_country'] == '') {
                                                                        $country = 'N/A';
                                                                    } else {
                                                                        $country = $receivRequests[$i][0]['user_country'];
                                                                    }
                                                                    if ($receivRequests[$i][0]['user_state'] == '') {
                                                                        $state = 'N/A';
                                                                    } else {
                                                                        $state = $receivRequests[$i][0]['user_state'];
                                                                    }
                                                                    if ($receivRequests[$i][0]['user_city'] == '') {
                                                                        $city = 'N/A';
                                                                    } else {
                                                                        $city = $receivRequests[$i][0]['user_city'];
                                                                    }
                                                                    ?>
                                                                    <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $country . ', ' . $state . ', ' . $city; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                        $alreadySent = 0;
                                                        $sentReq = 0;
                                                        $alreadyfollowed = 0;
                                                        $followers = 0;

                                                        //-----------check the received requests are null or not null
                                                        if ($receivRequests[$i][0]['user_sent_requests'] != '') {
                                                            $sentReq = json_decode($receivRequests[$i][0]['user_sent_requests'], TRUE);
                                                        }
                                                        //print_r($receivedReq);die();
                                                        // Make sure user hasnt already added this item
                                                        foreach ($sentReq as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadySent = 1;
                                                            }
                                                        }
                                                        if ($receivRequests[$i][0]['who_make_me_favourite'] != '') {
                                                            $followers = json_decode($receivRequests[$i][0]['who_make_me_favourite'], TRUE);
                                                        }
                                                        // Make sure user hasnt already added this item
                                                        foreach ($followers as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadyfollowed = 1;
                                                            }
                                                        }
                                                        ?>
                                                        <!--                            <div class="block-footer b-xs-top">-->
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-12 text-center">
                                                                <ul class="inline-links inline-links--style-3">
                                                                    <li class="listing-hover">
                                                                        <a ng-click="acceptUserConfirmRequest(<?php echo $receivRequests[$i][0]['user_id']; ?>);" title="Send Request">
                                                                            <span id="" class="w3-text-green"><i class="fa fa-user-plus "></i> Accept/Confirm Request</span></a>
                                                                    </li>
                                                                    <?php if ($alreadySent == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a ng-click="sendRequestToUser(<?php echo $receivRequests[$i][0]['user_id']; ?>);" title="Send Request">
                                                                                <span id="" class="w3-text-green"><i class="fa fa-user-plus "></i> Send Request</span></a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a ng-click="cancelRequestOfUserForReceived(<?php echo $receivRequests[$i][0]['user_id']; ?>);" title="Cancel Request">
                                                                                <span id="" class="w3-text-red"><i class="fa fa-user-plus w3-text-red"></i> Cancel Request</span></a>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($alreadyfollowed == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="followUserProfile(<?php echo $receivRequests[$i][0]['user_id']; ?>);" title="Follow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="unFollowUserProfile(<?php echo $receivRequests[$i][0]['user_id']; ?>);" title="UnFollow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-pink"><i class="fa fa-heart"></i> Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <!-----------------------------this Div is for single user profile---------------------------------->
                                            <div class=" w3-center w3-padding list z-depth-1-top" id="block_1">
                                                <div class="w3-padding w3-margin-top">
                                                    <p class="w3-center w3-medium w3-text-black"> No Profile Available ! </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-----------------------------this Div is for all users profiles---------------------------------->                                        
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="receivedRequests"> 
                            <div class="row x_title">
                                <div class="w3-pa col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="hidden" id="member_type" value="">
<!--                                    <div ng-show="finderloader" class="w3-center"><center><i class="w3-center fa fa-refresh fa-5x fa-spin"></i><p>Please Wait...</p></center></div>-->

                                    <!-----------------------------this Div is for all users profiles---------------------------------->
                                    <div class="block-wrapper" id="result">
                                        <?php
                                        $encodedkey = $this->session->userdata('PariKey_session');
                                        $key = base64_decode($encodedkey);
                                        $keyarr = explode('|', $key);
                                        $session_user_id = $keyarr[2];
                                        //print_r($recApproveRequests);
                                        $email = '';
                                        $user_id = '';
                                        if ($recApproveRequests != '500') {
                                            for ($i = 0; $i < count($recApproveRequests); $i++) {
                                                $email = $recApproveRequests[$i][0]['user_email'];
                                                $user_id = $recApproveRequests[$i][0]['user_id'];

                                                if ($recApproveRequests[$i][0]['user_profile_image'] == '') {
                                                    $profileimage = 'assets/images/user.png';
                                                } else {
                                                    $profileimage = $recApproveRequests[$i][0]['user_profile_image'];
                                                }
                                                ?>
                                                <!-----------------------------this Div is for single user profile---------------------------------->
                                                <div class="block block--style-3 list z-depth-1-top w3-margin-bottom" id="block_1">
                                                    <div class="block-image">
                                                        <a target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>">
                                                            <div class="listing-image" style="background-image: url(<?php echo base_url(); ?><?php echo $profileimage; ?>)"></div>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    if ($recApproveRequests[$i][0]['user_firstname'] != '' && $recApproveRequests[$i][0]['user_lastname'] != '') {
//                                                        for ($j = 0; $j < strlen($recApproveRequests[$i][0]['user_firstname']); $j++) {
//                                                            if ($j == 0) {
//                                                                $firstname = $recApproveRequests[$i][0]['user_firstname'][0];
//                                                            } else {
//                                                                $firstname .= '*';
//                                                            }
//                                                        }
                                                        $firstname = $recApproveRequests[$i][0]['user_firstname'];
                                                        $lastname = $recApproveRequests[$i][0]['user_lastname'];
                                                    } else {
                                                        $firstname = 'N/A';
                                                        $lastname = 'N/A';
                                                    }
                                                    ?>
                                                    <div class="block-title-wrapper">
                                                        <h3 class="heading heading-5 strong-500 mt-1">
                                                            <a class="c-base-1" target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>"><?php echo $firstname . ' ' . $lastname; ?></a>
                                                        </h3>

                                                        <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"><?php echo $recApproveRequests[$i][0]['user_designation']; ?></h4>
                                                        <table class="mb-2" style="font-size: 12px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>" class="c-base-1"><b><?php echo $recApproveRequests[$i][0]['user_profile_key']; ?></b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php
                                                                        $dateOfBirth = $recApproveRequests[$i][0]['user_dob'];
                                                                        if ($dateOfBirth == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            $today = date("Y-m-d");
                                                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                                            echo $diff->format('%y');
                                                                        }
                                                                        ?></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Height</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($recApproveRequests[$i][0]['user_height'] == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            echo $recApproveRequests[$i][0]['user_height'];
                                                                        }
                                                                        ?> Feet</td>
                                                                </tr>                                    
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($recApproveRequests[$i][0]['user_mother_tongue'] != '') {
                                                                            echo $recApproveRequests[$i][0]['user_mother_tongue'];
                                                                        } else {
                                                                            echo 'N/A';
                                                                        }
                                                                        ?></td>

                                                                    <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $recApproveRequests[$i][0]['user_marital_status']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                                                    <?php
                                                                    if ($recApproveRequests[$i][0]['user_country'] == '') {
                                                                        $country = 'N/A';
                                                                    } else {
                                                                        $country = $recApproveRequests[$i][0]['user_country'];
                                                                    }
                                                                    if ($recApproveRequests[$i][0]['user_state'] == '') {
                                                                        $state = 'N/A';
                                                                    } else {
                                                                        $state = $recApproveRequests[$i][0]['user_state'];
                                                                    }
                                                                    if ($recApproveRequests[$i][0]['user_city'] == '') {
                                                                        $city = 'N/A';
                                                                    } else {
                                                                        $city = $recApproveRequests[$i][0]['user_city'];
                                                                    }
                                                                    ?>
                                                                    <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $country . ', ' . $state . ', ' . $city; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                        $alreadySent = 0;
                                                        $sentReq = 0;
                                                        $alreadyfollowed = 0;
                                                        $followers = 0;

                                                        //-----------check the received requests are null or not null
                                                        if ($recApproveRequests[$i][0]['user_sent_requests'] != '') {
                                                            $sentReq = json_decode($recApproveRequests[$i][0]['user_sent_requests'], TRUE);
                                                        }
                                                        //print_r($receivedReq);die();
                                                        // Make sure user hasnt already added this item
                                                        foreach ($sentReq as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadySent = 1;
                                                            }
                                                        }
                                                        if ($recApproveRequests[$i][0]['who_make_me_favourite'] != '') {
                                                            $followers = json_decode($recApproveRequests[$i][0]['who_make_me_favourite'], TRUE);
                                                        }
                                                        // Make sure user hasnt already added this item
                                                        foreach ($followers as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadyfollowed = 1;
                                                            }
                                                        }
                                                        ?>
                                                        <!--                            <div class="block-footer b-xs-top">-->
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-12 text-center">
                                                                <ul class="inline-links inline-links--style-3">                                                                 
                                                                    <li class="listing-hover">
                                                                        <a ng-click="cancelRequestOfUserForReceivedApprovedRequest(<?php echo $recApproveRequests[$i][0]['user_id']; ?>);" title="Cancel Request">
                                                                            <span id="" class="w3-text-red"><i class="fa fa-user-plus w3-text-red"></i> Cancel Request</span></a>
                                                                    </li>
                                                                    <li class="listing-hover">
                                                                        <a target="_blank" href="<?php echo base_url() . 'user/full_profile/' . base64_encode('PARINAYBUDHI' . $email . 'I' . $user_id); ?>">
                                                                            <i class="fa fa-id-card"></i>Full Profile</a>
                                                                    </li>
                                                                    <?php if ($alreadyfollowed == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="followUserProfile(<?php echo $recApproveRequests[$i][0]['user_id']; ?>);" title="Follow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="unFollowUserProfile(<?php echo $recApproveRequests[$i][0]['user_id']; ?>);" title="UnFollow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-pink"><i class="fa fa-heart"></i> Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <!-----------------------------this Div is for single user profile---------------------------------->
                                            <div class=" w3-center w3-padding list z-depth-1-top" id="block_1">
                                                <div class="w3-padding w3-margin-top">
                                                    <p class="w3-center w3-medium w3-text-black"> No Profile Available ! </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-----------------------------this Div is for all users profiles---------------------------------->                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="favourite_tab">
                    <ul class="nav nav-tabs">
                        <li class="active" style="width: 50%"><a id="AllReceivReq" class="btn" onclick="changeclr(1)" href="#allReceiveRequests" data-toggle="tab" style="color: white; background-color: #5E32E1;width: 100%"><i class="fa fa-heart"></i> My Favourites</a></li>
                    </ul>
                    <div class="tab-content clearfix" ><br> 
                        <div class="tab-pane active" id="allReceiveRequests">  

                            <div class="row x_title">
                                <div class="w3-pa col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="hidden" id="member_type" value="">
        <!--                                    <div ng-show="finderloader" class="w3-center"><center><i class="w3-center fa fa-refresh fa-5x fa-spin"></i><p>Please Wait...</p></center></div>-->

                                    <!-----------------------------this Div is for all users profiles---------------------------------->
                                    <div class="block-wrapper" id="result">
                                        <?php
                                        $encodedkey = $this->session->userdata('PariKey_session');
                                        $key = base64_decode($encodedkey);
                                        $keyarr = explode('|', $key);
                                        $session_user_id = $keyarr[2];
                                        //print_r($myFollowers);
                                        if ($myFollowers != '500') {
                                            for ($i = 0; $i < count($myFollowers); $i++) {
                                                if ($myFollowers[$i][0]['user_profile_image'] == '') {
                                                    $profileimage = 'assets/images/user.png';
                                                } else {
                                                    $profileimage = $myFollowers[$i][0]['user_profile_image'];
                                                }
                                                ?>
                                                <!-----------------------------this Div is for single user profile---------------------------------->
                                                <div class="block block--style-3 list z-depth-1-top w3-margin-bottom" id="block_1">
                                                    <div class="block-image">
                                                        <a onclick="goto_profile(p.user_id)">
                                                            <div class="listing-image" style="background-image: url(<?php echo base_url(); ?><?php echo $profileimage; ?>)"></div>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    if ($myFollowers[$i][0]['user_firstname'] != '' && $myFollowers[$i][0]['user_lastname'] != '') {
                                                        for ($j = 0; $j < strlen($myFollowers[$i][0]['user_firstname']); $j++) {
                                                            if ($j == 0) {
                                                                $firstname = $myFollowers[$i][0]['user_firstname'][0];
                                                            } else {
                                                                $firstname .= '*';
                                                            }
                                                        }
                                                        $lastname = $myFollowers[$i][0]['user_lastname'];
                                                    } else {
                                                        $firstname = 'N/A';
                                                        $lastname = 'N/A';
                                                    }
                                                    ?>
                                                    <div class="block-title-wrapper">
                                                        <h3 class="heading heading-5 strong-500 mt-1">
                                                            <a class="c-base-1"><?php echo $firstname . ' ' . $lastname; ?></a>
                                                        </h3>

                                                        <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"><?php echo $myFollowers[$i][0]['user_designation']; ?></h4>
                                                        <table class="mb-2" style="font-size: 12px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                                                    <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a onclick="return goto_profile()" class="c-base-1"><b><?php echo $myFollowers[$i][0]['user_profile_key']; ?></b></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php
                                                                        $dateOfBirth = $myFollowers[$i][0]['user_dob'];
                                                                        if ($dateOfBirth == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            $today = date("Y-m-d");
                                                                            $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                                                            echo $diff->format('%y');
                                                                        }
                                                                        ?></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Height</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($myFollowers[$i][0]['user_height'] == '') {
                                                                            echo 'N/A';
                                                                        } else {
                                                                            echo $myFollowers[$i][0]['user_height'];
                                                                        }
                                                                        ?> Feet</td>
                                                                </tr>                                    
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                                        <?php
                                                                        if ($myFollowers[$i][0]['user_mother_tongue'] != '') {
                                                                            echo $myFollowers[$i][0]['user_mother_tongue'];
                                                                        } else {
                                                                            echo 'N/A';
                                                                        }
                                                                        ?></td>

                                                                    <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $myFollowers[$i][0]['user_marital_status']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                                                    <?php
                                                                    if ($myFollowers[$i][0]['user_country'] == '') {
                                                                        $country = 'N/A';
                                                                    } else {
                                                                        $country = $myFollowers[$i][0]['user_country'];
                                                                    }
                                                                    if ($myFollowers[$i][0]['user_state'] == '') {
                                                                        $state = 'N/A';
                                                                    } else {
                                                                        $state = $myFollowers[$i][0]['user_state'];
                                                                    }
                                                                    if ($myFollowers[$i][0]['user_city'] == '') {
                                                                        $city = 'N/A';
                                                                    } else {
                                                                        $city = $myFollowers[$i][0]['user_city'];
                                                                    }
                                                                    ?>
                                                                    <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $country . ', ' . $state . ', ' . $city; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                        $alreadySent = 0;
                                                        $sentReq = 0;
                                                        $alreadyfollowed = 0;
                                                        $followers = 0;


                                                        if ($myFollowers[$i][0]['who_make_me_favourite'] != '') {
                                                            $followers = json_decode($myFollowers[$i][0]['who_make_me_favourite'], TRUE);
                                                        }
                                                        // Make sure user hasnt already added this item
                                                        foreach ($followers as $item) {
                                                            //alert(session_user_id);
                                                            if ($session_user_id == $item) {
                                                                $alreadyfollowed = 1;
                                                            }
                                                        }
                                                        ?>
                                                        <!--                            <div class="block-footer b-xs-top">-->
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-12 text-center">
                                                                <ul class="inline-links inline-links--style-3">                                                                                                                            
                                                                    <?php if ($alreadyfollowed == 0) { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="followUserProfile(<?php echo $myFollowers[$i][0]['user_id']; ?>);" title="Follow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } else { ?>
                                                                        <li class="listing-hover">
                                                                            <a id="interest_a_1" ng-click="unFollowUserProfile(<?php echo $myFollowers[$i][0]['user_id']; ?>);" title="UnFollow This Profile" style="">
                                                                                <span id="interest_1" class="w3-text-pink"><i class="fa fa-heart"></i> Favourite</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <!-----------------------------this Div is for single user profile---------------------------------->
                                            <div class=" w3-center w3-padding list z-depth-1-top" id="block_1">
                                                <div class="w3-padding w3-margin-top">
                                                    <p class="w3-center w3-medium w3-text-black"> No Profile Available ! </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-----------------------------this Div is for all users profiles---------------------------------->                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>

            <!--            -->
        </div>
    </div>
</section>
<script>
    function changeclr(btn){
    if (btn == 1){
    $("#ApproveReceivReq").css("background-color", "#fff");
    $("#ApproveReceivReq").css("color", "grey");
    $("#AllReceivReq").css("color", "#ECF0F1");
    $("#AllReceivReq").css("background-color", "#5E32E1");
    }
    if (btn == 2){
    $("#AllReceivReq").css("background-color", "#fff");
    $("#AllReceivReq").css("color", "grey");
    $("#ApproveReceivReq").css("color", "#ECF0F1");
    $("#ApproveReceivReq").css("background-color", "#5E32E1");
    }
    }

    function changecolor(btn) {
    if (btn == 1) {
    change(btn);
    $("#sent_tab").addClass("active");
    $("#recieved_tab").removeClass("active");
    $("#favourite_tab").removeClass("active");
    $("#recr_btn").css("background-color", "#fff");
    $("#recr_btn").css("color", "black");
    $("#sentr_btn").css("color", "#ECF0F1");
    $("#sentr_btn").css("background-color", "#2A3F54");
    $("#follower_btn").css("color", "black");
    $("#follower_btn").css("background-color", "#fff");
    }
    if (btn == 2) {
    $("#recieved_tab").addClass("active");
    $("#sent_tab").removeClass("active");
    $("#favourite_tab").removeClass("active");
    $("#sentr_btn").css("background-color", "#fff");
    $("#sentr_btn").css("color", "black");
    $("#recr_btn").css("color", "#ECF0F1");
    $("#recr_btn").css("background-color", "#2A3F54");
    $("#follower_btn").css("color", "black");
    $("#follower_btn").css("background-color", "#fff");
    }
    if (btn == 3) {
    change(btn);
    $("#favourite_tab").addClass("active");
    $("#recieved_tab").removeClass("active");
    $("#sent_tab").removeClass("active");
    $("#sentr_btn").css("background-color", "#fff");
    $("#sentr_btn").css("color", "black");
    $("#recr_btn").css("background-color", "#fff");
    $("#recr_btn").css("color", "black");
    $("#follower_btn").css("color", "#ECF0F1");
    $("#follower_btn").css("background-color", "#2A3F54");
    }
    }

    function change(val) {
    if (val == 1) {
    $("#AllSentReq").css("background-color", "#fff");
    $("#AllSentReq").css("color", "grey");
    $("#AllReq").css("color", "#ECF0F1");
    $("#AllReq").css("background-color", "#5E32E1");
    }
    if (val == 2) {
    $("#AllReq").css("background-color", "#fff");
    $("#AllReq").css("color", "grey");
    $("#AllSentReq").css("color", "#ECF0F1");
    $("#AllSentReq").css("background-color", "#5E32E1");
    }
    }
    // Angular script to add required skills in ad product form
    // Angular script to add required skills in ad product form
</script>
<script>
    var app = angular.module("AllRequestsFollowersApp", ['ngSanitize', 'angularUtils.directives.dirPagination']);
    app.controller("AllRequestsFollowersAppController", function ($scope, $http, $window) {

    $scope.acceptUserConfirmRequest = function(user_id){
    $.confirm({
    title: '<h4 class="w3-text-green">Please confirm the action!</h4><span class="w3-medium">Do you really want to Accept Request?</span>',
            content: '',
            type: 'red',
            buttons: {
            confirm: function () {
            $http({
            method: 'get',
                    url: BASE_URL + "user/search/profilesearch_byid/acceptUserConfirmRequest?profile_user_id=" + user_id
            }).then(function successCallback(response) {
            //alert(response.data);
            console.log(response.data);
            //return false;
            switch (response.data) {
            case '200':
                    $('#ajax_success_alert').show();
            $('.ajax_success_alert').html('Request Approved Successfully.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '500':
                    $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html('Request Not Approved Successfully.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            }
            setTimeout(function() {
            window.location.reload();
            }, 1500);
            });
            },
                    cancel: function () {
                    }
            }
    });
    };
    //-----------------fun for cancel the user request at user received request approved---------------------------//
    $scope.cancelRequestOfUserForReceivedApprovedRequest = function(user_id){
    $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do you really want to Cancel Request?</span>',
            content: '',
            type: 'red',
            buttons: {
            confirm: function () {
            $http({
            method: 'get',
                    url: BASE_URL + "user/search/profilesearch_byid/cancelRequestOfUserForReceivedApprovedRequest?profile_user_id=" + user_id
            }).then(function successCallback(response) {
            //alert(response.data);
            switch (response.data) {
            case '200':
                    $('#ajax_success_alert').show();
            $('.ajax_success_alert').html('Request Cancellation Successful.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '500':
                    $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html('Request Cancellation Failed.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            }
            setTimeout(function() {
            window.location.reload();
            }, 1500);
            });
            },
                    cancel: function () {
                    }
            }
    });
    };
    //-------------------------fun for send the user request--------------------//
    $scope.sendRequestToUser = function (user_id) {
    $.confirm({
    title: '<h4 class="w3-text-green">Please confirm the action!</h4><span class="w3-medium">Do you really want to Send Request?</span>',
            content: '',
            type: 'red',
            buttons: {
            confirm: function () {
            $http({
            method: 'get',
                    url: BASE_URL + "user/search/profilesearch_byid/sendRequestToUser?profile_user_id=" + user_id
            }).then(function successCallback(response) {
            //alert(response.data);
            switch (response.data) {
            case '200':
                    $('#ajax_success_alert').show();
            $('.ajax_success_alert').html('Request Sent Successfully.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '500':
                    $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html('Request Not Sent Successfully.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '700':
                    $('#ajax_validation_alert').show();
            $('.ajax_validation_alert').html('No Request Tokens Are Available.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '900':
                    $('#ajax_validation_alert').show();
            $('.ajax_validation_alert').html('Request Is Already Sent You By The Receiver.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            }
            setTimeout(function() {
            window.location.reload();
            }, 1500);
            });
            },
                    cancel: function () {
                    }
            }
    });
    };
    //------------fun for cancel the request of user-------------------------//
    $scope.cancelRequestOfUser = function (user_id) {
    $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do you really want to Cancel Request?</span>',
            content: '',
            type: 'red',
            buttons: {
            confirm: function () {
            $http({
            method: 'get',
                    url: BASE_URL + "user/search/profilesearch_byid/cancelRequestOfUser?profile_user_id=" + user_id
            }).then(function successCallback(response) {
            //alert(response.data);
            switch (response.data) {
            case '200':
                    $('#ajax_success_alert').show();
            $('.ajax_success_alert').html('Request Cancellation Successful.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '500':
                    $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html('Request Cancellation Failed.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            }
            setTimeout(function() {
            window.location.reload();
            }, 1500);
            });
            },
                    cancel: function () {
                    }
            }
    });
    };
    //----------------cancel the request from received requests------------------------//
    $scope.cancelRequestOfUserForReceived = function(user_id){
    $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do you really want to Cancel Request?</span>',
            content: '',
            type: 'red',
            buttons: {
            confirm: function () {
            $http({
            method: 'get',
                    url: BASE_URL + "user/search/profilesearch_byid/cancelRequestOfUserForReceived?profile_user_id=" + user_id
            }).then(function successCallback(response) {
            //alert(response.data);
            switch (response.data) {
            case '200':
                    $('#ajax_success_alert').show();
            $('.ajax_success_alert').html('Request Cancellation Successful.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            case '500':
                    $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html('Request Cancellation Failed.');
            setTimeout(function () {
            $('.alert_message').fadeOut('fast');
            }, 5000);
            break;
            }
            setTimeout(function() {
            window.location.reload();
            }, 1500);
            });
            },
                    cancel: function () {
                    }
            }
    });
    };
    //----------------------------------fun for follow the user profile------------------------------//
    $scope.followUserProfile = function (user_id) {
    $http({
    method: 'get',
            url: BASE_URL + "user/search/profilesearch_byid/followUserProfile?profile_user_id=" + user_id
    }).then(function successCallback(response) {
    //alert(response.data);
    switch (response.data) {
    case '200':
            $('#ajax_success_alert').show();
    $('.ajax_success_alert').html('You Have Successfully Followed This User.');
    setTimeout(function () {
    $('.alert_message').fadeOut('fast');
    }, 3000);
    break;
    case '500':
            $('#ajax_danger_alert').show();
    $('.ajax_danger_alert').html('Following Request Failed.');
    setTimeout(function () {
    $('.alert_message').fadeOut('fast');
    }, 5000);
    break;
    }
    setTimeout(function() {
    window.location.reload();
    }, 1500);
    });
    };
    //-------------------------------------------------------------------------------------//
    //-------------------------------------------------------------------------------------//
    $scope.unFollowUserProfile = function (user_id) {
    $http({
    method: 'get',
            url: BASE_URL + "user/search/profilesearch_byid/unFollowUserProfile?profile_user_id=" + user_id
    }).then(function successCallback(response) {
    //alert(response.data);
    switch (response.data) {
    case '200':
            $('#ajax_success_alert').show();
    $('.ajax_success_alert').html('UnFollow Request Successful.');
    setTimeout(function () {
    $('.alert_message').fadeOut('fast');
    }, 5000);
    break;
    case '500':
            $('#ajax_danger_alert').show();
    $('.ajax_danger_alert').html('UnFollow Request Failed.');
    setTimeout(function () {
    $('.alert_message').fadeOut('fast');
    }, 5000);
    break;
    }
    setTimeout(function() {
    window.location.reload();
    }, 1500);
    });
    };
    });
</script>