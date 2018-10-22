// Angular script to add required skills in ad product form
var app = angular.module("searchProfileByIdApp", ['ngSanitize']);
app.controller("searchProfileByIdAppController", function ($scope, $http, $window) {
//------------------------------------------------------------------------------------------------------//
    $scope.profiles = [];

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
            var i, user_photos, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
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
        var i, user_photos, birthday, today, user_fullname, user_designation, user_mother_tongue, user_marital_status, age, newAge, totage;
        console.log(data);

        if (data != 500) {
            for (i = 0; i < data.length; i++) {
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
                    'user_photos': user_photos
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
            alert(response.data);
            if (response.data == '200') {
                $scope.message = 'Request Sent Successfully.'
//                $scope.message = '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Request Sent Successfully.</div><script>window.setTimeout(function() {	$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove(); });}, 3000);</script>';
            } else {
                $scope.message = '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Request Not Sent successfully added.</div><script>window.setTimeout(function() {	$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove(); });}, 3000);</script>';

            }
        });
    };

});