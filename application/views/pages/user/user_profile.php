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
<section class="slice sct-color-2">
    <div class="profile" ng-app="profileSectionApp" ng-controller="profileSectionCtrl">
        <div class="container">
            <div class="row cols-md-space cols-sm-space cols-xs-space">
                <!-- Alert for Ajax Profile Edit Section -->
                <div class="col-lg-3 col-md-4" id="ajax_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-success fade show" role="alert">
                    You Have Successfully Edited Your Profile!                        </div>
                </div>
                <!-- Alert for Ajax Profile Edit Section -->
                <!-- Alert for Validating Ajax Profile Edit Section -->
                <div class="col-lg-3 col-md-4" id="ajax_validation_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-danger fade show" role="alert">

                        <span id="validation_info"></span>
                    </div>
                </div>
                <!-- Alert for Validating Ajax Profile Edit Section -->
                <!-- Alerts for Member actions -->
                <div class="col-lg-3 col-md-4" id="ajax_success_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-success ajax_success_alert fade show" role="alert">
                        <!-- Success Alert Content -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-4" id="ajax_danger_alert" style="display: none; position: fixed; top: 15px; right: 0; z-index: 9999">
                    <div class="alert alert-danger ajax_danger_alert fade show" role="alert">
                        <!-- Success Alert Content -->
                    </div>
                </div>
                <!-- Alerts for Member actions -->
                <div class="col-lg-4">
                    <div class="sidebar sidebar-inverse sidebar--style-1 bg-base-1 z-depth-2-top">
                        <div class="sidebar-object mb-0">
                            <!-- Profile picture -->
                            <div class="profile-picture profile-picture--style-2">
                                <div style="border: 10px solid rgba(255, 255, 255, 0.1);width: 200px;border-radius: 50%;margin-top: 30px;">
                                    <div class="profile_img" id="show_img" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1_thumb.jpg)"></div>
                                </div>
                            </div>
                            <!-- Profile details -->
                            <div class="profile-details">
                                <h2 class="heading heading-3 strong-500 profile-name">Slade Bennett</h2>
                                <h3 class="heading heading-6 strong-400 profile-occupation mt-3">Lead Developer</h3>
                                <div class="profile-stats clearfix mt-2">
                                    <div class="stats-entry" style="width: 100%">
                                        <span class="stats-count">8</span>
                                        <span class="stats-label text-uppercase">Followers</span>
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
                                            <span class="stats-count">Bronze</span>
                                            <span class="stats-label text-uppercase">Current Package</span>
                                        </div>
                                        <div class="stats-entry">
                                            <span class="stats-count">22/10/2018</span>
                                            <span class="stats-label text-uppercase">Registration date</span>
                                        </div>
                                    </div>
                                    <div class="profile-stats clearfix mt-2">
                                        <div class="stats-entry">
                                            <span class="stats-count">107</span>
                                            <span class="stats-label text-uppercase">Incoming Interests</span>
                                        </div>
                                        <div class="stats-entry">
                                            <span class="stats-count">5</span>
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
                                        <div class="w3-col l6" style="padding:4px 4px 4px 4px">
                                            <div class="block-image relative">
                                                <div class="view view-second view--rounded light-gallery">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/gallery_image/gallery_1_2.jpg" style="max-height: 150px;">
                                                    <div class="mask mask-base-1--style-2">
                                                        <div class="view-buttons text-center">
                                                            <div class="view-buttons-inner text-center">
                                                                <a target="_blank" href="http://activeitzone.com/demo/matrimonial/uploads/gallery_image/gallery_1_2.jpg" class="c-white mr-2 l-gallery" data-toggle="light-gallery">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                                <a class="c-white ml-2" onclick="return confirm_delete(2)">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w3-col l6" style="padding:4px 4px 4px 4px">
                                            <div class="block-image relative">
                                                <div class="view view-second view--rounded light-gallery">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_3_thumb.jpg" style="max-height: 150px;">
                                                    <div class="mask mask-base-1--style-2">
                                                        <div class="view-buttons text-center">
                                                            <div class="view-buttons-inner text-center">
                                                                <a target="_blank" href="http://activeitzone.com/demo/matrimonial/uploads/gallery_image/gallery_1_2.jpg" class="c-white mr-2 l-gallery" data-toggle="light-gallery">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                                <a class="c-white ml-2" onclick="return confirm_delete(2)">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w3-col l6" style="padding:4px 4px 4px 4px">
                                            <div class="block-image relative">
                                                <div class="view view-second view--rounded light-gallery">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_7_thumb.jpg" style="max-height: 150px;">
                                                    <div class="mask mask-base-1--style-2">
                                                        <div class="view-buttons text-center">
                                                            <div class="view-buttons-inner text-center">
                                                                <a target="_blank" href="http://activeitzone.com/demo/matrimonial/uploads/gallery_image/gallery_1_2.jpg" class="c-white mr-2 l-gallery" data-toggle="light-gallery">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                                <a class="c-white ml-2" onclick="return confirm_delete(2)">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w3-col l6" style="padding:4px 4px 4px 4px">
                                            <div class="block-image relative">
                                                <div class="view view-second view--rounded light-gallery">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_5_thumb.jpg" style="max-height: 150px;">
                                                    <div class="mask mask-base-1--style-2">
                                                        <div class="view-buttons text-center">
                                                            <div class="view-buttons-inner text-center">
                                                                <a target="_blank" href="http://activeitzone.com/demo/matrimonial/uploads/gallery_image/gallery_1_2.jpg" class="c-white mr-2 l-gallery" data-toggle="light-gallery">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                                <a class="c-white ml-2" onclick="return confirm_delete(2)">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                        <img class="img-responsive img-border blah z-depth-1-bottom" style="width: 100%;border: 1px solid #e6e6e6;" src="http://activeitzone.com/demo/matrimonial/uploads/happy_story_image/default_image.jpg">
                                                                    </div>
                                                                    <input type="file" id="selected_image" name="selected_image" class="form-control w3-margin-top" required>
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
                                                <div class="modal-body" style="padding: 2rem 0 2rem 0">
                                                    <form class="col-12" id="form_change_password" role="form" enctype="multipart/form-data">
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                            <label for="img_title" class="text-uppercase w3-left c-gray-light">Old Password</label>
                                                            <input type="text" class="form-control no-resize" name="img_title" required>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                            <label for="img_title" class="text-uppercase w3-left c-gray-light">New Password</label>
                                                            <input type="text" class="form-control no-resize" name="img_title" required>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto">
                                                            <label for="img_title" class="text-uppercase w3-left c-gray-light">Confirm Password</label>
                                                            <input type="text" class="form-control no-resize" name="img_title" required>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group has-feedback col-10 ml-auto mr-auto text-center">
                                                            <button type="submit" id="btn_gallery_upload" class="btn btn-block btn-base-1 btn-shadow">Change Password</button>
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
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                            
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
                                            <div class="card-inner-title-wrapper pt-0">
                                                <h3 class="card-inner-title pull-left">Edit About Me</h3>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('about_me')"><i class="ion-checkmark"></i> Save</button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('about_me')"><i class="ion-close"></i> Cancel</button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <form id="form_about_me" class="form-default" role="form">
                                                <div class="row">
                                                    <div class="col-md-12 w3-margin-top">
                                                        <div class="form-group has-feedback">
                                                            <textarea name="about_me" class="form-control no-resize" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
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
                                                                    Samrat Ashok Munde                           
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Profile created by</span>
                                                                </td>
                                                                <td>
                                                                    Self                           
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Date Of Birth</span>
                                                                </td>
                                                                <td>
                                                                26 April 1995 </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Marital Status</span>
                                                                </td>
                                                                <td>
                                                                    Never Married
                                                                </td>                                                                
                                                                <td class="td-label">
                                                                    <span>Number of Children</span>
                                                                </td>
                                                                <td>
                                                                    2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Height(In Feet)</span>
                                                                </td>
                                                                <td>
                                                                    5.11                            
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Weight(In Kg)</span>
                                                                </td>
                                                                <td>
                                                                    80                          
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Body Type</span>
                                                                </td>
                                                                <td>
                                                                    Average                    
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Body Complexian</span>
                                                                </td>
                                                                <td>
                                                                    Fair                        
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Blood Group</span>
                                                                </td>
                                                                <td>
                                                                   O+                          
                                                               </td>
                                                               <td class="td-label">
                                                                <span>Mother Tongue</span>
                                                            </td>
                                                            <td>Marathi
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-label">
                                                                <span>Hobbies</span>
                                                            </td>
                                                            <td colspan="3">
                                                                Trekking, Painting, Reading Books.
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
                                        <div class="card-inner-title-wrapper pt-0">
                                            <h3 class="card-inner-title pull-left">Edit Basic Information</h3>
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('basic_info')"><i class="ion-checkmark"></i> Save</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('basic_info')"><i class="ion-close"></i> Cancel</button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <form id="form_basic_info" class="form-default" role="form">
                                            <div class="row">
                                                <div class="col-md-6 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="full_name" class="text-uppercase c-gray-light">Full Name</label>
                                                        <input type="text" class="form-control no-resize" name="full_name" value="xyz">
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="profile_created_by" class="text-uppercase c-gray-light">Profile created by</label>
                                                        <select name="profile_created_by" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                                            <option value="0" class="w3-light-grey">Choose one option</option>
                                                            <option value="Self">Self</option>
                                                            <option value="Father">Father</option>
                                                            <option value="Mother">Mother</option>
                                                            <option value="Brother">Brother</option>
                                                            <option value="Sister">Sister</option>
                                                            <option value="Other">Other</option>
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
                                                        <input type="date" class="form-control no-resize" name="dob">
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 w3-margin-top">
                                                    <div class="form-group has-feedback">
                                                        <label for="marital_status" class="text-uppercase c-gray-light">Marital Status</label>
                                                        <select name="marital_status" id="marital_status" class="form-control form-control selectpicker" data-placeholder="Choose one status" tabindex="2" data-hide-disabled="true">
                                                            <option value="0" class="w3-light-grey">Choose one status</option>
                                                            <option value="Never Married">Never Married</option>
                                                            <option value="Divorced">Divorced</option>
                                                            <option value="Widow" >Widow</option>
                                                            <option value="Widower" >Widower</option>
                                                            <option value=">Awaiting divorced / Legally separated">Awaiting divorced / Legally separated</option>
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
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="More">More</option>
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
                                                            <option value="Marathi" >Marathi</option>
                                                            <option value="Bengali" >Bengali</option>
                                                            <option value="German" >German</option>
                                                            <option value="English" >English</option>
                                                            <option value="Hindi" >Hindi</option>
                                                            <option value="Urdu" >Urdu</option>
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
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>
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
                                                            <option value="Average" >Average</option>
                                                            <option value="Athletic" >Athletic</option>
                                                            <option value="Slim" >Slim</option>
                                                            <option value="Heavy" >Heavy</option>                                                        </select>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 w3-margin-top">
                                                        <div class="form-group has-feedback">
                                                            <label for="body_complexion" class="text-uppercase c-gray-light">Body Complexion</label>
                                                            <select name="body_complexion" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                                                <option value="0" class="w3-light-grey">Choose one option</option>
                                                                <option value="Fair">Fair</option>
                                                                <option value="Very Fair">Very Fair</option>
                                                                <option value="Wheatish">Wheatish</option>
                                                                <option value="Wheatish Brown">Wheatish Brown</option>
                                                                <option value="Dark">Dark</option>
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
                                                            <input type="number" step="0.01" min="0" value="80" class="form-control no-resize" name="weight">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 w3-margin-top">
                                                        <div class="form-group has-feedback">
                                                            <label for="height" class="text-uppercase c-gray-light">Height (in Feet)</label>
                                                            <input type="number" step="0.01" min="0" value="6" class="form-control no-resize" name="height">
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
                                                                Engineering
                                                            </td>
                                                            <td class="td-label">
                                                                <span>School/College Name</span>
                                                            </td>
                                                            <td>
                                                                KIT College                       
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-label">
                                                                <span>University Name</span>
                                                            </td>
                                                            <td>
                                                                XYZ
                                                            </td>
                                                            <td class="td-label">
                                                                <span>Additional Education</span>
                                                            </td>
                                                            <td>
                                                                NA
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-label">
                                                                <span>Occupation Type</span>
                                                            </td>
                                                            <td>
                                                                Employee
                                                            </td>
                                                            <td class="td-label">
                                                                <span>Working Field</span>
                                                            </td>
                                                            <td>
                                                                Private Sector
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="td-label">
                                                                <span>Company Name</span>
                                                            </td>
                                                            <td>
                                                             Bizmo Tech
                                                         </td>
                                                         <td class="td-label">
                                                            <span>Designation</span>
                                                        </td>
                                                        <td>
                                                          Software Developer                     
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                    <td class="td-label">
                                                        <span>Workplace Address</span>
                                                    </td>
                                                    <td colspan="3">
                                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                 </td>

                                             </tr>
                                             <tr>
                                                <td class="td-label">
                                                    <span>Monthly Income</span>
                                                </td>
                                                <td>
                                                 12000
                                             </td>
                                             <td class="td-label">
                                                <span>Annual Income</span>
                                            </td>
                                            <td>
                                               1,44,000                     
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
                    <div class="card-inner-title-wrapper pt-0">
                        <h3 class="card-inner-title pull-left">Edit Educational and Professional</h3>
                        <div class="pull-right">
                            <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('edu_professional')"><i class="ion-checkmark"></i> Save</button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('edu_professional')"><i class="ion-close"></i> Cancel</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <form id="form_basic_info" class="form-default" role="form">
                        <div class="row">
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="educational_field" class="text-uppercase c-gray-light">Educational Field</label>
                                    <input type="text" class="form-control no-resize" name="educational_field" value="B.E. Computer science">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="clg_name" class="text-uppercase c-gray-light">School/ College Name</label>
                                    <input type="text" class="form-control no-resize" name="clg_name">   
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="university" class="text-uppercase c-gray-light">University/ Board Name</label>
                                    <input type="text" class="form-control no-resize" name="university">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="additional_education" class="text-uppercase c-gray-light">Additional Education</label>
                                    <input type="text" class="form-control no-resize" name="additional_education">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="occupation_type" class="text-uppercase c-gray-light">Occupation Type</label>
                                    <input type="text" class="form-control no-resize" name="occupation_type">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="working_sector" class="text-uppercase c-gray-light">Working Sector</label>
                                    <select name="working_sector" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one sector" tabindex="2" data-hide-disabled="true">
                                        <option value="0" class="w3-light-grey">Choose one sector</option>
                                        <option value="Private Sector">Private Sector</option>
                                        <option value="Government Sector">Government Sector</option>
                                        <option value="Business Sector">Business Sector</option>
                                        <option value="Other">Other</option>
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
                                    <input type="text" class="form-control no-resize" name="company_name">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="designation" class="text-uppercase c-gray-light">Designation</label>
                                    <input type="text" class="form-control no-resize" name="designation">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="workplace_address" class="text-uppercase c-gray-light">Workplace Address</label>
                                    <textarea name="workplace_address" class="form-control no-resize" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="monthly_income" class="text-uppercase c-gray-light">Monthly Income</label>
                                    <input type="text" class="form-control no-resize" name="monthly_income">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 w3-margin-top">
                                <div class="form-group has-feedback">
                                    <label for="annual_income" class="text-uppercase c-gray-light">Annual Income</label>
                                    <input type="text" class="form-control no-resize" name="annual_income">
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
                                        ABC
                                    </td>
                                    <td class="td-label">
                                        <span>Father Occupation</span>
                                    </td>
                                    <td>
                                        Lead Developer                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-label">
                                        <span>Mother Name</span>
                                    </td>
                                    <td>
                                        XYZ                          
                                    </td>
                                    <td class="td-label">
                                        <span>Mother Occupation</span>
                                    </td>
                                    <td>
                                        Home Maker                           
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-label">
                                        <span>Country</span>
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td class="td-label">
                                        State
                                    </td>
                                    <td>Maharashtra
                                    </td>

                                </tr>
                                <tr>
                                    <td class="td-label">
                                        <span>Native Place</span>
                                    </td>
                                    <td>
                                        Kolhapur
                                    </td>
                                    <td class="td-label">
                                        Residential Address
                                    </td>
                                    <td>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </td>

                                </tr>
                                <tr>
                                    <td class="td-label">
                                     Contact number 1
                                 </td>
                                 <td>
                                    987654321
                                </td>
                                <td class="td-label">
                                 Contact number 2
                             </td>
                             <td>
                                987654321
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
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">Edit Family Information</h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('family_info')"><i class="ion-checkmark"></i> Save</button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('family_info')"><i class="ion-close"></i> Cancel</button>
            </div>
        </div>
        <div class="clearfix"></div>
        <form id="form_basic_info" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="father_name" class="text-uppercase c-gray-light">Father's Name</label>
                        <input type="text" class="form-control no-resize" name="father_name" value="B.E. Computer science">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="father_occupation" class="text-uppercase c-gray-light">Father's Occupation</label>
                        <input type="text" class="form-control no-resize" name="father_occupation">   
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="mother_name" class="text-uppercase c-gray-light">Mother's Name</label>
                        <input type="text" class="form-control no-resize" name="mother_name">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="mother_occupation" class="text-uppercase c-gray-light">Mother's Occupation</label>
                        <input type="text" class="form-control no-resize" name="mother_occupation">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="residence_address" class="text-uppercase c-gray-light">Residential Address</label>
                        <textarea name="residence_address" class="form-control no-resize" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>  
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="country" class="text-uppercase c-gray-light">Country</label>
                        <select name="country" id="country" ng-model="country" ng-change="getCountryState()" class="form-control form-control selectpicker" data-placeholder="Choose country" tabindex="2" data-hide-disabled="true">
                            <option value="">Choose country</option>
                            <?php
                            for ($i = 0; $i < count($country); $i++) {         ?>
                                <option value="<?php echo $country[$i]['name'].'/'.$country[$i]['id']; ?>">
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
                        <select ng-change="getStateCity()" ng-model="state" id="state" name="state" class="form-control form-control selectpicker" tabindex="2" data-hide-disabled="true">
                            <option value="">Choose a Country first</option>
                        </select>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="native_place" class="text-uppercase c-gray-light">Native Place</label>
                        <select id="native_place" name="native_place" class="form-control form-control selectpicker" tabindex="2" data-hide-disabled="true">
                            <option value="">Choose a State first</option>
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
                        <input type="number" class="form-control no-resize" name="contact_no_1">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6 w3-margin-top">
                    <div class="form-group has-feedback">
                        <label for="contact_no_2" class="text-uppercase c-gray-light">Contact No.2</label>
                        <input type="number" class="form-control no-resize" name="contact_no_2">
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
                                    xyz                            
                                </td>
                                <td class="td-label">
                                    <span>Drink</span>
                                </td>
                                <td>
                                    No                            
                                </td>
                            </tr>
                            <tr>
                                <td class="td-label">
                                    <span>Smoke</span>
                                </td>
                                <td>
                                    No                            
                                </td>
                                <td class="td-label">
                                    <span>Living With</span>
                                </td>
                                <td>
                                    Family                            
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
            <form id="form_life_style" class="form-default" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="diet" class="text-uppercase c-gray-light">Diet</label>
                            <select name="diet" onchange="(this.value,this)" class="form-control form-control selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                <option value="0" class="w3-light-grey">Choose one option</option>
                                <option value="Vegeterian">Vegeterian</option>
                                <option value="Non-Vegeterian">Non-Vegeterian</option>
                                <option value="Eggeterian">Eggeterian</option>
                            </select>  
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="drink" class="text-uppercase c-gray-light">Drink</label>
                            <select name="drink" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose one option" tabindex="2" data-hide-disabled="true">
                                <option value="">Choose one option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Doesn't Matter">Doesn't Matter</option>
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
                                <option value="">Choose one option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Doesn't Matter">Doesn't Matter</option>
                            </select>                        
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="living_with" class="text-uppercase c-gray-light">Living With</label>
                            <input type="text" class="form-control no-resize" name="living_with">
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
                        <tr>
                            <td colspan="4" class="w3-text-white" style="background:#5E32E1">Relative No. 1 </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span>Relatives Name</span>
                            </td>
                            <td>
                                ABC
                            </td>
                            <td class="td-label">
                                <span>Relation with Me</span>
                            </td>
                            <td>
                             Maternal Uncle/ Mama                          
                         </td>
                     </tr>
                     <tr>
                        <td class="td-label">
                         Contact number
                     </td>
                     <td>
                        987654321
                    </td>
                    <td class="td-label">
                        Residential Address
                    </td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </td>

                </tr>
                <tr>
                    <td colspan="4" class="w3-text-white" style="background:#5E32E1">Relative No. 2 </td>
                </tr>
                <tr>
                    <td class="td-label">
                        <span>Relatives Name</span>
                    </td>
                    <td>
                        XYZ
                    </td>
                    <td class="td-label">
                        <span>Relation with Me</span>
                    </td>
                    <td>
                     Paternal Uncle/ Kaka                          
                 </td>
             </tr>
             <tr>
                <td class="td-label">
                 Contact number
             </td>
             <td>
                987654321
            </td>
            <td class="td-label">
                Residential Address
            </td>
            <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
<!-- view relatives div ends -->
<!-- edit relatives div -->
<div id="edit_relatives_info" style="display: none;">
    <div class="card-inner-title-wrapper pt-0">
        <h3 class="card-inner-title pull-left">
            Edit Relatives Information
        </h3>
        <div class="pull-right">
            <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('relatives_info')"><i class="ion-checkmark"></i> Save</button>
            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('relatives_info')"><i class="ion-close"></i> Cancel</button>
        </div>
    </div>

    <div class="clearfix"></div>
    <form id="form_life_style" class="form-default" role="form">
        <div class="row w3-margin-top">
            <div class="col-md-12 w3-text-white">
                <p class=" w3-padding-small" style="background:#5E32E1">Relative No.1</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group has-feedback">
                    <label for="relative_name_1" class="text-uppercase c-gray-light">Relative Full Name</label>
                    <input type="text" class="form-control no-resize" name="relative_name_1">  
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label for="relative_contact_1" class="text-uppercase c-gray-light">Relative Contact Number</label>
                    <input type="text" class="form-control no-resize" name="relative_contact_1">  
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label for="relative_relation_1" class="text-uppercase c-gray-light">Relation with you</label>
                    <input type="text" class="form-control no-resize" name="relative_relation_1">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group has-feedback">
                    <label for="relative_address_1" class="text-uppercase c-gray-light">Relative Address</label>
                    <textarea name="residence_address" class="form-control no-resize" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea> 
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="container no-padding" id="multiple_relativeDiv"></div>
        <div class="row w3-margin-bottom">
            <div class="col-md-12">
                <button type="button" id="add_moreRelative" class="btn btn-sm w3-right btn-primary btn-icon-only btn-shadow"><i class="ion-plus"></i> Add more Relative</button>
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
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">Edit Expectations</h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('expectations')"><i class="ion-checkmark"></i> Save</button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('expectations')"><i class="ion-close"></i> Cancel</button>
            </div>
        </div>
        <div class="clearfix"></div>
        <form id="form_about_me" class="form-default" role="form">
            <div class="row">
                <div class="col-md-12 w3-margin-top">
                    <div class="form-group has-feedback">
                        <textarea name="expectations" class="form-control no-resize" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
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
    <div id="info_introduction">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
            Documents Uploaded  </h3>
        </div>
        <div class="clearfix"></div>
        <form id="form_life_style" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="document_type" class="text-uppercase c-gray-light">Document Type</label>
                        <select name="document_type" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a document" tabindex="2" data-hide-disabled="true">
                            <option value="0" class="w3-light-grey">Choose one document</option>
                            <option value="1">Adhaar Card</option>
                            <option value="2">PAN Card</option>
                            <option value="3">Electricity Bill</option>
                        </select>                        
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="diet" class="text-uppercase c-gray-light">Upload Document</label>
                        <input type="file" class="form-control no-resize" name="diet" value="xyz" style="padding-top:4px;padding-bottom:4px">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary btn-md btn-icon-only btn-shadow" onclick="save_section('life_style')"><i class="fa fa-upload"></i> Upload Document</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row w3-padding">
            <label class="text-uppercase c-gray"><b><i class="fa fa-file"></i> Uploaded Documents: </b></label>
            <div class="col-md-12">
                <div class="col-md-12 w3-card">
                    <div class="w3-col l12">
                        <a class="btn w3-text-red w3-right w3-small" style="padding: 2px"><i class="fa fa-remove"></i> remove</a>
                    </div>
                    <p class="w3-large"> Adhaar Card <span class="badge w3-green">Approved</span>   </p>                     
                    <p>
                        <label class="text-uppercase c-gray-light">Document: </label>
                        <a class="btn" target="_self" href="<?php echo base_url(); ?>assets/client/template/front/images/icons/addmore1.jpg" download="Document name demo" style="padding:0"><label class="w3-small w3-text-grey"><i class="fa fa-paperclip"></i> Document Name Demo</label></a>
                    </p>
                </div>
                <div class="col-md-12 w3-card"> <div class="w3-col l12">
                    <a class="btn w3-text-red w3-right w3-small" style="padding: 2px"><i class="fa fa-remove"></i> remove</a>
                </div>
                <p class="w3-large"> PAN Card Bill <span class="badge w3-grey w3-text-white">Pending</span>   </p>                     
                <p>
                    <label class="text-uppercase c-gray-light">Document: </label>
                    <a class="btn" target="_self" href="<?php echo base_url(); ?>assets/client/template/front/images/icons/addmore1.jpg" download="Document name demo" style="padding:0"><label class="w3-small w3-text-grey"><i class="fa fa-paperclip"></i> Document Name Demo</label></a>
                </p>

            </div>
            <div class="col-md-12 w3-card"> 
                <div class="w3-col l12">
                    <a class="btn w3-text-red w3-right w3-small" style="padding: 2px"><i class="fa fa-remove"></i> remove</a>
                </div>
                <p class="w3-large"> Electricity Bill <span class="badge w3-red">Rejected</span>   </p>                     
                <p>
                    <label class="text-uppercase c-gray-light">Document: </label>
                    <a class="btn" target="_self" href="<?php echo base_url(); ?>assets/client/template/front/images/icons/addmore1.jpg" download="Document name demo" style="padding:0"><label class="w3-small w3-text-red"><i class="fa fa-paperclip"></i> Document Name Demo</label></a>
                </p>
                <p>
                    <label class="text-uppercase c-gray-light">Reason: </label>
                    <b class="w3-text-red">Image uploaded is not so clear.</b>
                </p>
            </div>
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