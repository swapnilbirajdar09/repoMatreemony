 <style type="text/css">
 /* gallery images overlay opacity overlay */
 .saved-image{
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  transition: .1s ease;
  opacity:0;
  height: 150px;
  padding: 30px 10px;
}
/* When you mouse over the gallery image div, fade in the overlay title */
.allImage:hover .saved-image {
  opacity: 0.7;
}

/* all gallery images div */
.allImage-btn{
  padding: 2px 5px 2px 5px;
  margin: 0
}
</style>
<script type="text/javascript">
    $('#uploadPhotoModal').on('hidden.bs.modal', function () {
     location.reload();
 })
</script>
<!-- <?php print_r($userDetails); ?> -->
<section class="slice sct-color-2">
    <div class="profile" ng-app="profileSectionApp" ng-controller="profileSectionCtrl">
        <div class="container">
            <div class="row cols-md-space cols-sm-space cols-xs-space">
                <!-- Alert for Ajax Profile Edit Section -->
                <div class="col-lg-3 col-md-4" id="ajax_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-success fade show" id="ajax_alert_message" role="alert">
                        You Have Successfully Edited Your Profile!
                    </div>
                </div>
                <!-- Alert for Ajax Profile Edit Section -->
                <!-- Alert for Validating Ajax Profile Edit Section -->
                <div class="col-lg-3 col-md-4 alert_message" id="ajax_validation_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-warning  fade show alert-dismissible" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <span class="ajax_validation_alert"></span>
                    </div>
                </div>
                <!-- Alert for Validating Ajax Profile Edit Section -->
                <!-- Alerts for Member actions -->
                <div class="col-lg-3 col-md-4 alert_message" id="ajax_success_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-success  fade show alert-dismissible" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <!-- Success Alert Content -->
                        <span class="ajax_success_alert"></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 alert_message" id="ajax_danger_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-danger  fade show alert-dismissible" role="alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <!-- Success Alert Content -->
                        <span class="ajax_danger_alert"></span>
                    </div>
                </div>
                <!-- Alerts for Member actions -->
                <div class="col-lg-4">
                    <div class="sidebar sidebar-inverse sidebar--style-1 bg-base-1 z-depth-2-top">
                        <div class="sidebar-object mb-0">
                            <!-- Profile picture -->
                            <div class="profile-picture profile-picture--style-2">
                                <div style="border: 10px solid rgba(255, 255, 255, 0.1);width: 200px;border-radius: 50%;margin-top: 30px;">
                                    <?php if($userDetails[0]['user_profile_image']!=''){ ?>
                                        <div class="profile_img" id="show_img" style="background-image: url(<?php echo base_url(); ?><?php echo $userDetails[0]['user_profile_image']; ?>)"></div>
                                    <?php }else { ?>
                                        <div class="profile_img" id="show_img" style="background-image: url(<?php echo base_url(); ?>assets/images/user.png)"></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Profile details -->
                            <div class="profile-details">
                                <h2 class="heading heading-3 strong-500 profile-name"><?php echo $userDetails[0]['user_firstname'].' '.$userDetails[0]['user_lastname']; ?></h2>
                                <h3 class="heading heading-6 strong-400 profile-occupation mt-3"><?php if($userDetails[0]['user_designation']==''){echo '<User Designation>';}else{ echo $userDetails[0]['user_designation']; } ?></h3>
                                    <div class="stats-entry" style="width: 100%">
                                        <span class="stats-count"><?php echo $userDetails[0]['self_favourite_count']; ?></span>
                                        <span class="stats-label w3-small text-uppercase">Followers</span>
                                    </div>
                                    <div class="profile-stats clearfix mt-2">
                                        <div class="stats-entry" style="width: 100%">
                                            <span class="stats-count"><?php echo $userDetails[0]['user_email']; ?>
                                            <span class="pull-right">
                                                <?php 
                                                if($userDetails[0]['user_email_verified']=='1'){    ?>
                                                    <span id="verify_email_span" class="btn-base-1 btn-sm btn-icon-only btn-shadow mb-1 w3-green">
                                                        <i class="ion-checkmark"></i> Verified
                                                    </span>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                    <button type="button" id="btn_verify_email" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1 w3-green" onclick="verify('email','<?php echo $userDetails[0]['user_email']; ?>')">
                                                        <i class="ion-android-lock"></i> Verify
                                                    </button>
                                                    <?php
                                                }
                                                ?>
                                                
                                                
                                            </span>
                                        </span>
                                        <span class="stats-label text-uppercase">Email ID</span>
                                    </div>
                                </div>
                                <div class="profile-stats clearfix mt-2">
                                    <div class="stats-entry" style="width: 100%">
                                        <span class="stats-count"><?php echo $userDetails[0]['user_mobile_num']; ?>
                                        <span class="pull-right">
                                            <button type="button" id="btn_verify_mobile" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1 w3-green" onclick="verify('mobile','<?php echo $userDetails[0]['user_mobile_num']; ?>')">
                                                <i class="ion-android-lock"></i> Verify
                                            </button>
                                        </span>
                                    </span>
                                    <span class="stats-label text-uppercase">Mobile Number</span>
                                </div>
                            </div>
                            <!-- Profile connect -->
                            <div class="profile-connect mt-5">
                                    <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                                        <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
                                        <h4 class="heading strong-400">Official Information</h4>
                                    </div>
                                    <div class="profile-stats clearfix mt-0">
                                        <div class="stats-entry">
                                            <span class="stats-count"><?php echo $userDetails[0]['user_package']; ?></span>
                                            <span class="stats-label text-uppercase">Current Package</span>
                                        </div>
                                        <div class="stats-entry">
                                            <span class="stats-count"><?php echo date('d M Y',strtotime($userDetails[0]['user_reg_date'])); ?></span>
                                            <span class="stats-label text-uppercase">Registration date</span>
                                        </div>
                                    </div>
                                    <div class="profile-stats clearfix mt-2">
                                        <div class="stats-entry">
                                            <span class="stats-count">
                                                <?php 
                                                $incoming_int=0;
                                                if($userDetails[0]['user_received_requests']!='' && $userDetails[0]['user_received_requests']!='[]'){
                                                    $recievedRequestArr=json_decode($userDetails[0]['user_received_requests'],TRUE);
                                                    $incoming_int=count($recievedRequestArr);
                                                }
                                                echo $incoming_int;
                                                ?>
                                            </span>
                                            <span class="stats-label text-uppercase">Incoming Interests</span>
                                        </div>
                                        <div class="stats-entry">
                                            <span class="stats-count"><?php echo $userDetails[0]['user_remaining_requests']; ?></span>
                                            <span class="stats-label text-uppercase">Remaining Interests</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- Profile stats -->
                                <div class="profile-useful-links clearfix">
                                    <div class="profile-connect mt-5">
                                        <hr>
                                        <h4 class="heading strong-400">Gallery</h4>
                                    </div>

                                    <div class="w3-container w3-margin-top w3-center no-padding">
                                        <div id="galleryImages">
                                            <?php 
                                            if($userDetails[0]['user_gallery_images']!='' && $userDetails[0]['user_gallery_images']!='[]'){                                            
                                                $img_Arr=json_decode($userDetails[0]['user_gallery_images'],TRUE);
                                                foreach ($img_Arr as $key) { ?>
                                                    <div class="w3-col l6 s6 m4" style="padding:4px 4px 4px 4px">
                                                        <div class="block-image relative">
                                                            <div class="view view-second view--rounded light-gallery">
                                                                <img src="<?php echo base_url(); ?><?php echo $key; ?>" style="width: 100%;height: 150px;">
                                                                <div class="mask mask-base-1--style-2">
                                                                    <div class="view-buttons text-center">
                                                                        <div class="view-buttons-inner text-center" style="padding: 5px">
                                                                            <a target="_blank" href="<?php echo base_url(); ?><?php echo $key; ?>" class="c-white mr-2 l-gallery" data-toggle="light-gallery">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <a class="c-white ml-2" onclick="delImage('<?php echo $key; ?>')">
                                                                                <i class="fa fa-trash"></i>
                                                                            </a><br>
                                                                            <?php 
                                                                            if($userDetails[0]['user_profile_image']!=$key){
                                                                                ?>
                                                                                <a class="c-white btn w3-small w3-round w3-text-white w3-grey" onclick="setProfilePicture('<?php echo $key; ?>')" style="padding:2px 3px;border:1px solid">
                                                                                    set profile image
                                                                                </a>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            else{ ?>
                                                <p class="w3-light-grey w3-center"> No Image found ! </p>
                                                <?php    
                                            }
                                            ?>
                                        </div>
                                        <div class="w3-col l12" style="padding:4px 4px 4px 4px">
                                            <div class="pull-right">
                                                <button type="button" data-toggle="modal" data-target="#uploadPhotoModal" class="btn btn-success btn-icon-only btn-shadow"><i class="ion-plus"></i> Upload Pictures</button>
                                            </div>

                                            <!-- Modal Upload picture -->
                                            <div class="modal fade" id="uploadPhotoModal" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">

                                                        <div class="modal-header">

                                                            <h4 class="modal-title"> Upload your Picture </h4>
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="ion-close"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="padding: 2rem 0 2rem 0">
                                                            <form class="col-12" id="gallery_upload_form" role="form" enctype="multipart/form-data">
                                                                <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                                    <label for="img_title" class="text-uppercase w3-left c-gray-light">Image Title</label>
                                                                    <input type="text" class="form-control no-resize" name="img_title" required>
                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                                <div class="form-group has-feedback col-10 ml-auto mr-auto select_div" id="img_main">
                                                                    <label class="text-uppercase w3-left c-gray-light">Upload Image</label>
                                                                    <div class="col-sm-12" style="margin:2px; padding:2px;">
                                                                        <img class="img-responsive img-border blah z-depth-1-bottom" style="width: 100%;border: 1px solid #e6e6e6;" id="previewImage" src="<?php echo base_url(); ?>assets/client/img/default_image.jpg">
                                                                    </div>
                                                                    <input type="file" id="selected_image" onchange="readURL(this)" name="selected_image" class="form-control w3-margin-top" required>
                                                                </div>
                                                                <div class="form-group has-feedback col-10 ml-auto mr-auto text-center">
                                                                    <button type="submit" id="btn_gallery_upload" class="btn btn-block btn-base-1 btn-shadow">Upload to Gallery</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end upload picture modal --> 
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="useful-links">
                                       <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav" data-toggle="modal" data-target="#changePasswordModal">
                                        <b style="font-size: 12px">Change Password</b>
                                    </a>
                                    <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav" href="<?php echo base_url(); ?>user/login/logoutUser">
                                        <b style="font-size: 12px">Logout</b>
                                    </a>
                                    <!-- Modal Change password -->
                                    <div class="modal fade" id="changePasswordModal" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <h5 class="modal-title"> Change Password </h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="ion-close"></i></span>
                                                    </button>
                                                </div>
                                                <div id="section_change_password" class="modal-body" style="padding: 2rem 0 2rem 0">
                                                    <form class="col-12" id="form_change_password" role="form">
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                            <label for="old_password" class="text-uppercase w3-left c-gray-light">Old Password</label>
                                                            <input type="password" class="form-control no-resize" name="old_password" required>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <input type="hidden" name="password_enc" value="<?php echo $userDetails[0]['user_password']; ?>" readonly>
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                            <label for="new_password" class="text-uppercase w3-left c-gray-light">New Password</label>
                                                            <input type="password" class="form-control no-resize" onkeyup="checkPassword();" name="new_password" id="new_password" required>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                            <label for="confirm_password" class="text-uppercase w3-left c-gray-light">Confirm Password</label>
                                                            <input type="password" onkeyup="checkPassword();" class="form-control no-resize" name="confirm_password" id="confirm_password" required>
                                                            <span class="glyphicon form-control-feedback w3-text-red" id="passwordErr" aria-hidden="true"></span>
                                                        </div>
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto text-center">
                                                            <button type="submit" onclick="save_section('change_password')" id="btn_change_password" class="btn btn-block btn-base-1 btn-shadow">Change Password</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end chnage password modal --> 
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="col-lg-8">
                    <div class="widget">
                        <div class="card z-depth-2-top" id="profile_load">
                            <div class="card-title">
                                <h3 class="heading heading-6 strong-500 pull-left">
                                    <b>Profile ID - </b><b class="c-base-1">479CDDC01</b>
                                </h3>
                            </div>
                            <div class="card-body pt-2" style="padding: 1rem 0.5rem;">
                                <!-- ABOUT ME -->
                                <div id="section_about_me">
                                    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                        <!-- view about me -->
                                        <div id="view_about_me">
                                            <div class="card-inner-title-wrapper pt-0">
                                                <h3 class="card-inner-title pull-left">
                                                About Me  </h3>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('about_me')">
                                                        <i class="ion-edit"></i> Edit
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-full-width">
                                                <div class="table-full-width">
                                                    <table class="table table-profile table-responsive table-slick">
                                                        <tbody>
                                                            <tr>
                                                                <td class="">
                                                                    <?php 
                                                                    if($userDetails[0]['user_about_me']!=''){
                                                                        echo $userDetails[0]['user_about_me'];
                                                                    }
                                                                    else{
                                                                        echo '<label class="w3-medium"> Click  <button class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section(\'about_me\')"><i class="ion-edit"></i> Edit</button>  to add <b>About Me</b>. </label>';
                                                                    }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- view about me ends -->
                                        <!-- edit about me div -->
                                        <div id="edit_about_me" style="display: none;">
                                            <form id="form_about_me" class="form-default" role="form">
                                                <div class="card-inner-title-wrapper pt-0">
                                                    <h3 class="card-inner-title pull-left">Edit About Me</h3>
                                                    <div class="pull-right">
                                                        <button type="submit" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('about_me')"><i class="ion-checkmark"></i> Save</button>
                                                        <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('about_me')"><i class="ion-close"></i> Cancel</button>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <div class="row">
                                                    <div class="col-md-12 w3-margin-top">
                                                        <div class="form-group has-feedback">
                                                            <textarea name="about_me" class="form-control no-resize" rows="5" required><?php echo $userDetails[0]['user_about_me']; ?></textarea>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- edit about me div ends -->
                                    </div>                           
                                </div>
                                <!-- ABOUT ME ENDS -->

                                <!-- BASIC INFO -->
                                <div id="section_basic_info">
                                    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                        <!-- view basic info div -->
                                        <div id="view_basic_info">
                                            <div class="card-inner-title-wrapper pt-0">
                                                <h3 class="card-inner-title pull-left">
                                                    Basic Information  
                                                </h3>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('basic_info')">
                                                        <i class="ion-edit"></i> Edit
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-full-width">
                                                <div class="table-full-width">
                                                    <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                        <tbody>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Full Name</span>
                                                                </td>
                                                                <td colspan="3">
                                                                    <?php echo $userDetails[0]['user_fullname']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Profile created by</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo $userDetails[0]['user_profile_created_by']; ?>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Date Of Birth</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo date('d M Y',strtotime($userDetails[0]['user_dob'])); ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Marital Status</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo $userDetails[0]['user_marital_status']; ?>
                                                                </td>                                                                
                                                                <td class="td-label">
                                                                    <span>Number of Children</span>
                                                                </td>
                                                                <td>
                                                                    <?php if($userDetails[0]['user_no_of_children']=='0'){ echo 'N/A';}else { echo $userDetails[0]['user_no_of_children']; } ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Height(In Feet)</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo $userDetails[0]['user_height']; ?>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Weight(In Kg)</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo $userDetails[0]['user_weight']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Body Type</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo $userDetails[0]['user_body_type']; ?>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Body Complexian</span>
                                                                </td>
                                                                <td>
                                                                    <?php echo $userDetails[0]['user_body_complexion']; ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Blood Group</span>
                                                                </td>
                                                                <td>
                                                                   <?php echo $userDetails[0]['user_blood_grp']; ?>                          
                                                               </td>
                                                               <td class="td-label">
                                                                <span>Mother Tongue</span>
                                                            </td>
                                                            <td><?php echo $userDetails[0]['user_mother_tongue']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-label">
                                                            <span>Hobbies</span>
                                                        </td>
                                                        <td colspan="3">
                                                            <?php echo $userDetails[0]['user_hobbies']; ?>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- view basic info div ends -->
                                <!-- edit basic info div -->
                                <div id="edit_basic_info" style="display: none;">
                                    <form id="form_basic_info" class="form-default" role="form">
                                        <div class="card-inner-title-wrapper pt-0">
                                            <h3 class="card-inner-title pull-left">Edit Basic Information</h3>
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('basic_info')"><i class="ion-checkmark"></i> Save</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('basic_info')"><i class="ion-close"></i> Cancel</button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="full_name" class="text-uppercase c-gray-light">Full Name</label>
                                                    <input type="text" class="form-control no-resize" name="full_name" value="<?php echo $userDetails[0]['user_fullname']; ?>" required>
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="profile_created_by" class="text-uppercase c-gray-light">Profile created by</label>
                                                    <select name="profile_created_by" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                                        <option value="0" class="w3-light-grey">Choose one option</option>
                                                        <option value="Self" <?php if($userDetails[0]['user_profile_created_by']=='Self'){ echo 'selected';} ?>>Self</option>
                                                        <option value="Father" <?php if($userDetails[0]['user_profile_created_by']=='Father'){ echo 'selected';} ?>>Father</option>
                                                        <option value="Mother" <?php if($userDetails[0]['user_profile_created_by']=='Mother'){ echo 'selected';} ?>>Mother</option>
                                                        <option value="Brother" <?php if($userDetails[0]['user_profile_created_by']=='Brother'){ echo 'selected';} ?>>Brother</option>
                                                        <option value="Sister" <?php if($userDetails[0]['user_profile_created_by']=='Sister'){ echo 'selected';} ?>>Sister</option>
                                                        <option value="Other" <?php if($userDetails[0]['user_profile_created_by']=='Other'){ echo 'selected';} ?>>Other</option>
                                                    </select>      
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="dob" class="text-uppercase c-gray-light">Date of Birth</label>
                                                    <input type="date" class="form-control no-resize" value="<?php echo $userDetails[0]['user_dob']; ?>" name="dob" required>
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="marital_status" class="text-uppercase c-gray-light">Marital Status</label>
                                                    <select name="marital_status" id="marital_status" class="form-control form-control selectpicker" data-placeholder="Choose one status" tabindex="2" data-hide-disabled="true">
                                                        <option value="0" class="w3-light-grey">Choose one status</option>
                                                        <option value="Never Married" <?php if($userDetails[0]['user_marital_status']=='Never Married'){ echo 'selected';} ?>>Never Married</option>
                                                        <option value="Divorced" <?php if($userDetails[0]['user_marital_status']=='Divorced'){ echo 'selected';} ?>>Divorced</option>
                                                        <option value="Widow"  <?php if($userDetails[0]['user_marital_status']=='Widow'){ echo 'selected';} ?>>Widow</option>
                                                        <option value="Widower"  <?php if($userDetails[0]['user_marital_status']=='Widower'){ echo 'selected';} ?>>Widower</option>
                                                        <option value=">Awaiting divorced / Legally separated" <?php if($userDetails[0]['user_marital_status']=='Awaiting divorced / Legally separated'){ echo 'selected';} ?>>Awaiting divorced / Legally separated</option>
                                                    </select>      
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <div class="row" id="children_div">
                                            <div class="col-md-6 w3-margin-top"></div>
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="no_of_children" class="text-uppercase c-gray-light">Number of Children</label>
                                                    <select name="no_of_children" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                                        <option value="0" class="w3-light-grey">Choose one option</option>
                                                        <option value="NA" <?php if($userDetails[0]['user_no_of_children']=='NA'){ echo 'selected';} ?>>NA</option>
                                                        <option value="1" <?php if($userDetails[0]['user_no_of_children']=='1'){ echo 'selected';} ?>>1</option>
                                                        <option value="2" <?php if($userDetails[0]['user_no_of_children']=='2'){ echo 'selected';} ?>>2</option>
                                                        <option value="More" <?php if($userDetails[0]['user_no_of_children']=='More'){ echo 'selected';} ?>>More</option>
                                                    </select>      
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="mother_tongue" class="text-uppercase c-gray-light">Mother Tongue</label>
                                                    <select name="mother_tongue" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one language" tabindex="2" data-hide-disabled="true">
                                                        <option value="0" class="w3-light-grey">Choose one language</option>
                                                        <option value="Marathi" <?php if($userDetails[0]['user_mother_tongue']=='Marathi'){ echo 'selected';} ?>>Marathi</option>
                                                        <option value="Bengali" <?php if($userDetails[0]['user_mother_tongue']=='Bengali'){ echo 'selected';} ?>>Bengali</option>
                                                        <option value="German" <?php if($userDetails[0]['user_mother_tongue']=='German'){ echo 'selected';} ?>>German</option>
                                                        <option value="English" <?php if($userDetails[0]['user_mother_tongue']=='English'){ echo 'selected';} ?>>English</option>
                                                        <option value="Hindi" <?php if($userDetails[0]['user_mother_tongue']=='Hindi'){ echo 'selected';} ?>>Hindi</option>
                                                        <option value="Urdu" <?php if($userDetails[0]['user_mother_tongue']=='Urdu'){ echo 'selected';} ?>>Urdu</option>
                                                    </select>
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="blood_group" class="text-uppercase c-gray-light">Blood Group</label>
                                                    <select name="blood_group" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one group" tabindex="2" data-hide-disabled="true">
                                                        <option value="0" class="w3-light-grey">Choose one group</option>
                                                        <option value="O+" <?php if($userDetails[0]['user_blood_grp']=='O+'){ echo 'selected';} ?>>O+</option>
                                                        <option value="O-" <?php if($userDetails[0]['user_blood_grp']=='O-'){ echo 'selected';} ?>>O-</option>
                                                        <option value="A+" <?php if($userDetails[0]['user_blood_grp']=='A+'){ echo 'selected';} ?>>A+</option>
                                                        <option value="A-" <?php if($userDetails[0]['user_blood_grp']=='A-'){ echo 'selected';} ?>>A-</option>
                                                        <option value="B+" <?php if($userDetails[0]['user_blood_grp']=='B+'){ echo 'selected';} ?>>B+</option>
                                                        <option value="B-" <?php if($userDetails[0]['user_blood_grp']=='B-'){ echo 'selected';} ?>>B-</option>
                                                        <option value="AB+" <?php if($userDetails[0]['user_blood_grp']=='AB+'){ echo 'selected';} ?>>AB+</option>
                                                        <option value="AB-" <?php if($userDetails[0]['user_blood_grp']=='AB-'){ echo 'selected';} ?>>AB-</option>
                                                    </select>      
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 w3-margin-top">
                                                <div class="form-group has-feedback">
                                                    <label for="body_type" class="text-uppercase c-gray-light">Body Type</label>
                                                    <select name="body_type" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one Type" tabindex="2" data-hide-disabled="true">
                                                        <option value="0" class="w3-light-grey">Choose one Type</option>
                                                        <option value="Average" <?php if($userDetails[0]['user_body_type']=='Average'){ echo 'selected';} ?>>Average</option>
                                                        <option value="Athletic" <?php if($userDetails[0]['user_body_type']=='Athletic'){ echo 'selected';} ?>>Athletic</option>
                                                        <option value="Slim" <?php if($userDetails[0]['user_body_type']=='Slim'){ echo 'selected';} ?>>Slim</option>
                                                        <option value="Heavy" <?php if($userDetails[0]['user_body_type']=='Heavy'){ echo 'selected';} ?>>Heavy</option>                                                        </select>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="body_complexion" class="text-uppercase c-gray-light">Body Complexion</label>
                                                        <select name="body_complexion" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                                            <option value="0" class="w3-light-grey">Choose one option</option>
                                                            <option value="Fair" <?php if($userDetails[0]['user_body_complexion']=='Fair'){ echo 'selected';} ?>>Fair</option>
                                                            <option value="Very Fair" <?php if($userDetails[0]['user_body_complexion']=='Very Fair'){ echo 'selected';} ?>>Very Fair</option>
                                                            <option value="Wheatish" <?php if($userDetails[0]['user_body_complexion']=='Wheatish'){ echo 'selected';} ?>>Wheatish</option>
                                                            <option value="Wheatish Brown" <?php if($userDetails[0]['user_body_complexion']=='Wheatish Brown'){ echo 'selected';} ?>>Wheatish Brown</option>
                                                            <option value="Dark" <?php if($userDetails[0]['user_body_complexion']=='Dark'){ echo 'selected';} ?>>Dark</option>
                                                        </select>      
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="weight" class="text-uppercase c-gray-light">Weight (in KG)</label>
                                                        <input type="number" step="0.01" min="0" value="<?php echo $userDetails[0]['user_weight']; ?>" class="form-control no-resize" name="weight" required>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="height" class="text-uppercase c-gray-light">Height (in Feet)</label>
                                                        <input type="number" step="0.01" min="0" value="<?php echo $userDetails[0]['user_height']; ?>" class="form-control no-resize" name="height" required>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="hobbies" class="text-uppercase c-gray-light">Hobbies</label>
                                                        <input type="text" value="<?php echo $userDetails[0]['user_hobbies']; ?>" class="form-control no-resize" name="hobbies" required>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- edit basic info div ends -->
                                </div>                        
                            </div>
                            <!-- BASIC INFO ENDS -->
                            <!-- EDUCATIONAL and PROFESSIONAL -->
                            <div id="section_edu_professional">
                              <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                <!-- view education and professional div -->
                                <div id="view_edu_professional">
                                    <div class="card-inner-title-wrapper pt-0">
                                        <h3 class="card-inner-title pull-left">
                                            Educational and Professional Information
                                        </h3>
                                        <div class="pull-right">
                                            <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('edu_professional')">
                                                <i class="ion-edit"></i> Edit
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-full-width">
                                        <div class="table-full-width">
                                            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                <tbody>
                                                    <tr>
                                                        <td class="td-label">
                                                            <span>Educational Field</span>
                                                        </td>
                                                        <td>
                                                            <?php echo $userDetails[0]['user_educational_field']; ?>
                                                        </td>
                                                        <td class="td-label">
                                                            <span>School/College Name</span>
                                                        </td>
                                                        <td>
                                                            <?php echo $userDetails[0]['user_school/clg_name']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-label">
                                                            <span>University Name</span>
                                                        </td>
                                                        <td>
                                                            <?php echo $userDetails[0]['user_university_name']; ?>
                                                        </td>
                                                        <td class="td-label">
                                                            <span>Additional Education</span>
                                                        </td>
                                                        <td>
                                                            <?php echo $userDetails[0]['user_additional_edu']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-label">
                                                            <span>Occupation Type</span>
                                                        </td>
                                                        <td>
                                                            <?php echo $userDetails[0]['user_occupation_type']; ?>
                                                        </td>
                                                        <td class="td-label">
                                                            <span>Working Field</span>
                                                        </td>
                                                        <td>
                                                           <?php echo $userDetails[0]['user_working_field']; ?>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                    <td class="td-label">
                                                        <span>Company Name</span>
                                                    </td>
                                                    <td>
                                                     <?php echo $userDetails[0]['user_company_name']; ?>
                                                 </td>
                                                 <td class="td-label">
                                                    <span>Designation</span>
                                                </td>
                                                <td>
                                                  <?php echo $userDetails[0]['user_designation']; ?>                    
                                              </td>
                                          </tr>
                                          <tr>
                                            <td class="td-label">
                                                <span>Workplace Address</span>
                                            </td>
                                            <td colspan="3"><?php echo $userDetails[0]['user_workplace_address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="td-label">
                                                <span>Monthly Income</span>
                                            </td>
                                            <td>
                                             <?php echo $userDetails[0]['user_monthly_income']; ?>
                                         </td>
                                         <td class="td-label">
                                            <span>Annual Income</span>
                                        </td>
                                        <td>
                                           <?php echo $userDetails[0]['user_annual_income']; ?>                   
                                       </td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
               <!-- view eductaion and professional div ends -->
               <!-- edit education and professional div -->
               <div id="edit_edu_professional" style="display: none;">
                <form id="form_edu_professional" class="form-default" role="form">
                    <div class="card-inner-title-wrapper pt-0">
                        <h3 class="card-inner-title pull-left">Edit Educational and Professional</h3>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('edu_professional')"><i class="ion-checkmark"></i> Save</button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('edu_professional')"><i class="ion-close"></i> Cancel</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div class="row">
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="educational_field" class="text-uppercase c-gray-light">Educational Field</label>
                                <select name="educational_field" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one field" tabindex="2" data-hide-disabled="true">
                                    <option value="0" class="w3-light-grey">Choose one field</option>
                                    <?php
                                    for($i = 0; $i < count($educations); $i++) {
                                        ?>
                                        <option value="<?php echo $educations[$i]['edu_name']; ?>" <?php if($userDetails[0]['user_educational_field']==$educations[$i]['edu_name']){ echo 'selected';} ?>>
                                            <?php echo ucfirst($educations[$i]['edu_name']); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="clg_name" class="text-uppercase c-gray-light">School/ College Name</label>
                                <input type="text" class="form-control no-resize" value="<?php echo $userDetails[0]['user_school/clg_name']; ?>" name="clg_name">   
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="university" class="text-uppercase c-gray-light">University/ Board Name</label>
                                <input type="text" value="<?php echo $userDetails[0]['user_university_name']; ?>" class="form-control no-resize" name="university">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="additional_education" class="text-uppercase c-gray-light">Additional Education</label>
                                <input type="text" value="<?php echo $userDetails[0]['user_additional_edu']; ?>" class="form-control no-resize" name="additional_education">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="occupation_type" class="text-uppercase c-gray-light">Occupation Type</label>
                                <select name="occupation_type" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                    <option value="0" class="w3-light-grey">Choose one option</option>
                                    <?php
                                    for($i = 0; $i < count($occupations); $i++) {
                                        ?>
                                        <option value="<?php echo $occupations[$i]['occupation_name']; ?>" <?php if($userDetails[0]['user_occupation_type']==$occupations[$i]['occupation_name']){ echo 'selected';} ?>>
                                            <?php echo ucfirst($occupations[$i]['occupation_name']); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="working_sector" class="text-uppercase c-gray-light">Working Sector</label>
                                <select name="working_sector" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one sector" tabindex="2" data-hide-disabled="true">
                                    <option value="0" class="w3-light-grey">Choose one sector</option>
                                    <option value="Government" <?php if($userDetails[0]['user_working_field']=='Government'){ echo 'selected';} ?>>Government</option>
                                    <option value="Own Business" <?php if($userDetails[0]['user_working_field']=='Own Business'){ echo 'selected';} ?>>Own Business</option>
                                    <option value="Private Sector" <?php if($userDetails[0]['user_working_field']=='Private Sector'){ echo 'selected';} ?>>Private Sector</option>
                                    <option value="Public Sector" <?php if($userDetails[0]['user_working_field']=='Public Sector'){ echo 'selected';} ?>>Public Sector</option>
                                    <option value="Any" <?php if($userDetails[0]['user_working_field']=='Any'){ echo 'selected';} ?>>Any</option>
                                </select>      
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="company_name" class="text-uppercase c-gray-light">Company Name</label>
                                <input type="text" value="<?php echo $userDetails[0]['user_company_name']; ?>" class="form-control no-resize" name="company_name" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="designation" class="text-uppercase c-gray-light">Designation</label>
                                <input type="text" value="<?php echo $userDetails[0]['user_designation']; ?>" class="form-control no-resize" name="designation" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="workplace_address" class="text-uppercase c-gray-light">Workplace Address</label>
                                <textarea name="workplace_address" class="form-control no-resize" rows="5"><?php echo $userDetails[0]['user_workplace_address']; ?></textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="monthly_income" class="text-uppercase c-gray-light">Monthly Income</label>
                                <input type="text" value="<?php echo $userDetails[0]['user_monthly_income']; ?>" class="form-control no-resize" name="monthly_income">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 w3-margin-top">
                            <div class="form-group has-feedback">
                                <label for="annual_income" class="text-uppercase c-gray-light">Annual Income</label>
                                <input type="text" value="<?php echo $userDetails[0]['user_annual_income']; ?>" class="form-control no-resize" name="annual_income">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- edit education and professional div ends -->
        </div>
    </div>
    <!-- EDU and PROFESSIONAL DIV ENDS -->
    <!-- FAMILY INFO DIV -->
    <div id="section_family_info">
        <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
            <!-- view family info div -->
            <div id="view_family_info">
                <div class="card-inner-title-wrapper pt-0">
                    <h3 class="card-inner-title pull-left">
                      Family Information          
                  </h3>
                  <div class="pull-right">
                    <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('family_info')">
                        <i class="ion-edit"></i> Edit
                    </button>
                </div>
            </div>
            <div class="table-full-width">
                <div class="table-full-width">
                    <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                        <tbody>
                            <tr>
                                <td class="td-label">
                                    <span>Father Name</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_father_name']; ?> 
                                </td>
                                <td class="td-label">
                                    <span>Father Occupation</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_father_occupation']; ?>                            
                                </td>
                            </tr>
                            <tr>
                                <td class="td-label">
                                    <span>Mother Name</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_mother_name']; ?>                           
                                </td>
                                <td class="td-label">
                                    <span>Mother Occupation</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_mother_occupation']; ?>                         
                                </td>
                            </tr>
                            <tr>
                                <td class="td-label">
                                    <span>Country</span>
                                </td>
                                <td>
                                    <?php echo ucfirst($userDetails[0]['user_country']); ?> 
                                </td>
                                <td class="td-label">
                                    State
                                </td>
                                <td><?php echo $userDetails[0]['user_state']; ?> 
                            </td>

                        </tr>
                        <tr>
                            <td class="td-label">
                                <span>Native Place</span>
                            </td>
                            <td>
                                <?php echo $userDetails[0]['user_city']; ?> 
                            </td>
                            <td class="td-label">
                                Residential Address
                            </td>
                            <td>
                                <?php echo $userDetails[0]['user_residential_address']; ?> 
                            </td>

                        </tr>
                        <tr>
                            <td class="td-label">
                             Contact number 1
                         </td>
                         <td>
                            <?php echo $userDetails[0]['user_contact_no1']; ?> 
                        </td>
                        <td class="td-label">
                         Contact number 2
                     </td>
                     <td>
                        <?php echo $userDetails[0]['user_contact_no2']; ?> 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- view family info div ends -->
<!-- edit family info div -->
<div id="edit_family_info" style="display: none;">
    <form id="form_family_info" class="form-default" role="form">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">Edit Family Information</h3>
            <div class="pull-right">
                <button type="submit" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('family_info')"><i class="ion-checkmark"></i> Save</button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('family_info')"><i class="ion-close"></i> Cancel</button>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="father_name" class="text-uppercase c-gray-light">Father's Name</label>
                    <input type="text" class="form-control no-resize" name="father_name" value="<?php echo $userDetails[0]['user_father_name']; ?>" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="father_occupation" class="text-uppercase c-gray-light">Father's Occupation</label>
                    <input type="text" class="form-control no-resize" value="<?php echo $userDetails[0]['user_father_occupation']; ?>" required name="father_occupation">   
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="mother_name" class="text-uppercase c-gray-light">Mother's Name</label>
                    <input type="text" class="form-control no-resize" value="<?php echo $userDetails[0]['user_mother_name']; ?>" name="mother_name" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="mother_occupation" class="text-uppercase c-gray-light">Mother's Occupation</label>
                    <input type="text" class="form-control no-resize" value="<?php echo $userDetails[0]['user_mother_occupation']; ?>" name="mother_occupation" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="residence_address" class="text-uppercase c-gray-light">Residential Address</label>
                    <textarea name="residence_address" class="form-control no-resize" rows="5" required><?php echo $userDetails[0]['user_residential_address']; ?></textarea>  
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="country" class="text-uppercase c-gray-light">Country</label>
                    <select name="country" id="country" class="form-control selectpicker" data-placeholder="Choose country" tabindex="2" data-hide-disabled="true">
                        <option value="0">Choose country</option>
                        <?php
                        for ($i = 0; $i < count($country); $i++) {         ?>
                            <option value="<?php echo $country[$i]['name']; ?>" <?php if($userDetails[0]['user_country']==$country[$i]['name']){ echo 'selected';} ?>>
                                <?php echo $country[$i]['name']; ?>
                            </option>
                        <?php } ?>
                    </select>

                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="state" class="text-uppercase c-gray-light">State</label>
                    <select id="state" name="state" class="form-control form-control selectpicker" tabindex="2" data-hide-disabled="true">
                        <option value="0">Choose a State</option>
                        <?php
                        for ($i = 0; $i < count($states); $i++) {         ?>
                            <option value="<?php echo $states[$i]['name']; ?>" <?php if($userDetails[0]['user_state']==$states[$i]['name']){ echo 'selected';} ?>>
                                <?php echo $states[$i]['name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="native_place" class="text-uppercase c-gray-light">Native Place/ City</label>
                    <select id="native_place" name="native_place" class="form-control form-control selectpicker" tabindex="2" data-hide-disabled="true">
                        <option value="">Choose a City</option>
                        <?php
                        for ($i = 0; $i < count($cities); $i++) {         ?>
                            <option value="<?php echo $cities[$i]['name']; ?>" <?php if($userDetails[0]['user_city']==$cities[$i]['name']){ echo 'selected';} ?>>
                                <?php echo $cities[$i]['name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="contact_no_1" class="text-uppercase c-gray-light">Contact No.1</label>
                    <input type="number" class="form-control no-resize" value="<?php if($userDetails[0]['user_contact_no1']!=0){ echo $userDetails[0]['user_contact_no1']; } ?>" name="contact_no_1" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6 w3-margin-top">
                <div class="form-group has-feedback">
                    <label for="contact_no_2" class="text-uppercase c-gray-light">Contact No.2</label>
                    <input type="number" class="form-control no-resize" value="<?php if($userDetails[0]['user_contact_no2']!=0){ echo $userDetails[0]['user_contact_no2']; } ?>" name="contact_no_2">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- edit family info div ends -->
</div>
</div>
<!-- FAMILY INFO DIV -->
<!-- LIFESTYLE DIV -->
<div id="section_life_style">
    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
        <!-- view lifestyle div -->
        <div id="view_life_style">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">
                    Life Style            
                </h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('life_style')">
                        <i class="ion-edit"></i> Edit
                    </button>
                </div>
            </div>
            <div class="table-full-width">
                <div class="table-full-width">
                    <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                        <tbody>
                            <tr>
                                <td class="td-label">
                                    <span>Diet</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_diet']; ?>                           
                                </td>
                                <td class="td-label">
                                    <span>Drink</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_drink']; ?>                            
                                </td>
                            </tr>
                            <tr>
                                <td class="td-label">
                                    <span>Smoke</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_smoke']; ?>                            
                                </td>
                                <td class="td-label">
                                    <span>Living With</span>
                                </td>
                                <td>
                                    <?php echo $userDetails[0]['user_living_with']; ?>                            
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- view life style div ends -->
        <!-- edit lifestyle div -->
        <div id="edit_life_style" style="display: none;">
            <form id="form_life_style" class="form-default" role="form">
                <div class="card-inner-title-wrapper pt-0">
                    <h3 class="card-inner-title pull-left">
                        Edit Life Style   
                    </h3>
                    <div class="pull-right">
                        <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('life_style')"><i class="ion-checkmark"></i> Save</button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('life_style')"><i class="ion-close"></i> Cancel</button>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="diet" class="text-uppercase c-gray-light">Diet</label>
                            <select name="diet" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                <option value="0" class="w3-light-grey">Choose one option</option>
                                <option value="Vegeterian" <?php if($userDetails[0]['user_diet']=='Vegeterian'){ echo 'selected';} ?>>Vegeterian</option>
                                <option value="Non-Vegeterian" <?php if($userDetails[0]['user_diet']=='Non-Vegeterian'){ echo 'selected';} ?>>Non-Vegeterian</option>
                                <option value="Eggeterian" <?php if($userDetails[0]['user_diet']=='Eggeterian'){ echo 'selected';} ?>>Eggeterian</option>
                            </select>  
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="drink" class="text-uppercase c-gray-light">Drink</label>
                            <select name="drink" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                <option value="0" class="w3-light-grey">Choose one option</option>
                                <option value="Yes" <?php if($userDetails[0]['user_drink']=='Yes'){ echo 'selected';} ?>>Yes</option>
                                <option value="No" <?php if($userDetails[0]['user_drink']=='No'){ echo 'selected';} ?>>No</option>
                                <option value="Occasionally" <?php if($userDetails[0]['user_drink']=='Occasionally'){ echo 'selected';} ?>>Occasionally</option>
                            </select>                       
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="smoke" class="text-uppercase c-gray-light">Smoke</label>
                            <select name="smoke" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">    
                                <option value="0" class="w3-light-grey">Choose one option</option>
                                <option value="Yes" <?php if($userDetails[0]['user_smoke']=='Yes'){ echo 'selected';} ?>>Yes</option>
                                <option value="No" <?php if($userDetails[0]['user_smoke']=='No'){ echo 'selected';} ?>>No</option>
                                <option value="Occasionally" <?php if($userDetails[0]['user_smoke']=='Occasionally'){ echo 'selected';} ?>>Occasionally</option>
                            </select>                        
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="living_with" class="text-uppercase c-gray-light">Living With</label>
                            <input type="text" value="<?php echo $userDetails[0]['user_living_with']; ?>" class="form-control no-resize" name="living_with">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- edit life style div ends -->
    </div>        
</div>
<!-- LIFESTYLE DIV ENDS -->
<!-- RELATIVES DIV -->
<div id="section_relatives_info">
    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
        <!-- view relatives info div -->
        <div id="view_relatives_info">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">
                  Relatives Information          
              </h3>
              <div class="pull-right">
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('relatives_info')">
                    <i class="ion-edit"></i> Edit
                </button>
            </div>
        </div>
        <div class="table-full-width">
            <div class="table-full-width">
                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                    <tbody>
                        <?php 
                        if($userDetails[0]['user_relative_info']!='' && $userDetails[0]['user_relative_info']!='[]'){  
                            $relativeArr=json_decode($userDetails[0]['user_relative_info'],TRUE); 
                            for ($i=0; $i <count($relativeArr) ; $i++) { ?>
                                <tr>
                                    <td colspan="4" class="w3-text-white" style="background:#5E32E1">Relative No. <?php echo $i+1; ?> </td>
                                </tr>
                                <tr>
                                    <td class="td-label">
                                        <span>Relatives Name</span>
                                    </td>
                                    <td>
                                        <?php echo $relativeArr[$i]['relative_name']; ?>
                                    </td>
                                    <td class="td-label">
                                        <span>Relation with Me</span>
                                    </td>
                                    <td>
                                     <?php echo $relativeArr[$i]['relative_relation']; ?>
                                 </td>
                             </tr>
                             <tr>
                                <td class="td-label">
                                 Contact number
                             </td>
                             <td>
                                <?php echo $relativeArr[$i]['relative_contact']; ?>
                            </td>
                            <td class="td-label">
                                Residential Address
                            </td>
                            <td>
                                <?php echo $relativeArr[$i]['relative_address']; ?>
                            </td>

                        </tr>
                        <?php        
                    }
                }
                else{
                    echo '<tr><td colspan="4"><label class="w3-medium"> Click  <button class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section(\'relatives_info\')"><i class="ion-edit"></i> Edit</button>  to add <b>Relative</b>. </label></td></tr>';
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<!-- view relatives div ends -->
<!-- edit relatives div -->
<div id="edit_relatives_info" style="display: none;">
    <form id="form_relatives_info" class="form-default" role="form">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                Edit Relatives Information
            </h3>
            <div class="pull-right">
                <button type="submit" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('relatives_info')"><i class="ion-checkmark"></i> Save</button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('relatives_info')"><i class="ion-close"></i> Cancel</button>
            </div>
        </div>

        <div class="clearfix"></div>
        <?php 
        if($userDetails[0]['user_relative_info']!='' && $userDetails[0]['user_relative_info']!='[]'){  
            $relativeArr=json_decode($userDetails[0]['user_relative_info'],TRUE); 
            echo '<input type="hidden" name="totalrelative" id="totalrelative" value="'.count($relativeArr).'">';
        }
        else{
            echo '<input type="hidden" name="totalrelative" id="totalrelative" value="1">';
        }
        ?>
        <?php 
        if($userDetails[0]['user_relative_info']!='' && $userDetails[0]['user_relative_info']!='[]'){
            $relativeArr=json_decode($userDetails[0]['user_relative_info'],TRUE);
            ?>

            <div class="row w3-margin-top">
                <div class="col-md-12 w3-text-white">
                    <p class=" w3-padding-small" style="background:#5E32E1">Relative No.1</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <label for="relative_name" class="text-uppercase c-gray-light">Relative Full Name</label>
                        <input type="text" id="relative_name_1" required class="form-control no-resize" value="<?php echo $relativeArr[0]['relative_name']; ?>" name="relative_name[]">  
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="relative_contact" class="text-uppercase c-gray-light">Relative Contact Number</label>
                        <input type="text" id="relative_contact_1" required class="form-control no-resize" value="<?php echo $relativeArr[0]['relative_contact']; ?>" name="relative_contact[]">  
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="relative_relation" class="text-uppercase c-gray-light">Relation with you</label>
                        <input type="text" id="relative_relation_1" required class="form-control no-resize" value="<?php echo $relativeArr[0]['relative_relation']; ?>" name="relative_relation[]">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <label for="relative_address" class="text-uppercase c-gray-light">Relative Address</label>
                        <textarea name="relative_address[]" id="relative_address_1" required class="form-control no-resize" rows="5"><?php echo $relativeArr[0]['relative_address']; ?></textarea> 
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <?php 
        }
        else{
            ?>
            <div class="row w3-margin-top">
                <div class="col-md-12 w3-text-white">
                    <p class=" w3-padding-small" style="background:#5E32E1">Relative No.1</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <label for="relative_name" class="text-uppercase c-gray-light">Relative Full Name</label>
                        <input type="text" id="relative_name_1" required class="form-control no-resize" value="" name="relative_name[]">  
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="relative_contact" class="text-uppercase c-gray-light">Relative Contact Number</label>
                        <input type="text" id="relative_contact_1" required class="form-control no-resize" value="" name="relative_contact[]">  
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="relative_relation" class="text-uppercase c-gray-light">Relation with you</label>
                        <input type="text" id="relative_relation_1" required class="form-control no-resize" value="" name="relative_relation[]">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                        <label for="relative_address" class="text-uppercase c-gray-light">Relative Address</label>
                        <textarea name="relative_address[]" id="relative_address_1" required class="form-control no-resize" rows="5"></textarea> 
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="container no-padding" id="multiple_relativeDiv">
            <?php 
            if($userDetails[0]['user_relative_info']!='' && $userDetails[0]['user_relative_info']!='[]'){
                $relativeArr=json_decode($userDetails[0]['user_relative_info'],TRUE);

                for ($i=1; $i <count($relativeArr) ; $i++) { ?>
                    <div id="relativeDiv_<?php echo $i+1; ?>">
                        <div class="row w3-margin-top">
                            <div class="col-md-12 w3-text-white">
                                <div class=" w3-padding-small" style="background:#5E32E1">Relative No.<?php echo $i+1; ?>
                                <a href="#" style="padding:1px" class="delete btn w3-text-white w3-right" title="remove relative"><i class="ion-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="relative_name" class="text-uppercase c-gray-light">Relative Full Name</label>
                                <input type="text" id="relative_name_<?php echo $i+1; ?>" required class="form-control no-resize" value="<?php echo $relativeArr[$i]['relative_name']; ?>" name="relative_name[]">  
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="relative_contact" class="text-uppercase c-gray-light">Relative Contact Number</label>
                                <input type="text" id="relative_contact_<?php echo $i+1; ?>" required class="form-control no-resize" value="<?php echo $relativeArr[$i]['relative_contact']; ?>" name="relative_contact[]">  
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="relative_relation" class="text-uppercase c-gray-light">Relation with you</label>
                                <input type="text" id="relative_relation_<?php echo $i+1; ?>" required class="form-control no-resize" value="<?php echo $relativeArr[$i]['relative_relation']; ?>" name="relative_relation[]">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="relative_address" class="text-uppercase c-gray-light">Relative Address</label>
                                <textarea name="relative_address[]" id="relative_address_<?php echo $i+1; ?>" required class="form-control no-resize" rows="5"><?php echo $relativeArr[$i]['relative_address']; ?></textarea> 
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php        
            }
        }
        ?>

    </div>
    <div class="row w3-margin-bottom">
        <div class="col-md-12">
            <button type="button" id="add_moreRelative" class="btn btn-sm w3-right btn-primary btn-icon-only btn-shadow"><i class="ion-plus"></i> Add more Relative (max.3)</button>
        </div>
    </div>
</form>
</div>
<!-- edit relatives div ends -->
</div>
</div>
<!-- RELATIVES DIV -->
<!-- EXPECTATIONS DIV -->
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <!-- view expectations div -->
    <div id="view_expectations">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                Expectations 
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('expectations')">
                    <i class="ion-edit"></i> Edit
                </button>
            </div>
        </div>
        <div class="table-full-width">
            <div class="table-full-width">
                <table class="table table-profile table-responsive table-slick">
                    <tbody>
                        <tr>
                            <td class="">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- view expectations div ends -->
    <!-- edit expectations div -->
    <div id="edit_expectations" style="display: none;">
        <form id="form_expectations" class="form-default" role="form">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">Edit Expectations</h3>
                <div class="pull-right">
                    <button type="submit" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('expectations')"><i class="ion-checkmark"></i> Save</button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('expectations')"><i class="ion-close"></i> Cancel</button>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 w3-margin-top">
                    <div class="form-group has-feedback">
                        <textarea name="expectations" class="form-control no-resize" rows="5" required>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- edit expectations div ends -->
</div> 
<!-- EXPECTATIONS DIV ENDS -->
<!-- documents div -->
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="section_documents">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
            Documents Uploaded  </h3>
        </div>
        <div class="clearfix"></div>
        <form id="form_documents" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="document_type" class="text-uppercase c-gray-light">Document Type</label>
                        <select name="document_type" id="document_type" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a document" tabindex="2" data-hide-disabled="true">
                            <option value="0" class="w3-light-grey">Choose one document</option>
                            <option value="Adhaar Card">Adhaar Card</option>
                            <option value="PAN Card">PAN Card</option>
                            <option value="Electricity Bill">Electricity Bill</option>
                        </select>                        
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="document_file" class="text-uppercase c-gray-light">Upload Document</label>
                        <input type="file" class="form-control no-resize" name="document_file" style="padding-top:4px;padding-bottom:4px">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-icon-only btn-shadow"><i class="fa fa-upload"></i> Upload Document</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row w3-padding">
            <label class="text-uppercase c-gray"><b><i class="fa fa-file"></i> Uploaded Documents: </b></label>
            <div class="col-md-12">
                <?php 
                if(!$userDocuments){ ?>
                    <p class="w3-light-grey w3-center"> <i class="fa fa-warning"></i> No Documents found ! </p>
                    <?php
                }
                else{
                    foreach ($userDocuments as $key) { 
                        $status='';
                        $status_color='';
                        $arr=explode('/', $key['document_path']);
                        switch ($key['document_status']) {
                            case 'pending':
                            $status='In Progress';
                            $status_color='w3-grey';
                            break;
                            case 'approved':
                            $status='Approved';
                            $status_color='w3-green';
                            break;
                            case 'rejected':
                            $status='Rejected';
                            $status_color='w3-red';
                            break;
                        }
                        ?>
                        <div class="col-md-12 w3-card">
                            <div class="w3-col l12">
                                <a class="btn w3-text-red w3-right w3-small" onclick="delDocument('<?php echo $key['document_id']; ?>')" style="padding: 2px"><i class="fa fa-remove"></i> remove</a>
                            </div>
                            <p class="w3-large"> <?php echo $key['document_type'] ?> <span class="badge w3-text-white <?php echo $status_color; ?>"><?php echo $status; ?></span>   </p>                     
                            <p>
                                <label class="text-uppercase c-gray-light">Document: </label>
                                <a class="btn" target="_self" href="<?php echo base_url(); ?><?php echo $key['document_path']; ?>" download="<?php echo $arr[3]; ?>" style="padding:0"><label class="w3-small w3-text-grey"><i class="fa fa-paperclip"></i> <?php echo $arr[3]; ?></label></a>
                            </p>
                        </div>
                        <?php    
                    }
                    ?>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </div>
</div> 
<!-- documents div ends -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script>
    $(document).ready(function(){
        setTimeout(function() {
            $('#success_lg_alert').fadeOut('fast');
            $('#danger_lg_alert').fadeOut('fast');
            }, 5000); // <-- time in milliseconds
    });
</script>
<script src="<?php echo base_url(); ?>assets/js/module/user/profile.js"></script>

<script></script>
<style type="text/css">
.xs_nav_item {
    text-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}
</style>                       
</div>
</div>
</div>