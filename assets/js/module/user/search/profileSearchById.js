// Angular script to add required skills in ad product form
var app = angular.module("searchProfileByIdApp", ['ngSanitize']);
app.controller("searchProfileByIdAppController", function ($scope, $http, $window) {
//------------------------------------------------------------------------------------------------------//
    $scope.profiles = [];

// ------------get User Profile Details controller--------------
    $scope.searchByProfile_id = function () {
        $http({
            method: 'get',
            url: BASE_URL + 'user/search/profilesearch_byid/searchByProfile_id?filter_member_id=' + $scope.filter_member_id
        }).then(function successCallback(response) {
            // Assign response to skills object
            var data = response.data;
            //alert(data);
            var i, user_photos,birthday,today,age;
            console.log(data);
            if (data != 500) {
                for (i = 0; i < data.length; i++) {
                     birthday = new Date(birthday);
                     today = new Date();
                     age = ((today - birthday) / (31557600000));
                     age = Math.floor(age);
                    
                    if (data[i].user_photos != '') {
                        user_photos = JSON.parse(data[i].user_photos);
                    }
                    $scope.profiles.push({'user_profile_id': data[i].user_profile_id,
                        'user_id': data[i].user_id,
                        'user_fullname': data[i].user_fullname,
                        'user_gender': data[i].user_gender,
                        'user_caste': data[i].user_caste,
                        'user_email': data[i].user_email,
                        'user_profile_image': data[i].user_profile_image,
                        'user_height': data[i].user_height,
                        'user_weight': data[i].user_weight,
                        'user_mother_tongue': data[i].user_mother_tongue,
                        'user_designation': data[i].user_designation,
                        'user_marital_status': data[i].user_marital_status,
                        'user_country': data[i].user_country,
                        'user_state': data[i].user_state,
                        'user_city': data[i].user_city,
                        'po_total': data[i].po_total,
                        'po_id': data[i].po_id,
                        'user_photos': user_photos
                    });
                }
            } else {
                $scope.po = 500;
            }
        });
    };
    // ------------get User Details controller--------------

    $http.get(BASE_URL + "user/search/profilesearch_byid/getAllUserProfiles").then(function (response) {
        var data = response.data;
        //alert(data);
        var i, user_photos;
        console.log(data);
        if (data != 500) {
            for (i = 0; i < data.length; i++) {
                if (data[i].user_photos != '') {
                    user_photos = JSON.parse(data[i].user_photos);
                }
                $scope.profiles.push({'user_profile_id': data[i].customer_name,
                    'user_id': data[i].order_no,
                    'user_fullname': data[i].po_duedate,
                    'user_gender': data[i].line_no,
                    'user_caste': data[i].unit_rate,
                    'user_email': data[i].part_drwing_no,
                    'user_profile_image': data[i].user_profile_image,
                    'user_height': data[i].user_height,
                    'user_weight': data[i].user_weight,
                    'user_mother_tongue': data[i].user_mother_tongue,
                    'user_designation': data[i].user_designation,
                    'user_marital_status': data[i].user_marital_status,
                    'user_country': data[i].user_country,
                    'user_state': data[i].user_state,
                    'user_city': data[i].user_city,
                    'po_total': data[i].po_total,
                    'po_id': data[i].po_id,
                    'user_photos': user_photos
                });
            }
        } else {
            $scope.po = 500;

        }
        //console.log($scope.po);
        //$scope.poData = $scope.po;
    });

});