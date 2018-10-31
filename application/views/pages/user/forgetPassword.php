<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Sumon Rahman">
        <meta name="description" content="">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Title -->
        <title>Parinaay Matrimonials</title>
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
        <!-- Plugin-CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/bootstrap.min.css">
        <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/linearicons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/template/front/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Main-Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/responsive.css">
        <script src="<?php echo base_url(); ?>assets/demo/js/vendor/modernizr-2.8.3.min.js"></script>
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <!--Vendor-JS-->
        <!-- angular-->
        <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/vendor/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/vendor/bootstrap.min.js"></script>

        <style type="text/css">
            body{
                font-family: 'Montserrat', sans-serif;

            }
        </style>

    </head>
    <body>
        <div class="container" style="margin-top: 0px; margin-bottom: 0px;">
            <div class="row">
                <div class="col-lg-3 w3-hide-small"></div>
                <div class="col-lg-6 w3-padding">
                    <!-- LOGIN DIV -->
                    <div class="col-lg-12 w3-card-2" style=" margin-top: 150px;"> 
                        <div class="w3-padding " style="margin-top: 30px">
                            <div class="row w3-xlarge w3-padding-small">
                                <center><span class="w3-text-blue">Buddhist Parinay</span></center>
                            </div>
                        </div>
                        <div class="w3-container " style="padding:0 36px 12px 36px">
                            <div id="Login_RegisterDiv">
                                <form id="forget_password">
                                    <div class="w3-col l12 w3-center" id="fpasswd_err"></div>
                                    <div class="form-group">
                                        <input type="email" name="forget_email" id="forget_email" class="form-control w3-center" placeholder="Enter your registered Email ID" value="" required>
                                    </div>
                                    <div class="w3-col l12">                                
                                        <center>
                                            <button type="submit" name="forget_submit" id="forget_submit" class=" w3-center btn w3-blue" ><span>GET PASSWORD</span></button>
                                        </center>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12 w3-margin-top">
                                                <div class="text-center">
                                                    <a href="<?php echo base_url(); ?>" class="btn w3-small w3-text-blue w3-hover-text-grey" class="forgot-password"><i class="fa fa-arrow-left"></i> Go to Login Page.</a>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                $("#forget_password").submit(function (e) {
                    e.preventDefault();
                    dataString = $("#forget_password").serialize();
                    $('#forget_submit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Getting Password. Hang on...</b></span>')
                    $.ajax({
                        type: "POST",
                        url: BASE_URL + "forget_password/getPassword",
                        dataType: 'text',
                        data: dataString,
                        return: false, //stop the actual form post !important!
                        success: function (data)
                        {
                            $('#forget_submit').html('<span>Get Password</span>');
                            $("#fpasswd_err").html(data);
                        }
                    });
                    return false;  //stop the actual form post !important!
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>assets/demo/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/contact-form.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/ajaxchimp.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/scrollUp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/js/wow.min.js"></script>
        <!--Main-active-JS-->
        <script src="<?php echo base_url(); ?>assets/demo/js/main.js"></script>
    </body>
</html>
<!--</section>-->