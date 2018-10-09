

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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-category">Complete your profile</p>
                        </div>
                        
                        <?php// print_r($adminInfo[0]['username']); ?>
                        <div class="card-body">
                            <form id="adminProfileForm" name="adminProfileForm">
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
                                            <input type="text" name="userName" id="userName" value="<?php echo $adminInfo[0]['username']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">First Name</label>
                                            <input type="text" name="firstName" id="firstName" value="<?php echo $adminInfo[0]['admin_firstname']; ?>" class="form-control" required>
                                        </div>
                                        
                                    </div>
                                      <div class="col-md-4">
                                         <div class="form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" name="lastName" id="lastName" value="<?php echo $adminInfo[0]['admin_lastname']; ?>" class="form-control">
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" name="eMail" id="eMail" value="<?php echo $adminInfo[0]['admin_email']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" name="password" id="password" value="<?php echo $adminInfo[0]['password']; ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Office Address</label>
                                            <textarea class="form-control" name="officeAddress" id="officeAddress" rows="4"><?php echo $adminInfo[0]['admin_office_address']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Office Type</label>
                                            <select name="officeType" class="form-control" id="officeType">
                                                <option value="">Select Purchase Orders</option>
                                                <option value="Headquarters / Main Office" <?php if($adminInfo[0]['admin_officetype'] == 'Headquarters / Main Office'){ echo 'selected'; } ?>>Headquarters / Main Office</option>
                                                <option value="Branch" <?php if($adminInfo[0]['admin_officetype'] == 'Branch'){ echo 'selected'; } ?>>Branch</option>
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
                        <div id="message"></div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/module/admin/adminProfile.js"></script>
