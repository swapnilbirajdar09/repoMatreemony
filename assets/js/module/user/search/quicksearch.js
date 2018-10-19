// Angular script to add required skills in ad product form
var app = angular.module("quickSearchProfileApp", ['ngSanitize']);
app.controller("quickSearchProfileController", function ($scope, $http, $window) {
//------------------------------------------------------------------------------------------------------//
    $scope.profiles = [];
//-----------------get user profile details
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
            $scope.profiles = [];
            var data = response.data;
            //alert(data);
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
});