<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/fa/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/build/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/alert/jquery-confirm.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/build/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- angular-->
    <script src="<?php echo base_url(); ?>assets/js/angular.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/angular-sanitize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/const.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo base_url(); ?>admin/dashboard" class="site_title" style="padding-left: 15px">
                            PARINAAY MATRIMONY
                        </a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <!-- <h3>General</h3> -->
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                                <li><a href="<?php echo base_url(); ?>admin/all_users"><i class="fa fa-users"></i> All Members </a></li>
                                <li><a href="<?php echo base_url(); ?>admin/admin_profile"><i class="fa fa-user-circle"></i> Admin Profile </a></li>
                                <li><a href="<?php echo base_url(); ?>admin/Register_user"><i class="fa fa-user"></i> Register User </a></li>
                            </ul>
                        </div>
                        <div class="menu_section">
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small w3-center">
                        <a href="<?php echo base_url(); ?>admin/admin_profile" data-toggle="tooltip" data-placement="top" title="Settings" style="width: 50%;" title="Admin Profile">
                            <span class="fa fa-user-circle" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>admin/admin_login/logoutAdmin" style="width: 50%;" title="Admin Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Welcome <b>samrat </b>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="<?php echo base_url(); ?>admin/admin_profile"><i class="fa fa-user-circle"></i> Admin Profile</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/admin_login/logoutAdmin"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
