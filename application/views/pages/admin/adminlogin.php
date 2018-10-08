<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
        <title>Parinay Vadhu-Var Suchak Kendra</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css" />
        <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                            <button type="submit" name="go" class="btn btn-block">Sign In</button>
                            <p><a href="#">Forgot your password ?</a></p>
                        </section>
                    </form>
                </section>
            </section>
        </div>

    </body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
                                var loginApp = angular.module('loginApp', ['ngSanitize']);
                                loginApp.controller('loginController', function ($scope, $http, $timeout, $window) {
                                    $scope.submit = function ()
                                    {
                                        $scope.message = '';
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
                                                    alert('got');
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