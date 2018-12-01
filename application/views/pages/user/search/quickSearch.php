<title>Quick Search - Buddhist Parinay</title>

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
        <div class="row" ng-app="quickSearchProfileApp" ng-controller="quickSearchProfileController">
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

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="">
                        <div class="w3-card-2">
                            <div class="card-title b-xs-bottom">
                                <h3 class="heading heading-sm text-uppercase">Quick Search</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-default" id="quickSearchFilter_form" name="quickSearchFilter_form" data-toggle="validator" role="form">                          
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium" >Age From</label>
                                                <input type="number" class="w3-input" min="0" name="filter_aged_from" id="filter_aged_from" value="">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">To</label>
                                                <input type="number" class="w3-input" min="0" name="filter_aged_to" id="filter_aged_to" value="">
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Religion</label>
                                                <select name="religion" id="religion" class="w3-input selectpicker s_religion" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" >
                                                    <option value="">Choose one</option>
                                                    <option value="Judaism" >Judaism</option>
                                                    <option value="Cristianity" >Cristianity</option>
                                                    <option value="Hinduism" >Hinduism</option>
                                                    <option value="Buddhism" >Buddhism</option>
                                                    <option value="Atheism" >Atheism</option>
                                                    <option value="Islam" >Islam</option>
                                                    <option value="Sikhism" >Sikhism</option>
                                                    <option value="Jain" >Jain</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>                                                                                                                       
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Mother Tongue</label>
                                                <select name="language" id="language" class="w3-input selectpicker" data-placeholder="Choose a language" tabindex="2" data-hide-disabled="true" >
                                                    <option value="">Choose one</option>
                                                    <option value="Marathi" >Marathi</option>
                                                    <option value="Bengali" >Bengali</option>
                                                    <option value="German" >German</option>
                                                    <option value="English" >English</option>
                                                    <option value="Hindi" >Hindi</option>
                                                    <option value="Urdu" >Urdu</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>                                                                                       
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" ng-click="getAllUserProfilesByQuickSearch();">Search</button>
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
                    <div ng-if="profiles != 500">
                        <!-----------------------------this Div is for single user profile---------------------------------->
                        <div class="block block--style-3 list z-depth-1-top" id="block_1" dir-paginate="p in profiles|itemsPerPage:5">
                            <div class="block-image">
                                <a onclick="goto_profile(p.user_id)">
                                    <div class="listing-image" style="background-image: url(<?php echo base_url(); ?>{{p.user_profile_image}})"></div>
                                </a>
                            </div>
                            <div class="block-title-wrapper">
                                <h3 class="heading heading-5 strong-500 mt-1">
                                    <a onclick="return goto_profile(p.user_id)" class="c-base-1">{{p.firstName + ' ' + p.lastName}}</a>
                                </h3>
                                <h4 class="heading heading-xs c-gray-light text-uppercase strong-400">{{p.user_designation}}</h4>
                                <table class="mb-2" style="font-size: 12px;">
                                    <tbody>
                                        <tr>
                                            <td height="30" style="padding-left: 3px;" class="font-dark"><b>Member ID</b></td>
                                            <td height="30" style="padding-left: 3px;" class="font-dark" colspan="3"><a onclick="return goto_profile()" class="c-base-1"><b>{{p.user_profile_key}}</b></a></td>
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
                                            <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark">{{p.user_location}}</td>
                                        </tr>
                                        <tr>
                                            <td width="120" height="30" style="padding-left: 3px;" class="font-dark"><b>Education</b></td>
                                            <td colspan="3" height="30" style="padding-left: 3px;" class="font-dark">{{p.education}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--                            <div class="block-footer b-xs-top">-->
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 text-center">
                                            <ul class="inline-links inline-links--style-3">
                                                <li class="listing-hover" ng-if="p.alreadySent == '0'">
                                                    <a ng-click="sendRequestToUser(p.user_id);" title="Send Request">
                                                        <span id="" class="w3-text-green"><i class="fa fa-user-plus "></i> Send Request</span></a>
                                                    </li>
                                                    <li class="listing-hover" ng-if="p.alreadySent != '0'">
                                                        <a ng-click="cancelRequestOfUser(p.user_id);" title="Cancel Request">
                                                            <span id="" class="w3-text-red"><i class="fa fa-user-plus w3-text-red"></i> Cancel Request</span></a>
                                                        </li>
                                            <!--                                        <li class="listing-hover">
                                                                                        <a onclick="return goto_profile(p.user_id)">
                                                                                            <i class="fa fa-id-card"></i>Full Profile</a>
                                                                                        </li>-->
                                                                                        <li class="listing-hover" ng-if="p.alreadyfollowed == '0'">
                                                                                            <a id="interest_a_1" ng-click="followUserProfile(p.user_id);" title="Follow This Profile" style="">
                                                                                                <span id="interest_1" class="w3-text-blue"><i class="fa fa-heart"></i> Add To Favourite</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="listing-hover" ng-if="p.alreadyfollowed != '0'">
                                                                                            <a id="interest_a_1" ng-click="unFollowUserProfile(p.user_id);" title="UnFollow This Profile" style="">
                                                                                                <span id="interest_1" class="w3-text-pink"><i class="fa fa-heart"></i> Favourite</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <!--                            </div>-->
                                                                        </div>

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
                                                            <div id="pagination" class="" style="float: right;">
                                                                <!-- Loads Ajax Pagination Links -->
                                                                <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" style="padding: 5px;"></dir-pagination-controls>
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
                                        <script>
// Angular script to add required skills in ad product form
var app = angular.module("quickSearchProfileApp", ['ngSanitize', 'angularUtils.directives.dirPagination']);
app.controller("quickSearchProfileController", function ($scope, $http, $window) {
//------------------------------------------------------------------------------------------------------//
$scope.profiles = [];

<?php
$encodedkey = $this->session->userdata('PariKey_session');
$key = base64_decode($encodedkey);
$keyarr = explode('|', $key);
$session_user_id = $keyarr[2];
?>
var myFollowers;
var session_user_id = <?php echo $session_user_id; ?>;

$scope.reload = function () {
            //alert($scope.myFollowers);
            //$scope.getUserFollows();
            $http.get(BASE_URL + "user/search/profilesearch_byid/getAllUserProfiles").then(function (response) {
                var data = response.data;
                //alert(data);
                $scope.profiles = [];
                var i, j, user_photos, profile_image, education, alreadyfollowed, followers, firstname, user_location, alreadySent, receivedReq, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
                if (data != 500) {
                    for (i = 0; i < data.length; i++) {
                        alreadySent = 0;
                        receivedReq = 0;
                        alreadyfollowed = 0;
                        followers = 0;

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

                        if (data[i].who_make_me_favourite != '') {
                            followers = JSON.parse(data[i].who_make_me_favourite);
                        }
                        // Make sure user has not already added this item
                        //alert(followers);
                        angular.forEach(followers, function (key) {
                            if (session_user_id == key) {
                                //alert('found');
                                alreadyfollowed = 1;
                            }
                        });

                        //alert(alreadyfollowed);
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

                        if (data[i].user_country != '') {
                            user_location = data[i].user_country + ', ' + data[i].user_state + ', ' + data[i].user_city + '.'
                        } else {
                            user_location = 'N/A';
                        }
                        //console.log(data[i].user_firstname);
                        for (j = 0; j < data[i].user_firstname.length; j++) {
                            if (j == 0) {
                                firstname = data[i].user_firstname[0];
                            } else {
                                firstname += '*';
                            }
                        }
                        //alert(firstname);
                        if (data[i].user_profile_image != '') {
                            profile_image = data[i].user_profile_image;
                        } else {
                            profile_image = 'assets/images/user.png';
                        }
                        if (data[i].user_educational_field != '') {
                            education = data[i].user_educational_field;
                        } else {
                            education = 'N/A';
                        }
                        $scope.profiles.push({'user_profile_key': data[i].user_profile_key,
                            'user_profile_id': data[i].user_profile_id,
                            'user_id': data[i].user_id,
                            'user_fullname': user_fullname,
                            'user_gender': data[i].user_gender,
                            'user_caste': data[i].user_caste,
                            'user_email': data[i].user_email,
                            'user_profile_image': profile_image,
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
                            'alreadySent': alreadySent,
                            'user_location': user_location,
                            'firstName': firstname,
                            'lastName': data[i].user_lastname,
                            'alreadyfollowed': alreadyfollowed,
                            'education': education
                        });
                        //console.log($scope.profiles);
                    }
                } else {
                    $scope.profiles = 500;
                }

            });
};


//-----------------get user profile details
$http.get(BASE_URL + "user/search/profilesearch_byid/getAllUserProfiles").then(function (response) {
    var data = response.data;
            //alert(data);
            var i, j, user_photos, profile_image, education, alreadyfollowed, followers, firstname, user_location, alreadySent, receivedReq, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
            if (data != 500) {
                for (i = 0; i < data.length; i++) {
                    alreadySent = 0;
                    receivedReq = 0;
                    alreadyfollowed = 0;
                    followers = 0;
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

                    if (data[i].who_make_me_favourite != '') {
                        followers = JSON.parse(data[i].who_make_me_favourite);
                    }
                    // Make sure user has not already added this item
                    //alert(followers);
                    angular.forEach(followers, function (key) {
                        if (session_user_id == key) {
                            //alert('found');
                            alreadyfollowed = 1;
                        }
                    });

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

                    if (data[i].user_country != '') {
                        user_location = data[i].user_country + ', ' + data[i].user_state + ', ' + data[i].user_city + '.'
                    } else {
                        user_location = 'N/A';
                    }
                    //console.log(data[i].user_firstname);
                    for (j = 0; j < data[i].user_firstname.length; j++) {
                        if (j == 0) {
                            firstname = data[i].user_firstname[0];
                        } else {
                            firstname += '*';
                        }
                    }
                    //alert(firstname);
                    if (data[i].user_profile_image != '') {
                        profile_image = data[i].user_profile_image;
                    } else {
                        profile_image = 'assets/images/user.png';
                    }
                    if (data[i].user_educational_field != '') {
                        education = data[i].user_educational_field;
                    } else {
                        education = 'N/A';
                    }
                    $scope.profiles.push({'user_profile_key': data[i].user_profile_key,
                        'user_profile_id': data[i].user_profile_id,
                        'user_id': data[i].user_id,
                        'user_fullname': user_fullname,
                        'user_gender': data[i].user_gender,
                        'user_caste': data[i].user_caste,
                        'user_email': data[i].user_email,
                        'user_profile_image': profile_image,
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
                        'alreadySent': alreadySent,
                        'user_location': user_location,
                        'firstName': firstname,
                        'lastName': data[i].user_lastname,
                        'alreadyfollowed': alreadyfollowed,
                        'education': education
                    });
                }
            } else {
                $scope.profiles = 500;
            }
        });
// ------------get User Profile Details controller--------------
$scope.getAllUserProfilesByQuickSearch = function () {
    $scope.finderloader = true;
//        var gender = $('input[name=gender]:checked').val();
var filter_aged_from = $('#filter_aged_from').val();
var filter_aged_to = $('#filter_aged_to').val();
var religion = $('#religion').val();
var language = $('#language').val();
$http({
    method: 'POST',
    url: BASE_URL + 'user/search/quick_search/getAllUserProfilesByQuickSearch',
    headers: {'Content-Type': 'application/json'},
    data: JSON.stringify({
//                gender: gender,
filter_aged_from: filter_aged_from,
filter_aged_to: filter_aged_to,
religion: religion,
language: language})
}).then(function successCallback(response) {
                // Assign response to skills object
                var data = response.data;
                $scope.profiles = [];
                var i, j, user_profile_image, education, profile_image, user_photos, alreadyfollowed, followers, firstname, user_location, alreadySent, receivedReq, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
                $scope.finderloader = false;
                if (data != 500) {
                    for (i = 0; i < data.length; i++) {
                        alreadySent = 0;
                        receivedReq = 0;
                        alreadyfollowed = 0;
                        followers = 0;

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

                        if (data[i].who_make_me_favourite != '') {
                            followers = JSON.parse(data[i].who_make_me_favourite);
                        }
                        // Make sure user has not already added this item
                        //alert(followers);
                        angular.forEach(followers, function (key) {
                            if (session_user_id == key) {
                                //alert('found');
                                alreadyfollowed = 1;
                            }
                        });

                        //alert(alreadyfollowed);
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

                        if (data[i].user_country != '') {
                            user_location = data[i].user_country + ', ' + data[i].user_state + ', ' + data[i].user_city + '.'
                        } else {
                            user_location = 'N/A';
                        }
                        //console.log(data[i].user_firstname);
                        for (j = 0; j < data[i].user_firstname.length; j++) {
                            if (j == 0) {
                                firstname = data[i].user_firstname[0];
                            } else {
                                firstname += '*';
                            }
                        }
                        //alert(firstname);
                        if (data[i].user_profile_image != '') {
                            profile_image = data[i].user_profile_image;
                        } else {
                            profile_image = 'assets/images/user.png';
                        }
                        if (data[i].user_educational_field != '') {
                            education = data[i].user_educational_field;
                        } else {
                            education = 'N/A';
                        }
                        $scope.profiles.push({'user_profile_key': data[i].user_profile_key,
                            'user_profile_id': data[i].user_profile_id,
                            'user_id': data[i].user_id,
                            'user_fullname': user_fullname,
                            'user_gender': data[i].user_gender,
                            'user_caste': data[i].user_caste,
                            'user_email': data[i].user_email,
                            'user_profile_image': profile_image,
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
                            'alreadySent': alreadySent,
                            'user_location': user_location,
                            'firstName': firstname,
                            'lastName': data[i].user_lastname,
                            'alreadyfollowed': alreadyfollowed,
                            'education': education
                        });
                        //console.log($scope.profiles);
                    }
                } else {
                    $scope.profiles = 500;
                }
            });
};

        //------------fun for Send the request of user-----------------------------//
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

                                case '600':
                                $('#ajax_validation_alert').show();
                                $('.ajax_validation_alert').html('Request already Approved.');
                                setTimeout(function () {
                                    $('.alert_message').fadeOut('fast');
                                }, 5000);
                                break;
                            }
                            $scope.reload();
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
                            $scope.reload();
                        });
            },
            cancel: function () {
            }
        }
    });
};


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
                    case '400':
                    $('#ajax_danger_alert').show();
                    $('.ajax_danger_alert').html('Already Followed !');
                    setTimeout(function () {
                        $('.alert_message').fadeOut('fast');
                    }, 5000);
                    break;
                    case '500':
                    $('#ajax_danger_alert').show();
                    $('.ajax_danger_alert').html('Following Request Failed.');
                    setTimeout(function () {
                        $('.alert_message').fadeOut('fast');
                    }, 5000);
                    break;
                }
                $scope.reload();
            });
};

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
                $scope.reload();
            });
};

});
</script>
