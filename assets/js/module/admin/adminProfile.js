/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var ProfileApp = angular.module('adminProfileApp', ['ngSanitize']);
//ProfileApp.controller('adminProfileController', function ($scope, $http, $timeout, $window) {

    $(function () {
        $("#adminProfileForm").submit(function () {
            dataString = $("#adminProfileForm").serialize();
            //$('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding PO. Hang on...</b></span>');
            //alert(dataString);
            $.ajax({
                type: "POST",
                url: BASE_URL + "admin/admin_profile/updateAdminDetails",
                data: dataString,
                return: false, //stop the actual form post !important!
                success: function (data) {
                    //$.alert(data);
                    console.log(data);
                    $('#message').html(data);
                }
            });
            return false;  //stop the actual form post !important!
        });
    });

//    $scope.submit = function ()
//    {
//        alert();
//        // POST form data to controller
//        $http({
//            method: 'POST',
//            url: BASE_URL + 'admin/admin_profile/updateAdminDetails',
//            headers: {'Content-Type': 'application/json'},
//            data: JSON.stringify({companyName: $scope.companyName,
//                username: $scope.username,
//                eMail: $scope.eMail,
//                firstName: $scope.firstName,
//                lastName: $scope.lastName,
//                officeAddress: $scope.officeAddress,
//                officeType: $scope.officeType,
//                adminCity: $scope.adminCity,
//                adminCountry: $scope.adminCountry,
//                postalCode: $scope.postalCode,
//                adminInfo: $scope.adminInfo})
//        }).then(function (data) {
//            console.log(data.data);
//            if (data.data == '200') {
//                $scope.message = data.data;
//            } else {
//                $scope.message = data.data;
//            }
//        });
//    };


//    $scope.po = [];
//
//    $http.get(BASE_URL + "admin/admin_profile/getAdminDetails").then(function (response) {
//        console.log(response.data[0].admin_id);
//        var data = response.data;
//        if (data != 500) {
//            $scope.po.push({'admin_id': response.data[0].admin_id,
//                'username': response.data[0].username,
//                'eMail': response.data[0].admin_email,
//                'firstName': response.data[0].admin_firstName,
//                'lastName': response.data[0].admin_lastName,
//                'officeAddress': response.data[0].admin_office_address,
//                'officeType': response.data[0].admin_officeType
//            });
//        } else {
//            $scope.po = 500;
//        }
//    });
//
//});

