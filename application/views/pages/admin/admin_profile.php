<title>Parinaay Matrimony | Edit Package</title>
<!-- page content -->
<div class="right_col" role="main" id="editPkgApp">
  <div class="">
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-user-cirlce"></i> Admin Profile <small>Complete admin profile</small></h2>
            <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>admin/dashboard" ><i class="fa fa-chevron-left"></i> Back to Dashboard</a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">

              <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                 <?php 
                 if($adminInfo){
                  ?>
                  <form id="editAdminProfileForm">
                    <div class="col-md-12">
                      <h5><b>General Details</b></h5>
                      <div class="w3-col l12">
                        <div class="col-md-4 w3-margin-bottom">
                          <label>Username: </label>
                          <input type="text" name="userName" value="<?php echo $adminInfo[0]['username']; ?>" class="form-control w3-small" placeholder="Enter admin username">
                        </div>
                        <div class="col-md-4 w3-margin-bottom">
                          <label>Password: </label>
                          <input type="text" name="password" value="<?php echo $adminInfo[0]['password']; ?>" id="password" class="form-control w3-small" placeholder="Enter admin password">
                        </div>
                        <div class="col-md-4 w3-margin-bottom">
                          <label>Email-Id: </label>
                          <input type="email" name="eMail" value="<?php echo $adminInfo[0]['admin_email']; ?>" class="form-control w3-small" placeholder="Enter admin username">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <hr>
                      <h5><b>Contact Details</b></h5>
                      <div class="w3-col l12">
                        <div class="col-md-4 w3-margin-bottom">
                          <label>First Name: </label>
                          <input type="text" name="firstName" value="<?php echo $adminInfo[0]['admin_firstname']; ?>" class="form-control w3-small" placeholder="Enter admin first name">
                        </div>
                        <div class="col-md-4 w3-margin-bottom">
                          <label>Last Name: </label>
                          <input type="text" name="lastName" value="<?php echo $adminInfo[0]['admin_lastname']; ?>" class="form-control w3-small" placeholder="Enter admin last name">
                        </div>
                        <div class="col-md-4 w3-margin-bottom">
                          <label>Office Type: </label>
                          <select name="officeType" class="form-control w3-small" id="officeType">
                            <option value="0" class="w3-light-grey">Select Office Type</option>
                            <option value="Headquarters / Main Office" <?php if ($adminInfo[0]['admin_officetype'] == 'Headquarters / Main Office') {
                              echo 'selected';
                            } ?>>Headquarters / Main Office</option>
                            <option value="Branch" <?php if ($adminInfo[0]['admin_officetype'] == 'Branch') {
                              echo 'selected';
                            } ?>>Branch</option>
                          </select>
                          <p class="w3-text-red" id="ofctypeerror"></p>
                        </div>
                        <div class="col-md-12 w3-margin-bottom">
                          <label>Office Address: </label>
                          <textarea class="form-control w3-small" name="officeAddress" id="officeAddress" placeholder="Enter admin contact address, which will displayed on 'Contact Us' page. " rows="4"><?php echo $adminInfo[0]['admin_office_address']; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 w3-center w3-margin-top">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" id="editAdminProfileBtn" class="btn btn-primary">Save Changes</button>                      
                    </div>
                  </form>
                  <p id="prof_form_message" class="w3-padding"></p>
                  <?php 
                }
                else{
                  ?>
                  <div class="col-md-12 w3-padding">
                    <center>
                      <h3><i class="fa fa-warning"></i> Invalid Redirection! No data found.</h3>
                    </center>
                  </div>
                  <?php 

                }
                ?>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->
<script src="<?php echo base_url(); ?>assets/js/module/adminProfile.js"></script>
