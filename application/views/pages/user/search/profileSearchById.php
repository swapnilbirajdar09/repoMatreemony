<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0">Active Profiles</h2>
            </div>
        </div>
    </div>
</section>
<section class="slice sct-color-1">
    <div class="container">
        <div class="row" ng-app="searchProfileByIdApp" ng-controller="searchProfileByIdAppController">

            <!--success div-->
            <div class="col-lg-3 col-md-4" id="ajax_success_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                <div class="alert alert-success ajax_success_alert alert-dismissible fade show" role="alert">
                    <!-- Success Alert Content -->
                    {{message}}
                </div>
            </div>
            <!--success div-->
            <!--error div-->
            <div class="col-lg-3 col-md-4" id="ajax_danger_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                <div class="alert alert-danger ajax_danger_alert alert-dismissible fade show" role="alert">
                    <!-- Success Alert Content -->
                    {{message}}
                </div>
            </div>
            <!--error div-->

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="">
                        <div class=" w3-card-2">
                            <div class="card-title b-xs-bottom">
                                <h3 class="heading heading-sm text-uppercase">Search By Profile ID</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-default" id="filter_form" name="filter_form" data-toggle="validator" role="form"> 
                                    <!--div for profile id field-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium w3-text-black">Profile Id</label>
                                                <input type="text" class="w3-input" name="filter_member_id" ng-model="filter_member_id" id="filter_member_id" value="" placeholder="Enter Profile Id">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div for profile id field-->
                                    <button type="button" id="searchBtn" ng-click="searchByProfile_id()" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-8">
                <input type="hidden" id="member_type" value="">
                <div ng-show="finderloader" class="w3-center"><center><i class="w3-center fa fa-refresh fa-5x fa-spin"></i><p>Please Wait...</p></center></div>

                <!-----------------------------this Div is for all users profiles---------------------------------->
                <div class="block-wrapper" id="result">
                    <!-----------------------------this Div is for single user profile---------------------------------->
                    <div class="block block--style-3 list z-depth-1-top" ng-if="profiles != 500" id="block_1" ng-repeat="p in profiles">
                        <div class="block-image">
                            <a onclick="goto_profile(p.user_id)">
                                <div class="listing-image" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1.jpg)"></div>
                            </a>
                        </div>
                        <div class="block-title-wrapper">
                            <h3 class="heading heading-5 strong-500 mt-1">
                                <a onclick="return goto_profile(p.user_id)" class="c-base-1">{{p.user_fullname}}</a>
                            </h3>
                            <h4 class="heading heading-xs c-gray-light text-uppercase strong-400">{{p.user_designation}}</h4>
                            <table class="mb-2" style="font-size: 12px;">
                                <tbody>
                                    <tr>
                                        <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                        <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a onclick="return goto_profile(1)" class="c-base-1"><b>#000{{p.user_profile_id}}</b></a></td>
                                    </tr>
                                    <tr>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Age</b></td>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark">{{p.age}}</td>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Height</b></td>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark">{{p.user_height}} Feet</td>
                                    </tr>                                    
                                    <tr>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Mother Tongue</b></td>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark">{{p.user_mother_tongue}}</td>
                                        <td width="120" height="30" style="padding-left: 3px;"><b>Marital Status</b></td>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark">{{p.user_marital_status}}</td>
                                    </tr>
                                    <tr>
                                        <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Location</b></td>
                                        <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark">Nidwalden, Switzerland</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--                            <div class="block-footer b-xs-top">-->
                            <div class="row align-items-center">
                                <div class="col-sm-12 text-center">
                                    <ul class="inline-links inline-links--style-3">
                                        <li class="listing-hover" ng-if="p.alreadySent == '0'">
                                            <a ng-click="sendRequestToUser(p.user_id);">
                                                <i class="fa fa-user-plus w3-text-green"></i>Send Request</a>
                                        </li>
                                        <li class="listing-hover" ng-if="p.alreadySent != '0'">
                                            <a>
                                                <i class="fa fa-user-plus w3-text-black"></i> Already Sent</a>
                                        </li>
                                        <li class="listing-hover">
                                            <a onclick="return goto_profile(p.user_id)">
                                                <i class="fa fa-id-card"></i>Full Profile</a>
                                        </li>
                                        <li class="listing-hover">
                                            <a id="interest_a_1" onclick="confirm_interest(p.user_id)" style="">
                                                <span id="interest_1" class=""><i class="fa fa-heart"></i> Add To Favourite</span>
                                            </a>
                                        </li>               
                                    </ul>
                                </div>
                            </div>
                            <!--                            </div>-->
                        </div>

                    </div>


                    <!-----------------------------this Div is for single user profile---------------------------------->
                    <div class=" w3-center w3-padding list z-depth-1-top" ng-if="profiles == 500" id="block_1">
                        <div class="w3-padding w3-margin-top">
                            <p class="w3-center w3-medium w3-text-black"> No Match Found..! </p>
                        </div>
                    </div>

                </div>
                <!-----------------------------this Div is for all users profiles---------------------------------->
                <div id="pagination" style="float: right;">
                    <!-- Loads Ajax Pagination Links -->
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    /* xs */
    .size-sm {
        display: none;
    }
    .size-sm-btn {
        display: block;
    }
    /* sm */
    @media (min-width: 768px) {
        .size-sm {
            display: none;
        }
        .size-sm-btn {
            display: block;
        }
    }
    /* md */
    @media (min-width: 992px) {
        .size-sm {
            display: block;
        }
        .size-sm-btn {
            display: none;
        }
    }
    /* lg */
    @media (min-width: 1200px) {
        .size-sm {
            display: block;
        }
        .size-sm-btn {
            display: none;
        }
    }
