// Angular script to add required skills in ad product form
var app = angular.module("advanceSearchProfileApp", ['ngSanitize']);
app.controller("advanceSearchProfileController", function ($scope, $http, $window) {
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
    $scope.getAllUserProfilesByAdvanceSearch = function () {
        $scope.finderloader = true;
        var working_field = $('#working_field').val();
        var filter_aged_from = $('#filter_aged_from').val();
        var filter_aged_to = $('#filter_aged_to').val();
        var religion = $('#religion').val();
        var language = $('#language').val();
        var occupation = $('#occupation').val();
        var education = $('#education').val();
        var max_height = $('#max_height').val();
        var min_height = $('#min_height').val();
        var from_weight = $('#from_weight').val();
        var to_weight = $('#to_weight').val();
        var from_salary = $('#from_salary').val();
        var to_salary = $('#to_salary').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var country = $('#country').val();
        var filter_member_id = $('#filter_member_id').val();
        var maritalStatus = $('#maritalStatus').val();
        $http({
            method: 'POST',
            url: BASE_URL + 'user/search/advance_search/getAllUserProfilesByAdvanceSearch',
            headers: {'Content-Type': 'application/json'},
            data: JSON.stringify({
                filter_aged_from: filter_aged_from,
                filter_aged_to: filter_aged_to,
                religion: religion,
                language: language,
                working_field: working_field,
                occupation: occupation,
                education: education,
                max_height: max_height,
                min_height: min_height,
                city: city,
                state: state,
                country: country,
                filter_member_id: filter_member_id,
                maritalStatus: maritalStatus,
                from_weight: from_weight,
                to_weight: to_weight,
                from_salary: from_salary,
                to_salary: to_salary
            })
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


    $scope.getCountryState = function () {
        var country = $("#country").val();
        $.ajax({
            type: "GET",
            url: BASE_URL + "user/search/advance_search/getCountryState",
            data: {
                country: country
            },
            cache: false,
            success: function (data) {
                //alert(data);
                var stateData = '';
                //console.log(JSON.parse(data));
                stateData = JSON.parse(data);
                var i;

                var state = $('#state');
                state.find('option:not(:first-child)').remove();

                for (i = 0; i < stateData.length; i++) {
                    $('#state').append('<option value="' + stateData[i].name + '/' + stateData[i].id + '">' + stateData[i].name + '</option>');
                }
            }
        });
    };

    $scope.getStateCity = function () {
        var state = $("#state").val();
        $.ajax({
            type: "GET",
            url: BASE_URL + "user/search/advance_search/getStateCity",
            data: {
                state: state
            },
            cache: false,
            success: function (data) {
                //alert(data);
                var cityData = '';
                //console.log(JSON.parse(data));
                cityData = JSON.parse(data);
                var i;

                var city = $('#city');
                city.find('option:not(:first-child)').remove();

                for (i = 0; i < cityData.length; i++) {
                    $('#city').append('<option value="' + cityData[i].name + '">' + cityData[i].name + '</option>');
                }
            }
        });
    };

});