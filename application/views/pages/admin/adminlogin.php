<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Admin | Parinay Vadhu-Var Suchak Kendra</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/fa/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/build/css/styles.css" rel="stylesheet">

    <!-- angular-->
    <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/const.js"></script>

</head>
<body>

    <div class="login_wrapper" ng-app="loginApp" ng-controller="loginController">
        <section id="logo">
            <a href="#"><img src="<?php echo base_url(); ?>assets/images/parinay.png" alt="" /></a>
        </section>

        <section class="container">
            <section class="row">
                <form ng-submit="submit()" method="POST" role="login">
                    <div>
                        <label>Username</label>
                        <input type="text" ng-model="username" name="username" required class="form-control" />
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="password" ng-model="password" name="password" required class="form-control" />
                    </div>

                    <section>
                        <button type="submit" name="go" class="btn btn-block">
                           {{ loginButtonText}}
                       </button>
                       <p><a href="#">Forgot your password ?</a></p>
                   </section>
               </form>
           </section>
       </section>
   </div>

</body>
</html>
<script>
    var loginApp = angular.module('loginApp', ['ngSanitize']);
    loginApp.controller('loginController', function ($scope, $http, $timeout, $window) {
        $scope.loginButtonText='Log in as Administrator';
        $scope.submit = function ()
        {
            $scope.message = '';
            $scope.loginButtonText = "Please wait...";

            // Do login here        
                                        $timeout(function () {
            // POST form data to controller
                                            $http({
                                                method: 'POST',
                                                url: '<?php echo base_url(); ?>admin/admin_login/adminlogin',
                                                headers: {'Content-Type': 'application/json'},
                                                data: JSON.stringify({username: $scope.username, password: $scope.password})
                                            }).then(function (data) {
                                                if (data.data == '200') {
                                                    $scope.message = '<p class="w3-green w3-padding-small">Login Successfull! Welcome Admin.</p>';
                                                    $window.location.href = BASE_URL + 'admin/dashboard';
                                                } else {
                                                    $scope.message = data.data;
                                                }

                                            });
                                            $scope.loginButtonText = "Log in as Administrator";
                                        }, 2000);

                                    };
                                });
                            </script>