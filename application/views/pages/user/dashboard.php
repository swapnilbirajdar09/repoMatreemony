<section class="slice sct-color-1">
    <div class="container" ng-app="recommandedApp" ng-controller="recommandedAppController">
        <div class="row">

            <div class="col-lg-5 size-sm" style="display: block;" >
                <div class="sidebar  ">
                    <div class="">

                        <div class="card " style="background:#fff;" >
                            <div class="card-title b-xs-bottom" style="background:#eff2f4;">
                                <h3 class="heading heading-sm text-uppercase">Account information
                                </h3> 
                                <b><a href="<?php echo base_url(); ?>user/user_profile#profile_load" class="w3-right btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1"><i class="fa fa-edit w3-medium"></i> Edit Profile</a></b>

                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="" class="text-uppercase"><b>Membership Registration Date :</b> </label>
                                            <?php echo date('d-M-Y',strtotime($userDetails[0]['user_reg_date'])); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="" class="text-uppercase"><b>Membership Expiry Date :</b></label>

                                            <?php echo date('d-M-Y',strtotime($userDetails[0]['user_expiry_date'])); ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="" class="text-uppercase"><b>Membership Package :</b></label>
                                            <?php echo strtoupper($userDetails[0]['user_package']); ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="" class="text-uppercase"><b>Incoming Request :</b></label>
                                            <?php
                                            echo count(json_decode($userDetails[0]['user_received_requests']));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group has-feedback">
                                            <label for="" class="text-uppercase"><b>Remaining Request :</b></label>
                                            <?php echo $userDetails[0]['user_remaining_requests']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <b><a href="<?php echo base_url(); ?>user/user_profile#changePasswordDiv" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1"><i class="fa fa-key w3-medium"></i> Change Password</a></b>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 size-sm-btn mb-4" style="display: none;">
                <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" onclick="adv_search()">Advanced Search</button>
            </div>            
            <div class="col-lg-7">
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
                <h3 class="w3-center" style="background:#eff2f4;"> Recommended Profile </h3>
                <div class="block-wrapper" id="result">

                    <?php
                    //print_r($userprofile);die(); 
