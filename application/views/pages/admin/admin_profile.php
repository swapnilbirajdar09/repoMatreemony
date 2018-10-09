<?php
$admin_id = $adminInfo[0]['admin_id'];
$username = $adminInfo[0]['username'];
$admin_email = $adminInfo[0]['admin_email'];
$password = $adminInfo[0]['password'];
$company_name = $adminInfo[0]['company_name'];
$admin_officetype = $adminInfo[0]['admin_officetype'];
$admin_office_address = $adminInfo[0]['admin_office_address'];
$admin_firstname = $adminInfo[0]['admin_firstname'];
$admin_lastname = $adminInfo[0]['admin_lastname'];
$admin_city = $adminInfo[0]['admin_city'];
$admin_state = $adminInfo[0]['admin_state'];
$admin_country = $adminInfo[0]['admin_country'];
$admin_postal_code = $adminInfo[0]['admin_postal_code'];
$admin_details = $adminInfo[0]['admin_details'];
?>

<div class="main-panel">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">User Profile</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="material-icons">dashboard</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid" ng-app="adminProfileApp" ng-controller="adminProfileController">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-category">Complete your profile</p>
                        </div>
                        <div class="card-body">
                            <form ng-submit="submit()" method="post">
                                <div class="row">
                                 <!--    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Company Name</label>
                                            <input type="text" name="companyName" ng-model="companyName" id="companyName" value="<?php echo $company_name; ?>" class="form-control" >
                                        </div>
                                    </div> -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Username</label>
                                            <input type="text" name="userName" ng-model="userName" value="<?php echo $username; ?>" id="userName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">First Name</label>
                                            <input type="text" name="firstName" ng-model="firstName" id="firstName" value="<?php echo $admin_firstname; ?>" class="form-control">
                                        </div>
                                        
                                    </div>
                                      <div class="col-md-4">
                                         <div class="form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" name="lastName" ng-model="lastName" id="lastName" value="<?php echo $admin_lastname; ?>" class="form-control">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" name="eMail" ng-model="eMail" id="eMail" value="<?php echo $admin_email; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" name="eMail"  id="eMail" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Office Address</label>
                                            <textarea class="form-control" name="officeAddress" ng-model="officeAddress" id="officeAddress" rows="4"><?php echo $admin_office_address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Office Type</label>
                                            <select name="officeType" class="form-control" ng-model="officeType" id="officeType">
                                                <option value="">Select Purchase Orders</option>
                                                <option value="Headquarters / Main Office" <?php if ($admin_officetype == 'Headquarters / Main Office') {   echo 'selected'; } ?>>Headquarters / Main Office</option>
                                                <option value="Branch" <?php if ($admin_officetype == 'Branch') {   echo 'selected'; } ?>>Branch</option>
                                            </select>
                                        </div>
                                    </div>                                        
                                </div>
                               <!--  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">City</label>
                                            <input type="text" name="adminCity" ng-model="adminCity" id="adminCity" value="<?php echo $admin_city; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Country</label>
                                            <input type="text" name="adminCountry" ng-model="adminCountry" id="adminCountry" value="<?php echo $admin_country; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Postal Code</label>
                                            <input type="text" name="postalCode" ng-model="postalCode" id="postalCode" value="<?php echo $admin_postal_code; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div> -->
                               <!--  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <div class="form-group">                          
                                                <textarea class="form-control" name="adminInfo" ng-model="adminInfo" id="adminInfo" rows="3"><?php echo $admin_details; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <button type="submit" class="btn btn-primary" style="margin-left:210px;">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <div id="messages" ng-model="message"></div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/module/admin/adminProfile.js"></script>
