/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var ProfileApp = angular.module('adminProfileApp', ['ngSanitize']);
ProfileApp.controller('adminProfileController', function ($scope, $http, $timeout, $window) {
    $scope.submit = function ()
    {
        alert();
        // POST form data to controller
        $http({
            method: 'POST',
            url: BASE_URL + 'admin/admin_profile/updateAdminDetails',
            headers: {'Content-Type': 'application/json'},
            data: JSON.stringify({companyName: $scope.companyName,
                username: $scope.username,
                eMail: $scope.eMail,
                firstName: $scope.firstName,
                lastName: $scope.lastName,
                officeAddress: $scope.officeAddress,
                officeType: $scope.officeType,
                adminCity: $scope.adminCity,
                adminCountry: $scope.adminCountry,
                postalCode: $scope.postalCode,
                adminInfo: $scope.adminInfo})
        }).then(function (data) {
            console.log(data.data);
            if (data.data == '200') {
                $scope.message = data.data;
            } else {
                $scope.message = data.data;
            }
        });
    };
});