//                    foreach ($userprofile as $value) {
                    ?>
                    <!-- for each loop -->
                    <?php
                    $encodedkey = $this->session->userdata('PariKey_session');
                    $key = base64_decode($encodedkey);
                    $keyarr = explode('|', $key);
                    $session_user_id = $keyarr[2];
                    //print_r($userprofile);die();
                    if ($userprofile != '500' && $userprofile !='') {
                        foreach ($userprofile as $key) {
                            if($key['user_profile_image'] == ''){
                                $profileimage = 'assets/images/user.png';
                            }else{
                                $profileimage = $key['user_profile_image'];
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
                                //echo $key['user_firstname'][0];
                                if ($key['user_firstname'] != '' && $key['user_lastname'] != '') {
                                    for ($j = 0; $j < strlen($key['user_firstname']); $j++) {
                                        if ($j == 0) {
                                            $firstname = $key['user_firstname'][0];
                                        } else {
                                            $firstname .= '*';
                                        }
                                    }
                                    $lastname = $key['user_lastname'];
                                } else {
                                    $firstname = 'N/A';
                                    $lastname = 'N/A';
                                }
                                ?>
                                <div class="block-title-wrapper">
                                    <h3 class="heading heading-5 strong-500 mt-1">
                                        <a class="c-base-1"><?php echo $firstname . ' ' . $lastname; ?></a>
                                    </h3>

                                    <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"><?php echo $key['user_designation']; ?></h4>
                                    <table class="mb-2" style="font-size: 12px;">
                                        <tbody>
                                            <tr>
                                                <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                                <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a onclick="return goto_profile()" class="c-base-1"><b><?php echo $key['user_profile_key']; ?></b></a></td>
                                            </tr>
                                            <tr>
                                                <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                                <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php
                                                    $dateOfBirth = $key['user_dob'];
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
                                                    if ($key['user_height'] == '') {
                                                        echo 'N/A';
                                                    } else {
                                                        echo $key['user_height'];
                                                    }
                                                    ?> Feet</td>
                                            </tr>                                    
                                            <tr>
                                                <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                                <td width="120" height="30" style="padding-left: 3px;" class="font-dark">
                                                    <?php
                                                    if ($key['user_mother_tongue'] != '') {
                                                        echo $key['user_mother_tongue'];
                                                    } else {
                                                        echo 'N/A';
                                                    }
                                                    ?></td>

                                                <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                                <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><?php echo $key['user_marital_status']; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                                <?php
                                                if ($key['user_country'] == '') {
                                                    $country = 'N/A';
                                                } else {
                                                    $country = $key['user_country'];
                                                }
                                                if ($key['user_state'] == '') {
                                                    $state = 'N/A';
                                                } else {
                                                    $state = $key['user_state'];
                                                }
                                                if ($key['user_city'] == '') {
                                                    $city = 'N/A';
                                                } else {
                                                    $city = $key['user_city'];
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
                                    if ($key['user_received_requests'] != '') {
                                        $receivedReq = json_decode($key['user_received_requests'], TRUE);
                                    }
                                    // Make sure user hasnt already added this item
                                    if ($receivedReq != '' && $receivedReq != []) {
                                        foreach ($receivedReq as $item) {
                                            //alert(session_user_id);
                                            if ($session_user_id == $item) {
                                                $alreadySent = 1;
                                            }
                                        }
                                    }
                                    if ($key['who_make_me_favourite'] != '') {
                                        $followers = json_decode($key['who_make_me_favourite'], TRUE);
                                    }
                                    // Make sure user hasnt already added this item
                                    if ($followers != '' && $followers != []) {
                                        foreach ($followers as $item) {
                                            //alert(session_user_id);
                                            if ($session_user_id == $item) {
                                                $alreadyfollowed = 1;
                                            }
                                        }
                                    }
                                    ?>
                                    <!--                            <div class="block-footer b-xs-top">-->
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 text-center">
                                            <ul class="inline-links inline-links--style-3">
                                                <?php if ($alreadySent == 0) { ?>
                                                    <li class="listing-hover">
                                                        <a ng-click="sendRequestToUser(<?php echo $key['user_id']; ?>);" title="Send Request">
                                                            <span id="" class="w3-text-green"><i class="fa fa-user-plus "></i> Send Request</span></a>
                                                    </li>
                                                <?php } else { ?>
                                                    <li class="listing-hover">
                                                        <a ng-click="cancelRequestOfUser(<?php echo $key['user_id']; ?>);" title="Cancel Request">
                                                            <span id="" class="w3-text-red"><i class="fa fa-user-plus w3-text-red"></i> Cancel Request</span></a>
                                                    </li>
                                                <?php } ?>
                                                <?php if ($alreadyfollowed == 0) { ?>
                                                    <li class="listing-hover">
                                                        <a id="interest_a_1" ng-click="followUserProfile(<?php echo $key['user_id']; ?>);" title="Follow This Profile" style="">
                                                            <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                        </a>
                                                    </li>
                                                <?php } else { ?>
                                                    <li class="listing-hover">
                                                        <a id="interest_a_1" ng-click="unFollowUserProfile(<?php echo $key['user_id']; ?>);" title="UnFollow This Profile" style="">
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
                                <p class="w3-center w3-medium w3-text-black"> No Match Found..! </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- for each div completed -->

            </div>
        </div>
    </div>
</div>
</section>
<script>
    var app = angular.module("recommandedApp", ['ngSanitize', 'angularUtils.directives.dirPagination']);
    app.controller("recommandedAppController", function ($scope, $http, $window) {

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
            console.log(response.data);
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
            $('.ajax_validation_alert').html('No Request Tockens Are Available.');
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
            setTimeout(function () {
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
            console.log(response.data);
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
            setTimeout(function () {
            window.location.reload();
            }, 1500);
            });
            },
                    cancel: function () {
                    }
            }
    });
    };
    $scope.unFollowUserProfile = function (user_id) {
    $http({
    method: 'get',
            url: BASE_URL + "user/search/profilesearch_byid/unFollowUserProfile?profile_user_id=" + user_id
    }).then(function successCallback(response) {
    console.log(response.data);
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
    //----------------------------------fun for follow the user profile------------------------------//
    $scope.followUserProfile = function (user_id) {
    $http({
    method: 'get',
            url: BASE_URL + "user/search/profilesearch_byid/followUserProfile?profile_user_id=" + user_id
    }).then(function successCallback(response) {
    console.log(response.data);
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
    });
</script>