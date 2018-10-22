// Angular script to login and register form
var loginApp = angular.module("loginApp", ['ngSanitize']);
loginApp.controller('loginController', function ($scope, $http, $timeout, $window) {
  $scope.loginBtnText = "<i class='fa fa-lock'></i> Log In";
  $scope.loginDisable = "false";

  $scope.userLoginsubmit = function ()
  {
    $scope.loginMessage = '';
    // spinner on button
    $scope.loginDisable = "true";
    $scope.loginBtnText = "<i class='fa fa-circle-o-notch fa-spin'></i> Authenticating user...";

    $timeout(function () {
      $http({
        method: 'POST',
        url: BASE_URL+'user/login/authenticateUser',
        headers: {'Content-Type': 'application/json'},
        data: JSON.stringify({login_email_id: $scope.login_email_id, login_password: $scope.login_password})
      }).then(function (data) {
        // console.log(data.data);
        if (data.data == 'true') {
          $scope.loginMessage = '<p class="w3-text-white w3-green"><i class="fa fa-check"></i> Login successfull. </p>';
          $window.location.href = BASE_URL + 'user_profile';
        } else {
          $scope.loginMessage = '<p class="w3-text-white w3-red"><i class="fa fa-warning"></i> Email or Password is incorrect ! </p>';
        }

      });
      $scope.loginBtnText = "<i class='fa fa-lock'></i> Log In";
      $scope.loginDisable = "false";
    }, 2000);

  };
});