</style>
<!--<script src="<?php echo base_url(); ?>assets/js/module/user/search/profileSearchById.js">-->
<script>
// Angular script to add required skills in ad product form
    var app = angular.module("searchProfileByIdApp", ['ngSanitize']);
    app.controller("searchProfileByIdAppController", function ($scope, $http, $window) {
//------------------------------------------------------------------------------------------------------//
        $scope.profiles = [];
<?php
$encodedkey = $this->session->userdata('PariKey_session');
$key = base64_decode($encodedkey);
$keyarr = explode('|', $key);
$session_user_id = $keyarr[2];
?>
        var session_user_id = <?php echo $session_user_id; ?>
// ------------get User Profile Details controller--------------
        $scope.searchByProfile_id = function () {
            $scope.finderloader = true;
            $http({
                method: 'get',
                url: BASE_URL + 'user/search/profilesearch_byid/searchByProfile_id?filter_member_id=' + $scope.filter_member_id
            }).then(function successCallback(response) {
                // Assign response to skills object
                var data = response.data;
                //alert(data);
                $scope.profiles = [];
                var i, user_photos, receivedReq, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
                console.log(data);
                $scope.finderloader = false;
                if (data != 500) {
                    for (i = 0; i < data.length; i++) {
                        birthday = new Date(data[i].user_dob);
                        today = new Date();
                        age = ((today - birthday) / (31557600000));
                        totage = Math.floor(age);
                        if (isNaN(totage)) {
                            newAge = 'N/A';
                        } else {
                            newAge = totage;
                        }
                        if (data[i].user_photos != '') {
                            user_photos = JSON.parse(data[i].user_photos);
                        }
                        if (data[i].user_fullname != '') {
                            user_fullname = data[i].user_fullname;
                        } else {
                            user_fullname = 'N/A';
                        }
                        if (data[i].user_designation != '') {
                            user_designation = data[i].user_designation;
                        } else {
                            user_designation = 'N/A';
                        }
                        if (data[i].user_mother_tongue != '') {
                            user_mother_tongue = data[i].user_mother_tongue;
                        } else {
                            user_mother_tongue = 'N/A';
                        }
                        if (data[i].user_marital_status != '') {
                            user_marital_status = data[i].user_marital_status;
                        } else {
                            user_marital_status = 'N/A';
                        }
                        $scope.profiles.push({'user_profile_id': data[i].user_profile_id,
                            'user_id': data[i].user_id,
                            'user_fullname': user_fullname,
                            'user_gender': data[i].user_gender,
                            'user_caste': data[i].user_caste,
                            'user_email': data[i].user_email,
                            'user_profile_image': data[i].user_profile_image,
                            'user_height': data[i].user_height,
                            'user_weight': data[i].user_weight,
                            'user_mother_tongue': user_mother_tongue,
                            'user_designation': user_designation,
                            'user_marital_status': user_marital_status,
                            'user_country': data[i].user_country,
                            'user_state': data[i].user_state,
                            'user_city': data[i].user_city,
                            'age': newAge,
                            'user_photos': user_photos
                        });
                    }
                } else {
                    $scope.profiles = 500;
                }
            });
        };
        // ------------get User Details controller--------------

        $http.get(BASE_URL + "user/search/profilesearch_byid/getAllUserProfiles").then(function (response) {
            var data = response.data;
            //alert(data);
            var i, user_photos, alreadySent, receivedReq, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
            console.log(data);
            if (data != 500) {
                for (i = 0; i < data.length; i++) {
                    alreadySent = 0;
                    receivedReq = 0;
                    //-----------check the received requests are null or not null
                    if (data[i].user_received_requests != '') {
                        receivedReq = JSON.parse(data[i].user_received_requests);
                    }
                    // Make sure user hasnt already added this item
                    angular.forEach(receivedReq, function (item) {
                        //alert(session_user_id);
                        if (session_user_id == item) {
                            alreadySent = 1;
                        }
                    });
                    //console.log(data[i].user_dob);
                    birthday = new Date(data[i].user_dob);
                    today = new Date();
                    age = ((today - birthday) / (31557600000));
                    totage = Math.floor(age);
                    if (isNaN(totage)) {
                        newAge = 'N/A';
                    } else {
                        newAge = totage;
                    }
                    if (data[i].user_photos != '') {
                        user_photos = JSON.parse(data[i].user_photos);
                    }
                    if (data[i].user_fullname != '') {
                        user_fullname = data[i].user_fullname;
                    } else {
                        user_fullname = 'N/A';
                    }
                    if (data[i].user_designation != '') {
                        user_designation = data[i].user_designation;
                    } else {
                        user_designation = 'N/A';
                    }
                    if (data[i].user_mother_tongue != '') {
                        user_mother_tongue = data[i].user_mother_tongue;
                    } else {
                        user_mother_tongue = 'N/A';
                    }
                    if (data[i].user_marital_status != '') {
                        user_marital_status = data[i].user_marital_status;
                    } else {
                        user_marital_status = 'N/A';
                    }
                    $scope.profiles.push({'user_profile_id': data[i].user_profile_id,
                        'user_id': data[i].user_id,
                        'user_fullname': user_fullname,
                        'user_gender': data[i].user_gender,
                        'user_caste': data[i].user_caste,
                        'user_email': data[i].user_email,
                        'user_profile_image': data[i].user_profile_image,
                        'user_height': data[i].user_height,
                        'user_weight': data[i].user_weight,
                        'user_mother_tongue': user_mother_tongue,
                        'user_designation': user_designation,
                        'user_marital_status': user_marital_status,
                        'user_country': data[i].user_country,
                        'user_state': data[i].user_state,
                        'user_city': data[i].user_city,
                        'age': newAge,
                        'user_photos': user_photos,
                        'alreadySent': alreadySent
                    });
                }
            } else {
                $scope.profiles = 500;
            }
            //console.log($scope.po);
            //$scope.poData = $scope.po;
        });
        $scope.sendRequestToUser = function (user_id) {
            //alert(user_profile_id);
            $http({
                method: 'get',
                url: BASE_URL + 'user/search/profilesearch_byid/sendRequestToUser?profile_user_id=' + user_id
            }).then(function successCallback(response) {
                //alert(response.data);
                console.log(response.data);
                $('#ajax_success_alert').css('display', 'block');

                if (response.data == '200') {
                    $scope.message = 'Request Sent Successfully.';
                }
                if (response.data == '700') {
                    $scope.message = 'No Requests Tockens Are Available.';

                }
                if (response.data == '500') {
                    $scope.message = 'Request Not Sent Successfully.';
                }
            });
        };

    });
</script>
