    <div class="st-content">
        <div class="st-content-inner">

            <div class="sticky-content">
               <script type="text/javascript">
                $(document).ready(function () {
                    $('.set_langs').on('click', function () {
                        var lang_url = $(this).data('href');
                        $.ajax({url: lang_url, success: function (result) {
                            location.reload();
                        }});
                    });
                });
            </script>
            <style>
            .navbar-brand {
                display: inline-block;
                padding-top: 0px; 
                padding-bottom: 0px; 
                margin-right: 0px; 
                font-size: 1.25rem;
                line-height: inherit;
                white-space: nowrap;
            }
            .top-navbar .top-navbar-menu > ul.top-menu > li.dropdown > a:after {float: none;}
            .blink_me {
                animation: blinker 1.5s linear infinite;
            }
            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
            </style><style type="text/css">
            @media (max-width: 991px) {
                .hidden_xs { display: none !important; }
            }
            @media (min-width: 992px) {
                .visible_xs { display: none !important; }
            }
        </style>
        <div class="hidden_xs">
            <nav class="navbar navbar-expand-lg  navbar--style-1 navbar-light bg-default navbar--shadow navbar--uppercase profile-nav">
                <div class="container navbar-container">
                    <!-- Brand/Logo -->

                    <div class="d-inline-block">
                        <!-- Navbar toggler  -->
                        <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbar_main">
                        <ul class="navbar-nav " data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">
                            <li class="nav-item">
                                <a href="http://activeitzone.com/demo/matrimonial/home/profile" class="nav-link p_nav active">
                                    <i class="fa fa-user"></i> Profile                        </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <section class="slice sct-color-2">
                <div class="profile">
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
                                            <div class="profile-connect mt-1 mb-0" id="save_button_section" style="display: none">
                                                <button type="button" class="btn btn-styled btn-xs btn-base-2" id="save_image">Save Image</button>
                                            </div>
                                            <label class="btn-aux" for="profile_image" style="cursor: pointer;">
                                                <i class="ion ion-edit"></i>
                                            </label>
                                            <form action="http://activeitzone.com/demo/matrimonial/home/profile/update_image" method="POST" id="profile_image_form" enctype="multipart/form-data">
                                                <input type="file" style="display: none;" id="profile_image" name="profile_image">
                                            </form>
                <!-- <a href="#" class="btn-aux">
                    <i class="ion ion-edit"></i>
                </a> -->
            </div>
            <!-- Profile details -->
            <div class="profile-details">
                <h2 class="heading heading-3 strong-500 profile-name">Slade Bennett</h2>
                <h3 class="heading heading-6 strong-400 profile-occupation mt-3">Lead Developer</h3>
                <div class="profile-stats clearfix mt-2">

                </div>
                <!-- Profile connect -->

            </div>
            <!-- Profile stats -->
            <div class="profile-useful-links clearfix">
                <div class="useful-links">
                   <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav" onclick="profile_load('change_pass')">
                    <b style="font-size: 12px">Change Password</b>
                </a>

            </div>
        </div>
    </div>
</div>

<script>
    $("#profile_image").change(function () {
        readURL(this);
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#show_img").css({
                    "background-image" : "url("+ e.target.result +")"
                });
            }
            reader.readAsDataURL(input.files[0]);
            $("#save_button_section").show();
        }
    }
    $("#save_image").click(function(e) {
        e.preventDefault();
            // alert('asdas');
            $("#profile_image_form").submit();
        })
    </script>                    </div>
    <div class="col-lg-8">
        <div class="widget">
            <div class="card z-depth-2-top" id="profile_load">
                <div class="card-title">
                    <h3 class="heading heading-6 strong-500 pull-left">
                        <b>Official Information</b>
                    </h3>
                    <div class="pull-right">
                        <a href="#"><i class="ion-edit"></i> Edit All</a>
                    </div>
                </div>
                <div class="card-body pt-2" style="padding: 1rem 0.5rem;">
                    <!-- Contact information -->
                    <div id="section_introduction">
                       <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                        <tbody>
                            <tr>
                                <th class="td-label">
                                    <span>Gender</span>
                                </th>
                                <th> Male </th>

                                <th class="td-label">
                                    <span>Profile Number</span>
                                </th>
                                <th>
                                    BUDHMATRI001
                                </th>
                            </tr>
                            <tr>
                                <th class="td-label">
                                    <span>Package</span>
                                </th>
                                <th>
                                    Premiun 
                                </th>
                                <th class="td-label">
                                    <span>Registration Date</span>
                                </th>
                                <th>
                                 16/10/2018           
                             </th>
                         </tr>
                     </tbody>
                 </table>
                 <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                    <div id="info_introduction">
                        <div class="card-inner-title-wrapper pt-0">
                            <h3 class="card-inner-title pull-left">
                            About Me  </h3>
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
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                           
            </div>
            <div id="section_basic_info">
                <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                    <div id="info_basic_info">
                        <div class="card-inner-title-wrapper pt-0">
                            <h3 class="card-inner-title pull-left">
                                Basic Information  
                            </h3>
                            <div class="pull-right">

                            </div>
                        </div>
                        <div class="table-full-width">
                            <div class="table-full-width">
                                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                    <tbody>
                                        <tr>
                                            <td class="td-label">
                                                <span>Profile Created By</span>
                                            </td>
                                            <td>
                                                Father                           
                                            </td>
                                            <td class="td-label">
                                                <span>Full Name</span>
                                            </td>
                                            <td>
                                                Samrat Munde                         
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-label">
                                                <span>Date Of Birth</span>
                                            </td>
                                            <td>
                                            26 April 1995 </td>
                                            <td class="td-label">
                                                <span>Marital Status</span>
                                            </td>
                                            <td>
                                                Never Married
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
                                            <span>Date Of Birth</span>
                                        </td>
                                        <td>
                                        13/12/1992                            </td>



                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>                        
        </div>
        <div id="section_present_address">
          <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
            <div id="info_present_address">
                <div class="card-inner-title-wrapper pt-0">
                    <h3 class="card-inner-title pull-left">
                        Educational and Professional Information
                    </h3>
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


</div>
</div>
<div id="section_education_and_career">
    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
        <div id="info_education_and_career">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">
                  Family Information          
              </h3>
              <div class="pull-right">

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
                                <span>Native Place</span>
                            </td>
                            <td>
                                Kolhapur
                            </td>
                            <td class="td-label">
                                Residentaional Address
                            </td>
                            <td>
                                gahg
                            </td>

                        </tr>
                        <td class="td-label">
                         Contact number
                     </td>
                     <td>
                        987654321
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="edit_education_and_career" style="display: none;">
    <div class="card-inner-title-wrapper pt-0">
        <h3 class="card-inner-title pull-left">
        Education And Career            </h3>
        <div class="pull-right">
            <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('education_and_career')"><i class="ion-checkmark"></i></button>
            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('education_and_career')"><i class="ion-close"></i></button>
        </div>
    </div>

    <div class="clearfix"></div>
    <form id="form_education_and_career" class="form-default" role="form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label for="highest_education" class="text-uppercase c-gray-light">Highest Education</label>
                    <input type="text" class="form-control no-resize" name="highest_education" value="MSc">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label for="occupation" class="text-uppercase c-gray-light">Occupation</label>
                    <input type="text" class="form-control no-resize" name="occupation" value="Lead Developer">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label for="annual_income" class="text-uppercase c-gray-light">Annual Income</label>
                    <input type="text" class="form-control no-resize" name="annual_income" value="100,000 USD">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>                                        </div>
<div id="section_physical_attributes">
    <script src="http://activeitzone.com/demo/matrimonial/template/front/js/jquery.inputmask.bundle.min.js"></script>
    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
        <div id="info_physical_attributes">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">
                Physical Attributes            </h3>
                <div class="pull-right">
                    <button type="button" id="unhide_physical_attributes" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('physical_attributes')">
                        <i class="fa fa-unlock"></i> Show                </button>
                        <button type="button" id="hide_physical_attributes" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('physical_attributes')">
                            <i class="fa fa-lock"></i> Hide                </button>
                            <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('physical_attributes')">
                                <i class="ion-edit"></i>
                            </button>
                        </div>
                    </div>
                    <div class="table-full-width">
                        <div class="table-full-width">
                            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                <tbody>
                                    <tr>
                                        <td class="td-label">
                                            <span>Height</span>
                                        </td>
                                        <td>
                                        6.00 Feet                            </td>
                                        <td class="td-label">
                                            <span>Weight</span>
                                        </td>
                                        <td>
                                        78kg                            </td>
                                    </tr>
                                    <tr>
                                        <td class="td-label">
                                            <span>Eye Color</span>
                                        </td>
                                        <td>
                                        Brown                            </td>
                                        <td class="td-label">
                                            <span>Hair Color</span>
                                        </td>
                                        <td>
                                        Black                            </td>
                                    </tr>
                                    <tr>
                                        <td class="td-label">
                                            <span>Complexion</span>
                                        </td>
                                        <td>
                                        None                            </td>
                                        <td class="td-label">
                                            <span>Blood Group</span>
                                        </td>
                                        <td>
                                        A+                            </td>
                                    </tr>
                                    <tr>
                                        <td class="td-label">
                                            <span>Body Type</span>
                                        </td>
                                        <td>
                                        Fit                            </td>
                                        <td class="td-label">
                                            <span>Body Art</span>
                                        </td>
                                        <td>
                                        Slim                            </td>
                                    </tr>
                                    <tr>
                                        <td class="td-label">
                                            <span>Any Disability</span>
                                        </td>
                                        <td>
                                        None                            </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="edit_physical_attributes" style="display: none">
                    <div class="card-inner-title-wrapper pt-0">
                        <h3 class="card-inner-title pull-left">
                        Physical Attributes            </h3>
                        <div class="pull-right">
                            <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('physical_attributes')"><i class="ion-checkmark"></i></button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('physical_attributes')"><i class="ion-close"></i></button>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <form id="form_physical_attributes" class="form-default" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="height" class="text-uppercase c-gray-light">Height</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control no-resize height_mask" aria-describedby="text-feet" name="height" value="6.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text small ml-2" id="text-feet">Feet</span>
                                        </div>
                                    </div>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="weight" class="text-uppercase c-gray-light">Weight</label>
                                    <input type="text" class="form-control no-resize" name="weight" value="78kg">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="eye_color" class="text-uppercase c-gray-light">Eye Color</label>
                                    <input type="text" class="form-control no-resize" name="eye_color" value="Brown">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="hair_color" class="text-uppercase c-gray-light">Hair Color</label>
                                    <input type="text" class="form-control no-resize" name="hair_color" value="Black">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="complexion" class="text-uppercase c-gray-light">Complexion</label>
                                    <input type="text" class="form-control no-resize" name="complexion" value="None">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="blood_group" class="text-uppercase c-gray-light">Blood Group</label>
                                    <input type="text" class="form-control no-resize" name="blood_group" value="A+">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="body_type" class="text-uppercase c-gray-light">Body Type</label>
                                    <input type="text" class="form-control no-resize" name="body_type" value="Fit">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="body_art" class="text-uppercase c-gray-light">Body Art</label>
                                    <input type="text" class="form-control no-resize" name="body_art" value="Slim">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="any_disability" class="text-uppercase c-gray-light">Any Disability</label>
                                    <input type="text" class="form-control no-resize" name="any_disability" value="None">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $(".height_mask").inputmask({
                        mask: "9.99",
                        greedy: false,
                        definitions: {
                            '*': {
                                validator: "[0-9]"
                            }
                        }
                    });
                });
            </script>                                        </div>
            <div id="section_language">
                <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                    <div id="info_language">
                        <div class="card-inner-title-wrapper pt-0">
                            <h3 class="card-inner-title pull-left">
                            Language            </h3>
                            <div class="pull-right">
                                <button type="button" id="unhide_language" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('language')">
                                    <i class="fa fa-unlock"></i> Show                </button>
                                    <button type="button" id="hide_language" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('language')">
                                        <i class="fa fa-lock"></i> Hide                </button>
                                        <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('language')">
                                            <i class="ion-edit"></i>
                                        </button> 
                                    </div>
                                </div>
                                <div class="table-full-width">
                                    <div class="table-full-width">
                                        <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                            <tbody>
                                                <tr>
                                                    <td class="td-label">
                                                        <span>Mother Tongue</span>
                                                    </td>
                                                    <td>
                                                    Bengali                            </td>
                                                    <td class="td-label">
                                                        <span>Language</span>
                                                    </td>
                                                    <td>
                                                    Bengali                            </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-label">
                                                        <span>Speak</span>
                                                    </td>
                                                    <td>
                                                    English                            </td>
                                                    <td class="td-label">
                                                        <span>Read</span>
                                                    </td>
                                                    <td>
                                                    English                            </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>    
                            </div>

                            <div id="edit_language" style="display: none">
                                <div class="card-inner-title-wrapper pt-0">
                                    <h3 class="card-inner-title pull-left">
                                    Language            </h3>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('language')"><i class="ion-checkmark"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('language')"><i class="ion-close"></i></button>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <form id="form_language" class="form-default" role="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label for="mother_tongue" class="text-uppercase c-gray-light">Mother Tongue</label>
                                                <select name="mother_tongue" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a mother_tongue" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2" selected=".&quot;selected&quot;">Bengali</option><option value="4">German</option><option value="7">English</option><option value="8">Hindi</option><option value="9">Urdu</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label for="language" class="text-uppercase c-gray-light">Language</label>
                                                <select name="language" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a language" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2" selected=".&quot;selected&quot;">Bengali</option><option value="4">German</option><option value="7">English</option><option value="8">Hindi</option><option value="9">Urdu</option></select>                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label for="speak" class="text-uppercase c-gray-light">Speak</label>
                                                <select name="speak" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a speak" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2">Bengali</option><option value="4">German</option><option value="7" selected=".&quot;selected&quot;">English</option><option value="8">Hindi</option><option value="9">Urdu</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label for="read" class="text-uppercase c-gray-light">Read</label>
                                                <select name="read" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a read" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2">Bengali</option><option value="4">German</option><option value="7" selected=".&quot;selected&quot;">English</option><option value="8">Hindi</option><option value="9">Urdu</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                                        </div>
                        <div id="section_hobbies_and_interest">
                            <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                <div id="info_hobbies_and_interest">
                                    <div class="card-inner-title-wrapper pt-0">
                                        <h3 class="card-inner-title pull-left">
                                        Hobbies And Interests            </h3>
                                        <div class="pull-right">
                                            <button type="button" id="unhide_hobbies_and_interest" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('hobbies_and_interest')">
                                                <i class="fa fa-unlock"></i> Show                </button>
                                                <button type="button" id="hide_hobbies_and_interest" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('hobbies_and_interest')">
                                                    <i class="fa fa-lock"></i> Hide                </button>
                                                    <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('hobbies_and_interest')">
                                                        <i class="ion-edit"></i>
                                                    </button> 
                                                </div>
                                            </div>
                                            <div class="table-full-width">
                                                <div class="table-full-width">
                                                    <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                        <tbody>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Hobby</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Interest</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Music</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Books</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Movie</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>TV Show</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Sports Show</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Fitness Activity</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-label">
                                                                    <span>Cuisine</span>
                                                                </td>
                                                                <td>

                                                                </td>
                                                                <td class="td-label">
                                                                    <span>Dress Style</span>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="edit_hobbies_and_interest" style="display: none">
                                            <div class="card-inner-title-wrapper pt-0">
                                                <h3 class="card-inner-title pull-left">
                                                Hobbies And Interests            </h3>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('hobbies_and_interest')"><i class="ion-checkmark"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('hobbies_and_interest')"><i class="ion-close"></i></button>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                            <form id="form_hobbies_and_interest" class="form-default" role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="hobby" class="text-uppercase c-gray-light">Hobby</label>
                                                            <input type="text" class="form-control no-resize" name="hobby" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="interest" class="text-uppercase c-gray-light">Interest</label>
                                                            <input type="text" class="form-control no-resize" name="interest" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="music" class="text-uppercase c-gray-light">Music</label>
                                                            <input type="text" class="form-control no-resize" name="music" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="books" class="text-uppercase c-gray-light">Books</label>
                                                            <input type="text" class="form-control no-resize" name="books" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="movie" class="text-uppercase c-gray-light">Movie</label>
                                                            <input type="text" class="form-control no-resize" name="movie" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="tv_show" class="text-uppercase c-gray-light">TV Show</label>
                                                            <input type="text" class="form-control no-resize" name="tv_show" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="sports_show" class="text-uppercase c-gray-light">Sports Show</label>
                                                            <input type="text" class="form-control no-resize" name="sports_show" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="fitness_activity" class="text-uppercase c-gray-light">Fitness Activity</label>
                                                            <input type="text" class="form-control no-resize" name="fitness_activity" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="cuisine" class="text-uppercase c-gray-light">Cuisine</label>
                                                            <input type="text" class="form-control no-resize" name="cuisine" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label for="dress_style" class="text-uppercase c-gray-light">Dress Style</label>
                                                            <input type="text" class="form-control no-resize" name="dress_style" value="">
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                                        </div>
                                    <div id="section_personal_attitude_and_behavior">
                                        <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                            <div id="info_personal_attitude_and_behavior">
                                                <div class="card-inner-title-wrapper pt-0">
                                                    <h3 class="card-inner-title pull-left">
                                                    Personal Attitude And Behavior            </h3>
                                                    <div class="pull-right">
                                                        <button type="button" id="unhide_personal_attitude_and_behavior" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('personal_attitude_and_behavior')">
                                                            <i class="fa fa-unlock"></i> Show                </button>
                                                            <button type="button" id="hide_personal_attitude_and_behavior" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('personal_attitude_and_behavior')">
                                                                <i class="fa fa-lock"></i> Hide                </button>
                                                                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('personal_attitude_and_behavior')">
                                                                    <i class="ion-edit"></i>
                                                                </button>  
                                                            </div>
                                                        </div>
                                                        <div class="table-full-width">
                                                            <div class="table-full-width">
                                                                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="td-label">
                                                                                <span>Affection</span>
                                                                            </td>
                                                                            <td>
                                                                            ????                            </td>
                                                                            <td class="td-label">
                                                                                <span>Humor</span>
                                                                            </td>
                                                                            <td>
                                                                            ????                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-label">
                                                                                <span>Political View</span>
                                                                            </td>
                                                                            <td>
                                                                            Not Interested                            </td>
                                                                            <td class="td-label">
                                                                                <span>Religious Service</span>
                                                                            </td>
                                                                            <td>
                                                                            Ok                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="edit_personal_attitude_and_behavior" style="display: none">
                                                        <div class="card-inner-title-wrapper pt-0">
                                                            <h3 class="card-inner-title pull-left">
                                                            Personal Attitude And Behavior            </h3>
                                                            <div class="pull-right">
                                                                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('personal_attitude_and_behavior')"><i class="ion-checkmark"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('personal_attitude_and_behavior')"><i class="ion-close"></i></button>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                        <form id="form_personal_attitude_and_behavior" class="form-default" role="form">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-feedback">
                                                                        <label for="affection" class="text-uppercase c-gray-light">Affection</label>
                                                                        <input type="text" class="form-control no-resize" name="affection" value="????">
                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-feedback">
                                                                        <label for="humor" class="text-uppercase c-gray-light">Humor</label>
                                                                        <input type="text" class="form-control no-resize" name="humor" value="????">
                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-feedback">
                                                                        <label for="political_view" class="text-uppercase c-gray-light">Political View</label>
                                                                        <input type="text" class="form-control no-resize" name="political_view" value="Not Interested">
                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group has-feedback">
                                                                        <label for="religious_service" class="text-uppercase c-gray-light">Religious Service</label>
                                                                        <input type="text" class="form-control no-resize" name="religious_service" value="Ok">
                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>                                        </div>
                                                <div id="section_residency_information">
                                                    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                        <div id="info_residency_information">
                                                            <div class="card-inner-title-wrapper pt-0">
                                                                <h3 class="card-inner-title pull-left">
                                                                Residency Information            </h3>
                                                                <div class="pull-right">
                                                                    <button type="button" id="unhide_residency_information" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('residency_information')">
                                                                        <i class="fa fa-unlock"></i> Show                </button>
                                                                        <button type="button" id="hide_residency_information" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('residency_information')">
                                                                            <i class="fa fa-lock"></i> Hide                </button>
                                                                            <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('residency_information')">
                                                                                <i class="ion-edit"></i>
                                                                            </button>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-full-width">
                                                                        <div class="table-full-width">
                                                                            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="td-label">
                                                                                            <span>Birth Country</span>
                                                                                        </td>
                                                                                        <td>
                                                                                        Taiwan                            </td>
                                                                                        <td class="td-label">
                                                                                            <span>Residency Country</span>
                                                                                        </td>
                                                                                        <td>
                                                                                        Bahrain                            </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="td-label">
                                                                                            <span>Citizenship Country</span>
                                                                                        </td>
                                                                                        <td>
                                                                                        United States                            </td>
                                                                                        <td class="td-label">
                                                                                            <span>Grow Up Country</span>
                                                                                        </td>
                                                                                        <td>
                                                                                        Tuvalu                            </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="td-label">
                                                                                            <span>Immigration Status</span>
                                                                                        </td>
                                                                                        <td>
                                                                                        None                            </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="edit_residency_information" style="display: none;">
                                                                    <div class="card-inner-title-wrapper pt-0">
                                                                        <h3 class="card-inner-title pull-left">
                                                                        Residency Information            </h3>
                                                                        <div class="pull-right">
                                                                            <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('residency_information')"><i class="ion-checkmark"></i></button>
                                                                            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('residency_information')"><i class="ion-close"></i></button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="clearfix"></div>
                                                                    <form id="form_residency_information" class="form-default" role="form">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group has-feedback">
                                                                                    <label for="birth_country" class="text-uppercase c-gray-light">Birth Country</label>
                                                                                    <select name="birth_country" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a birth_country" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214" selected=".&quot;selected&quot;">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group has-feedback">
                                                                                    <label for="residency_country" class="text-uppercase c-gray-light">Residency Country</label>
                                                                                    <select name="residency_country" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a residency_country" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17" selected=".&quot;selected&quot;">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group has-feedback">
                                                                                    <label for="citizenship_country" class="text-uppercase c-gray-light">Citizenship Country</label>
                                                                                    <select name="citizenship_country" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a citizenship_country" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231" selected=".&quot;selected&quot;">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group has-feedback">
                                                                                    <label for="grow_up_country" class="text-uppercase c-gray-light">Grow Up Country</label>
                                                                                    <select name="grow_up_country" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a grow_up_country" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226" selected=".&quot;selected&quot;">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group has-feedback">
                                                                                    <label for="immigration_status" class="text-uppercase c-gray-light">Immigration Status</label>
                                                                                    <input type="text" class="form-control no-resize" name="immigration_status" value="None">
                                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>                                        </div>
                                                            <div id="section_spiritual_and_social_background">
                                                                <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                    <div id="info_spiritual_and_social_background">
                                                                        <div class="card-inner-title-wrapper pt-0">
                                                                            <h3 class="card-inner-title pull-left">
                                                                            Spiritual And Social Background            </h3>
                                                                            <div class="pull-right">
                                                                                <button type="button" id="unhide_spiritual_and_social_background" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('spiritual_and_social_background')">
                                                                                    <i class="fa fa-unlock"></i> Show                </button>
                                                                                    <button type="button" id="hide_spiritual_and_social_background" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('spiritual_and_social_background')">
                                                                                        <i class="fa fa-lock"></i> Hide                </button>
                                                                                        <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('spiritual_and_social_background')">
                                                                                            <i class="ion-edit"></i>
                                                                                        </button>  
                                                                                    </div>
                                                                                </div>
                                                                                <div class="table-full-width">
                                                                                    <div class="table-full-width">
                                                                                        <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="td-label">
                                                                                                        <span>Religion</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    Cristianity                            </td>
                                                                                                    <td class="td-label">
                                                                                                        <span>Caste / Sect</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    Catholic                            </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="td-label">
                                                                                                        <span>Sub-Caste</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    </td>
                                                                                                    <td class="td-label">
                                                                                                        <span>Ethnicity</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    None                            </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="td-label">
                                                                                                        <span>Personal Value</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    Decent                            </td>
                                                                                                    <td class="td-label">
                                                                                                        <span>Family Value</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        Moderate                                
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>                                               
                                                                                                    <td class="td-label">
                                                                                                        <span>Community Value</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    Ok                            </td>
                                                                                                    <td class="td-label">
                                                                                                        <span>Family Status</span>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                    High Class                            </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="td-label">Manglik</td>
                                                                                                    <td>                             </td>
                                                                                                    <td></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div id="edit_spiritual_and_social_background" style="display: none;">
                                                                                <div class="card-inner-title-wrapper pt-0">
                                                                                    <h3 class="card-inner-title pull-left">
                                                                                    Spiritual And Social Background            </h3>
                                                                                    <div class="pull-right">
                                                                                        <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('spiritual_and_social_background')"><i class="ion-checkmark"></i></button>
                                                                                        <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('spiritual_and_social_background')"><i class="ion-close"></i></button>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="clearfix"></div>
                                                                                <form id="form_spiritual_and_social_background" class="form-default" role="form">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="religion" class="text-uppercase c-gray-light">Religion</label>
                                                                                                <select name="religion" onchange="(this.value,this)" class="form-control form-control-sm selectpicker present_religion_edit" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2">Judaism</option><option value="3" selected=".&quot;selected&quot;">Cristianity</option><option value="4">Hinduism</option><option value="5">Buddhism</option><option value="6">Atheism</option><option value="7">Islam</option><option value="8">Sikhism</option><option value="9">Jain</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="caste" class="text-uppercase c-gray-light">Caste</label>
                                                                                                <select name="caste" onchange="(this.value,this)" class="form-control form-control-sm selectpicker present_caste_edit" data-placeholder="Choose a caste" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="21">Anglo Indian</option><option value="22">Basel Mission</option><option value="23">Born Again</option><option value="24">Bretheren</option><option value="25" selected=".&quot;selected&quot;">Catholic</option><option value="26">Catholic Knanya</option><option value="27">Chaldean Syrian</option><option value="28">Christian Nadar</option><option value="29">Church of North India (CNI)</option><option value="30">Church of South India (CSI)</option><option value="31">CMS</option><option value="32">Convert</option><option value="33">Evangelical</option><option value="34">Indian Orthodox</option><option value="35">Intercaste</option><option value="36">IPC</option><option value="37">Jacobite</option><option value="38">Knanaya Pentecostal</option><option value="39">Latin Catholic</option><option value="40">Marthoma</option><option value="41">Methodist</option><option value="42">Mormon</option><option value="43">Orthodox</option><option value="44">Pentecost</option><option value="45">Presbyterian</option><option value="46">Protestant</option><option value="47">Roman Catholic</option><option value="48">Salvation Army</option><option value="49">Scheduled Caste (SC)</option><option value="50">Scheduled Tribe (ST)</option><option value="51">Seventh day Adventist</option><option value="52">Syrian</option><option value="53">Syrian Catholic</option><option value="54">Syrian Orthodo</option><option value="55">Syro Malabar</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="sub_caste" class="text-uppercase c-gray-light">Sub Caste</label>
                                                                                                <select name="sub_caste" onchange="(this.value,this)" class="form-control form-control-sm selectpicker present_sub_caste_edit" data-placeholder="Choose a sub_caste" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="ethnicity" class="text-uppercase c-gray-light">Ethnicity</label>
                                                                                                <input type="text" class="form-control no-resize" name="ethnicity" value="None">
                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="personal_value" class="text-uppercase c-gray-light">Personal Value</label>
                                                                                                <input type="text" class="form-control no-resize" name="personal_value" value="Decent">
                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="family_value" class="text-uppercase c-gray-light">Family Value</label>
                                                                                                <select name="family_value" onchange="(this.value,this)" class="form-control form-control-sm selectpicker family_value_edit" data-placeholder="Choose a family_value" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Traditional</option><option value="2" selected=".&quot;selected&quot;">Moderate</option><option value="3">Liberal</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="community_value" class="text-uppercase c-gray-light">Community Value</label>
                                                                                                <input type="text" class="form-control no-resize" name="community_value" value="Ok">
                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group has-feedback">
                                                                                                <label for="family_value" class="text-uppercase c-gray-light">Family Status</label>
                                                                                                <select name="family_status" onchange="(this.value,this)" class="form-control form-control-sm selectpicker family_status_edit" data-placeholder="Choose a family_status" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1" selected=".&quot;selected&quot;">High Class</option><option value="2">Middle Class</option><option value="3">Low Class</option><option value="4">Upper Middle Class </option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                <div class="help-block with-errors"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                       <div class="col-md-6">
                                                                                        <div class="form-group has-feedback">
                                                                                            <label for="u_manglik" class="text-uppercase c-gray-light">Manglik</label>

                                                                                            <select name="u_manglik" class="form-control form-control-sm selectpicker" data-placeholder="Choose a manglik" tabindex="2" data-hide-disabled="true">
                                                                                                <option value="">Choose one</option>
                                                                                                <option value="1">Yes</option>
                                                                                                <option value="2">No</option>
                                                                                                <option value="3">I don't know</option>
                                                                                            </select>
                                                                                            <!-- <select name="manglik" onChange="(this.value,this)" class="form-control form-control-sm selectpicker"   data-placeholder="Choose a manglik" tabindex="2" data-hide-disabled="true" ><option value="">Choose one</option><option value="1" >Yes</option><option value="2" >No</option><option value="3" >Doesn't Matter</option></select> -->
                                                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                            <div class="help-block with-errors"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $(".present_religion_edit").change(function(){
                                                                            var religion_id = $(".present_religion_edit").val();
                                                                            if (religion_id == "") {
                                                                                $(".present_caste_edit").html("<option value=''>Choose A Religion First</option>");
                                                                                $(".present_sub_caste_edit").html("<option value=''>Choose A Caste First</option>");
                                                                            } else {
                                                                                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".present_caste_edit").html(data);
                        $(".present_sub_caste_edit").html("<option value=''>Choose A Caste First</option>");
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                                                                            }
                                                                        });
                                                                        $(".present_caste_edit").change(function(){
                                                                            var caste_id = $(".present_caste_edit").val();
                                                                            if (caste_id == "") {
                                                                                $(".present_sub_caste_edit").html("<option value=''>Choose A Caste First</option>");
                                                                            } else {  
                                                                                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_caste/sub_caste/caste_id/"+caste_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".present_sub_caste_edit").html(data);
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                                                                            }
                                                                        });
                                                                    </script>                                        </div>
                                                                    <div id="section_life_style">
                                                                        <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                            <div id="info_life_style">
                                                                                <div class="card-inner-title-wrapper pt-0">
                                                                                    <h3 class="card-inner-title pull-left">
                                                                                    Life Style            </h3>
                                                                                    <div class="pull-right">
                                                                                        <button type="button" id="unhide_life_style" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('life_style')">
                                                                                            <i class="fa fa-unlock"></i> Show                </button>
                                                                                            <button type="button" id="hide_life_style" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('life_style')">
                                                                                                <i class="fa fa-lock"></i> Hide                </button>
                                                                                                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('life_style')">
                                                                                                    <i class="ion-edit"></i>
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
                                                                                                            xyz                            </td>
                                                                                                            <td class="td-label">
                                                                                                                <span>Drink</span>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                            No                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td class="td-label">
                                                                                                                <span>Smoke</span>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                            No                            </td>
                                                                                                            <td class="td-label">
                                                                                                                <span>Living With</span>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                            Family                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div id="edit_life_style" style="display: none;">
                                                                                        <div class="card-inner-title-wrapper pt-0">
                                                                                            <h3 class="card-inner-title pull-left">
                                                                                            Life Style            </h3>
                                                                                            <div class="pull-right">
                                                                                                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('life_style')"><i class="ion-checkmark"></i></button>
                                                                                                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('life_style')"><i class="ion-close"></i></button>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="clearfix"></div>
                                                                                        <form id="form_life_style" class="form-default" role="form">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group has-feedback">
                                                                                                        <label for="diet" class="text-uppercase c-gray-light">Diet</label>
                                                                                                        <input type="text" class="form-control no-resize" name="diet" value="xyz">
                                                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                        <div class="help-block with-errors"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group has-feedback">
                                                                                                        <label for="drink" class="text-uppercase c-gray-light">Drink</label>
                                                                                                        <select name="drink" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a drink" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Yes</option><option value="2" selected=".&quot;selected&quot;">No</option><option value="3">Doesn't Matter</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                        <div class="help-block with-errors"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group has-feedback">
                                                                                                        <label for="smoke" class="text-uppercase c-gray-light">Smoke</label>
                                                                                                        <select name="smoke" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a smoke" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Yes</option><option value="2" selected=".&quot;selected&quot;">No</option><option value="3">Doesn't Matter</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                        <div class="help-block with-errors"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group has-feedback">
                                                                                                        <label for="living_with" class="text-uppercase c-gray-light">Living With</label>
                                                                                                        <input type="text" class="form-control no-resize" name="living_with" value="Family">
                                                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                        <div class="help-block with-errors"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>                                        </div>
                                                                                <div id="section_astronomic_information">
                                                                                    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                                        <div id="info_astronomic_information">
                                                                                            <div class="card-inner-title-wrapper pt-0">
                                                                                                <h3 class="card-inner-title pull-left">
                                                                                                Astronomic Information            </h3>
                                                                                                <div class="pull-right">
                                                                                                    <button type="button" id="unhide_astronomic_information" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('astronomic_information')">
                                                                                                        <i class="fa fa-unlock"></i> Show                </button>
                                                                                                        <button type="button" id="hide_astronomic_information" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('astronomic_information')">
                                                                                                            <i class="fa fa-lock"></i> Hide                </button>
                                                                                                            <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('astronomic_information')">
                                                                                                                <i class="ion-edit"></i>
                                                                                                            </button>  
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="table-full-width">
                                                                                                        <div class="table-full-width">
                                                                                                            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td class="td-label">
                                                                                                                            <span>Sun Sign</span>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                        A                            </td>
                                                                                                                        <td class="td-label">
                                                                                                                            <span>Moon Sign</span>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                        B                            </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                     <td class="td-label">
                                                                                                                        <span>City Of Birth</span>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                    NY                            </td>
                                                                                                                    <td class="td-label">
                                                                                                                        <span>Time Of Birth</span>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                    12 AM                            </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div id="edit_astronomic_information" style="display: none;">
                                                                                                <div class="card-inner-title-wrapper pt-0">
                                                                                                    <h3 class="card-inner-title pull-left">
                                                                                                    Astronomic Information            </h3>
                                                                                                    <div class="pull-right">
                                                                                                        <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('astronomic_information')"><i class="ion-checkmark"></i></button>
                                                                                                        <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('astronomic_information')"><i class="ion-close"></i></button>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="clearfix"></div>
                                                                                                <form id="form_astronomic_information" class="form-default" role="form">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group has-feedback">
                                                                                                                <label for="sun_sign" class="text-uppercase c-gray-light">Sun Sign</label>
                                                                                                                <input type="text" class="form-control no-resize" name="sun_sign" value="A">
                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                <div class="help-block with-errors"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group has-feedback">
                                                                                                                <label for="moon_sign" class="text-uppercase c-gray-light">Moon Sign</label>
                                                                                                                <input type="text" class="form-control no-resize" name="moon_sign" value="B">
                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                <div class="help-block with-errors"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group has-feedback">
                                                                                                                <label for="time_of_birth" class="text-uppercase c-gray-light">Time Of Birth</label>
                                                                                                                <input type="text" class="form-control no-resize" name="time_of_birth" value="12 AM">
                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                <div class="help-block with-errors"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <div class="form-group has-feedback">
                                                                                                                <label for="city_of_birth" class="text-uppercase c-gray-light">City Of Birth</label>
                                                                                                                <input type="text" class="form-control no-resize" name="city_of_birth" value="NY">
                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                <div class="help-block with-errors"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>                                        </div>
                                                                                        <div id="section_permanent_address">
                                                                                            <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                                                <div id="info_permanent_address">
                                                                                                    <div class="card-inner-title-wrapper pt-0">
                                                                                                        <h3 class="card-inner-title pull-left">
                                                                                                        Permanent Address            </h3>
                                                                                                        <div class="pull-right">
                                                                                                            <button type="button" id="unhide_permanent_address" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('permanent_address')">
                                                                                                                <i class="fa fa-unlock"></i> Show                </button>
                                                                                                                <button type="button" id="hide_permanent_address" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('permanent_address')">
                                                                                                                    <i class="fa fa-lock"></i> Hide                </button>
                                                                                                                    <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('permanent_address')">
                                                                                                                        <i class="ion-edit"></i>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="table-full-width">
                                                                                                                <div class="table-full-width">
                                                                                                                    <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td class="td-label">
                                                                                                                                    <span>Country</span>
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                Tonga                            </td>
                                                                                                                                <td class="td-label">
                                                                                                                                    <span>State</span>
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                Ha'apai                            </td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td class="td-label">
                                                                                                                                    <span>City</span>
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                Pangai                            </td>
                                                                                                                                <td class="td-label">
                                                                                                                                    <span>Postal-Code</span>
                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                xyz                            </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div id="edit_permanent_address" style="display: none;">
                                                                                                            <div class="card-inner-title-wrapper pt-0">
                                                                                                                <h3 class="card-inner-title pull-left">
                                                                                                                Permanent Address            </h3>
                                                                                                                <div class="pull-right">
                                                                                                                    <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('permanent_address')"><i class="ion-checkmark"></i></button>
                                                                                                                    <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('permanent_address')"><i class="ion-close"></i></button>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="clearfix"></div>
                                                                                                            <form id="form_permanent_address" class="form-default" role="form">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group has-feedback">
                                                                                                                            <label for="permanent_country" class="text-uppercase c-gray-light">Country</label>
                                                                                                                            <select name="permanent_country" onchange="(this.value,this)" class="form-control form-control-sm selectpicker permanent_country_edit" data-placeholder="Choose a permanent_country" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220" selected=".&quot;selected&quot;">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                            <div class="help-block with-errors"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group has-feedback">
                                                                                                                            <label for="permanent_state" class="text-uppercase c-gray-light">State</label>
                                                                                                                            <select name="permanent_state" onchange="(this.value,this)" class="form-control form-control-sm selectpicker permanent_state_edit" data-placeholder="Choose a permanent_state" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="3612">Eua</option><option value="3613" selected=".&quot;selected&quot;">Ha'apai</option><option value="3614">Niuas</option><option value="3615">Tongatapu</option><option value="3616">Vava'u</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                            <div class="help-block with-errors"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group has-feedback">
                                                                                                                            <label for="permanent_city" class="text-uppercase c-gray-light">City</label>
                                                                                                                            <select name="permanent_city" onchange="(this.value,this)" class="form-control form-control-sm selectpicker permanent_city_edit" data-placeholder="Choose a permanent_city" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="39989" selected=".&quot;selected&quot;">Pangai</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                            <div class="help-block with-errors"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group has-feedback">
                                                                                                                            <label for="permanent_postal_code" class="text-uppercase c-gray-light">Postal-Code</label>
                                                                                                                            <input type="text" class="form-control no-resize" name="permanent_postal_code" value="xyz">
                                                                                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                            <div class="help-block with-errors"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <script>
                                                                                                        $(".permanent_country_edit").change(function(){
                                                                                                            var country_id = $(".permanent_country_edit").val();
                                                                                                            if (country_id == "") {
                                                                                                                $(".permanent_state_edit").html("<option value=''>Choose A Country First</option>");
                                                                                                                $(".permanent_city_edit").html("<option value=''>Choose A State First</option>");
                                                                                                            } else {
                                                                                                                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id/state/country_id/"+country_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".permanent_state_edit").html(data);
                        $(".permanent_city_edit").html("<option value=''>Choose A State First</option>");
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                                                                                                            }
                                                                                                        });
                                                                                                        $(".permanent_state_edit").change(function(){
                                                                                                            var state_id = $(".permanent_state_edit").val();
                                                                                                            if (state_id == "") {
                                                                                                                $(".permanent_city_edit").html("<option value=''>Choose A State First</option>");
                                                                                                            } else {
                                                                                                                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id/city/state_id/"+state_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".permanent_city_edit").html(data);
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
                                                                                                            }
                                                                                                        });
                                                                                                    </script>                                        </div>
                                                                                                    <div id="section_family_info">
                                                                                                        <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                                                            <div id="info_family_info">
                                                                                                                <div class="card-inner-title-wrapper pt-0">
                                                                                                                    <h3 class="card-inner-title pull-left">
                                                                                                                    Family Information            </h3>
                                                                                                                    <div class="pull-right">
                                                                                                                        <button type="button" id="unhide_family_info" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('family_info')">
                                                                                                                            <i class="fa fa-unlock"></i> Show                </button>
                                                                                                                            <button type="button" id="hide_family_info" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('family_info')">
                                                                                                                                <i class="fa fa-lock"></i> Hide                </button>
                                                                                                                                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('family_info')">
                                                                                                                                    <i class="ion-edit"></i>
                                                                                                                                </button> 
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="table-full-width">
                                                                                                                            <div class="table-full-width">
                                                                                                                                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                                                                    <tbody>
                                                                                                                                        <tr>
                                                                                                                                            <td class="td-label">
                                                                                                                                                <span>Father</span>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                            </td>
                                                                                                                                            <td class="td-label">
                                                                                                                                                <span>Mother</span>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td class="td-label">
                                                                                                                                                <span>Brother / Sister</span>
                                                                                                                                            </td>
                                                                                                                                            <td>
                                                                                                                                            </td>
                                                                                                                                            <td></td>
                                                                                                                                            <td></td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div id="edit_family_info" style="display: none;">
                                                                                                                        <div class="card-inner-title-wrapper pt-0">
                                                                                                                            <h3 class="card-inner-title pull-left">
                                                                                                                            Family Information            </h3>
                                                                                                                            <div class="pull-right">
                                                                                                                                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('family_info')"><i class="ion-checkmark"></i></button>
                                                                                                                                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('family_info')"><i class="ion-close"></i></button>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="clearfix"></div>
                                                                                                                        <form id="form_family_info" class="form-default" role="form">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group has-feedback">
                                                                                                                                        <label for="father" class="text-uppercase c-gray-light">Father</label>
                                                                                                                                        <input type="text" class="form-control no-resize" name="father" value="">
                                                                                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                        <div class="help-block with-errors"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group has-feedback">
                                                                                                                                        <label for="mother" class="text-uppercase c-gray-light">Mother</label>
                                                                                                                                        <input type="text" class="form-control no-resize" name="mother" value="">
                                                                                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                        <div class="help-block with-errors"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group has-feedback">
                                                                                                                                        <label for="brother_sister" class="text-uppercase c-gray-light">Brother / Sister</label>
                                                                                                                                        <input type="text" class="form-control no-resize" name="brother_sister" value="">
                                                                                                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                        <div class="help-block with-errors"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                </div>                                        </div>
                                                                                                                <div id="section_additional_personal_details">
                                                                                                                    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                                                                        <div id="info_additional_personal_details">
                                                                                                                            <div class="card-inner-title-wrapper pt-0">
                                                                                                                                <h3 class="card-inner-title pull-left">
                                                                                                                                Additional Personal Details            </h3>
                                                                                                                                <div class="pull-right">
                                                                                                                                    <button type="button" id="unhide_additional_personal_details" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('additional_personal_details')">
                                                                                                                                        <i class="fa fa-unlock"></i> Show                </button>
                                                                                                                                        <button type="button" id="hide_additional_personal_details" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('additional_personal_details')">
                                                                                                                                            <i class="fa fa-lock"></i> Hide                </button>
                                                                                                                                            <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('additional_personal_details')">
                                                                                                                                                <i class="ion-edit"></i>
                                                                                                                                            </button>  
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="table-full-width">
                                                                                                                                        <div class="table-full-width">
                                                                                                                                            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                                                                                <tbody>
                                                                                                                                                    <tr>
                                                                                                                                                        <td class="td-label">
                                                                                                                                                            <span>Home District</span>
                                                                                                                                                        </td>
                                                                                                                                                        <td>
                                                                                                                                                        NY                            </td>
                                                                                                                                                        <td class="td-label">
                                                                                                                                                            <span>Family Residence</span>
                                                                                                                                                        </td>
                                                                                                                                                        <td>
                                                                                                                                                        NY                            </td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr>
                                                                                                                                                        <td class="td-label">
                                                                                                                                                            <span>Father's Occupation</span>
                                                                                                                                                        </td>
                                                                                                                                                        <td>
                                                                                                                                                        Business                            </td>
                                                                                                                                                        <td class="td-label">
                                                                                                                                                            <span>Special Circumstances</span>
                                                                                                                                                        </td>
                                                                                                                                                        <td>
                                                                                                                                                        None                            </td>
                                                                                                                                                    </tr>
                                                                                                                                                </tbody>
                                                                                                                                            </table>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div id="edit_additional_personal_details" style="display: none;">
                                                                                                                                    <div class="card-inner-title-wrapper pt-0">
                                                                                                                                        <h3 class="card-inner-title pull-left">
                                                                                                                                        Additional Personal Details            </h3>
                                                                                                                                        <div class="pull-right">
                                                                                                                                            <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('additional_personal_details')"><i class="ion-checkmark"></i></button>
                                                                                                                                            <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('additional_personal_details')"><i class="ion-close"></i></button>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="clearfix"></div>
                                                                                                                                    <form id="form_additional_personal_details" class="form-default" role="form">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-md-6">
                                                                                                                                                <div class="form-group has-feedback">
                                                                                                                                                    <label for="home_district" class="text-uppercase c-gray-light">Home District</label>
                                                                                                                                                    <input type="text" class="form-control no-resize" name="home_district" value="NY">
                                                                                                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                    <div class="help-block with-errors"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-md-6">
                                                                                                                                                <div class="form-group has-feedback">
                                                                                                                                                    <label for="family_residence" class="text-uppercase c-gray-light">Family Residence</label>
                                                                                                                                                    <input type="text" class="form-control no-resize" name="family_residence" value="NY">
                                                                                                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                    <div class="help-block with-errors"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-md-6">
                                                                                                                                                <div class="form-group has-feedback">
                                                                                                                                                    <label for="fathers_occupation" class="text-uppercase c-gray-light">Father's Occupation</label>
                                                                                                                                                    <input type="text" class="form-control no-resize" name="fathers_occupation" value="Business">
                                                                                                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                    <div class="help-block with-errors"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-md-6">
                                                                                                                                                <div class="form-group has-feedback">
                                                                                                                                                    <label for="special_circumstances" class="text-uppercase c-gray-light">Special Circumstances</label>
                                                                                                                                                    <input type="text" class="form-control no-resize" name="special_circumstances" value="None">
                                                                                                                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                    <div class="help-block with-errors"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                            </div>                                        </div>
                                                                                                                            <div id="section_partner_expectation">
                                                                                                                                <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
                                                                                                                                    <div id="info_partner_expectation">
                                                                                                                                        <div class="card-inner-title-wrapper pt-0">
                                                                                                                                            <h3 class="card-inner-title pull-left">
                                                                                                                                            Partner Expectation            </h3>
                                                                                                                                            <div class="pull-right">
                                                                                                                                                <button type="button" id="unhide_partner_expectation" style="display: none" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('partner_expectation')">
                                                                                                                                                    <i class="fa fa-unlock"></i> Show                </button>
                                                                                                                                                    <button type="button" id="hide_partner_expectation" class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('partner_expectation')">
                                                                                                                                                        <i class="fa fa-lock"></i> Hide                </button>
                                                                                                                                                        <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('partner_expectation')">
                                                                                                                                                            <i class="ion-edit"></i>
                                                                                                                                                        </button>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="table-full-width">
                                                                                                                                                    <div class="table-full-width">
                                                                                                                                                        <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                                                                                                                                                            <tbody>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>General Requirement</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    None                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Age</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    18-24                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Height</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Weight</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Marital Status</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Never Married                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>With Children Acceptables</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Country Of Residence</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    United States                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Religion</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Cristianity                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Caste / Sect</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Catholic                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Sub Caste</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    </td>

                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Education</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Profession</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Professor                             </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Drinking Habits</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Smoking Habits</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Diet</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Body Type</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Fit                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Personal Value</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Manglik</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                        <!--   -->
                                                                                                                                                                    </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Any Disability</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    None                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Mother Tongue</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Bengali                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Family Value</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Prefered Country</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    United Kingdom                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Prefered State</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Cambridge                            </td>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Prefered Status</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                </tr>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td class="td-label">
                                                                                                                                                                        <span>Complexion</span>
                                                                                                                                                                    </td>
                                                                                                                                                                    <td>
                                                                                                                                                                    Doesn't Matter                            </td>
                                                                                                                                                                    <td></td>
                                                                                                                                                                    <td></td>
                                                                                                                                                                </tr>
                                                                                                                                                            </tbody>
                                                                                                                                                        </table>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>

                                                                                                                                            <div id="edit_partner_expectation" style="display: none;">
                                                                                                                                                <div class="card-inner-title-wrapper pt-0">
                                                                                                                                                    <h3 class="card-inner-title pull-left">
                                                                                                                                                    Partner Expectation            </h3>
                                                                                                                                                    <div class="pull-right">
                                                                                                                                                        <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('partner_expectation')"><i class="ion-checkmark"></i></button>
                                                                                                                                                        <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('partner_expectation')"><i class="ion-close"></i></button>
                                                                                                                                                    </div>
                                                                                                                                                </div>

                                                                                                                                                <div class="clearfix"></div>
                                                                                                                                                <form id="form_partner_expectation" class="form-default" role="form">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="general_requirement" class="text-uppercase c-gray-light">General Requirement</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="general_requirement" value="None">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_age" class="text-uppercase c-gray-light">Age</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_age" value="18-24">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_height" class="text-uppercase c-gray-light">Height</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_height" value="Doesn't Matter">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_weight" class="text-uppercase c-gray-light">Weight</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_weight" value="Doesn't Matter">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_marital_status" class="text-uppercase c-gray-light">Marital Status</label>
                                                                                                                                                                <select name="partner_marital_status" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a partner_marital_status" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1" selected=".&quot;selected&quot;">Never Married</option><option value="2">Married</option><option value="3">Divorced </option><option value="4">Separated </option><option value="5">Widowed</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="with_children_acceptables" class="text-uppercase c-gray-light">With Children Acceptables</label>
                                                                                                                                                                <select name="with_children_acceptables" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a with_children_acceptables" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Yes</option><option value="2">No</option><option value="3" selected=".&quot;selected&quot;">Doesn't Matter</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_country_of_residence" class="text-uppercase c-gray-light">Country Of Residence</label>
                                                                                                                                                                <select name="partner_country_of_residence" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a partner_country_of_residence" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230">United Kingdom</option><option value="231" selected=".&quot;selected&quot;">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="religion" class="text-uppercase c-gray-light">Religion</label>
                                                                                                                                                                <select name="partner_religion" onchange="(this.value,this)" class="form-control form-control-sm selectpicker prefered_religion_edit" data-placeholder="Choose a partner_religion" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2">Judaism</option><option value="3" selected=".&quot;selected&quot;">Cristianity</option><option value="4">Hinduism</option><option value="5">Buddhism</option><option value="6">Atheism</option><option value="7">Islam</option><option value="8">Sikhism</option><option value="9">Jain</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="caste" class="text-uppercase c-gray-light">Caste</label>
                                                                                                                                                                <select name="partner_caste" onchange="(this.value,this)" class="form-control form-control-sm selectpicker prefered_caste_edit" data-placeholder="Choose a partner_caste" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="21">Anglo Indian</option><option value="22">Basel Mission</option><option value="23">Born Again</option><option value="24">Bretheren</option><option value="25" selected=".&quot;selected&quot;">Catholic</option><option value="26">Catholic Knanya</option><option value="27">Chaldean Syrian</option><option value="28">Christian Nadar</option><option value="29">Church of North India (CNI)</option><option value="30">Church of South India (CSI)</option><option value="31">CMS</option><option value="32">Convert</option><option value="33">Evangelical</option><option value="34">Indian Orthodox</option><option value="35">Intercaste</option><option value="36">IPC</option><option value="37">Jacobite</option><option value="38">Knanaya Pentecostal</option><option value="39">Latin Catholic</option><option value="40">Marthoma</option><option value="41">Methodist</option><option value="42">Mormon</option><option value="43">Orthodox</option><option value="44">Pentecost</option><option value="45">Presbyterian</option><option value="46">Protestant</option><option value="47">Roman Catholic</option><option value="48">Salvation Army</option><option value="49">Scheduled Caste (SC)</option><option value="50">Scheduled Tribe (ST)</option><option value="51">Seventh day Adventist</option><option value="52">Syrian</option><option value="53">Syrian Catholic</option><option value="54">Syrian Orthodo</option><option value="55">Syro Malabar</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="sub_caste" class="text-uppercase c-gray-light">Sub Caste</label>
                                                                                                                                                                <select name="partner_sub_caste" onchange="(this.value,this)" class="form-control form-control-sm selectpicker prefered_sub_caste_edit" data-placeholder="Choose a partner_sub_caste" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_education" class="text-uppercase c-gray-light">Education</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_education" value="Doesn't Matter">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_profession" class="text-uppercase c-gray-light">Profession</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_profession" value="Professor ">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_drinking_habits" class="text-uppercase c-gray-light">Drinking Habits</label>
                                                                                                                                                                <select name="partner_drinking_habits" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a partner_drinking_habits" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Yes</option><option value="2">No</option><option value="3" selected=".&quot;selected&quot;">Doesn't Matter</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_smoking_habits" class="text-uppercase c-gray-light">Smoking Habits</label>
                                                                                                                                                                <select name="partner_smoking_habits" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a partner_smoking_habits" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Yes</option><option value="2">No</option><option value="3" selected=".&quot;selected&quot;">Doesn't Matter</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_diet" class="text-uppercase c-gray-light">Diet</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_diet" value="Doesn't Matter">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_body_type" class="text-uppercase c-gray-light">Body Type</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_body_type" value="Fit">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="partner_personal_value" class="text-uppercase c-gray-light">Personal Value</label>
                                                                                                                                                                <input type="text" class="form-control no-resize" name="partner_personal_value" value="Doesn't Matter">
                                                                                                                                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                                                                                                                                <div class="help-block with-errors"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <div class="form-group has-feedback">
                                                                                                                                                                <label for="manglik" class="text-uppercase c-gray-light">Manglik</label>

                            <select name="manglik" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a manglik" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Yes</option><option value="2">No</option><option value="3">Doesn't Matter</option></select>                        <!-- <select name="manglik" class="form-control form-control-sm selectpicker" data-placeholder="Choose a manglik" tabindex="2" data-hide-disabled="true">
                                <option value="">Choose one</option>
                                <option value="1" >Yes</option>
                                <option value="2" >No</option>
                                <option value="3" >I don't know</option>
                            </select> -->
                            
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="partner_any_disability" class="text-uppercase c-gray-light">Any Disability</label>
                            <input type="text" class="form-control no-resize" name="partner_any_disability" value="None">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="partner_mother_tongue" class="text-uppercase c-gray-light">Mother Tongue</label>
                            <select name="partner_mother_tongue" onchange="(this.value,this)" class="form-control form-control-sm selectpicker" data-placeholder="Choose a partner_mother_tongue" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="2" selected=".&quot;selected&quot;">Bengali</option><option value="4">German</option><option value="7">English</option><option value="8">Hindi</option><option value="9">Urdu</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="partner_family_value" class="text-uppercase c-gray-light">Family Value</label>
                            <input type="text" class="form-control no-resize" name="partner_family_value" value="Doesn't Matter">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="prefered_country" class="text-uppercase c-gray-light">Prefered Country</label>
                            <select name="prefered_country" onchange="(this.value,this)" class="form-control form-control-sm selectpicker prefered_country_edit" data-placeholder="Choose a prefered_country" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua And Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas The</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Republic Of The Congo</option><option value="50">Democratic Republic Of The Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D'Ivoire (Ivory Coast)</option><option value="54">Croatia (Hrvatska)</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">East Timor</option><option value="63">Ecuador</option><option value="64">Egypt</option><option value="65">El Salvador</option><option value="66">Equatorial Guinea</option><option value="67">Eritrea</option><option value="68">Estonia</option><option value="69">Ethiopia</option><option value="70">External Territories of Australia</option><option value="71">Falkland Islands</option><option value="72">Faroe Islands</option><option value="73">Fiji Islands</option><option value="74">Finland</option><option value="75">France</option><option value="76">French Guiana</option><option value="77">French Polynesia</option><option value="78">French Southern Territories</option><option value="80">Gambia The</option><option value="81">Georgia</option><option value="82">Germany</option><option value="83">Ghana</option><option value="84">Gibraltar</option><option value="85">Greece</option><option value="86">Greenland</option><option value="87">Grenada</option><option value="88">Guadeloupe</option><option value="89">Guam</option><option value="90">Guatemala</option><option value="91">Guernsey and Alderney</option><option value="92">Guinea</option><option value="93">Guinea-Bissau</option><option value="94">Guyana</option><option value="95">Haiti</option><option value="96">Heard and McDonald Islands</option><option value="97">Honduras</option><option value="98">Hong Kong S.A.R.</option><option value="99">Hungary</option><option value="100">Iceland</option><option value="101">India</option><option value="102">Indonesia</option><option value="103">Iran</option><option value="104">Iraq</option><option value="105">Ireland</option><option value="106">Israel</option><option value="107">Italy</option><option value="108">Jamaica</option><option value="109">Japan</option><option value="110">Jersey</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea North</option><option value="116">Korea South</option><option value="117">Kuwait</option><option value="118">Kyrgyzstan</option><option value="119">Laos</option><option value="120">Latvia</option><option value="121">Lebanon</option><option value="122">Lesotho</option><option value="123">Liberia</option><option value="124">Libya</option><option value="125">Liechtenstein</option><option value="126">Lithuania</option><option value="127">Luxembourg</option><option value="128">Macau S.A.R.</option><option value="129">Macedonia</option><option value="130">Madagascar</option><option value="131">Malawi</option><option value="132">Malaysia</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malta</option><option value="136">Man (Isle of)</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia</option><option value="144">Moldova</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montserrat</option><option value="148">Morocco</option><option value="149">Mozambique</option><option value="150">Myanmar</option><option value="151">Namibia</option><option value="152">Nauru</option><option value="153">Nepal</option><option value="154">Netherlands Antilles</option><option value="155">Netherlands The</option><option value="156">New Caledonia</option><option value="157">New Zealand</option><option value="158">Nicaragua</option><option value="159">Niger</option><option value="160">Nigeria</option><option value="161">Niue</option><option value="162">Norfolk Island</option><option value="163">Northern Mariana Islands</option><option value="164">Norway</option><option value="165">Oman</option><option value="166">Pakistan</option><option value="167">Palau</option><option value="168">Palestinian Territory Occupied</option><option value="169">Panama</option><option value="170">Papua new Guinea</option><option value="171">Paraguay</option><option value="172">Peru</option><option value="173">Philippines</option><option value="174">Pitcairn Island</option><option value="175">Poland</option><option value="176">Portugal</option><option value="177">Puerto Rico</option><option value="178">Qatar</option><option value="179">Reunion</option><option value="180">Romania</option><option value="181">Russia</option><option value="182">Rwanda</option><option value="183">Saint Helena</option><option value="184">Saint Kitts And Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Pierre and Miquelon</option><option value="187">Saint Vincent And The Grenadines</option><option value="188">Samoa</option><option value="189">San Marino</option><option value="190">Sao Tome and Principe</option><option value="191">Saudi Arabia</option><option value="192">Senegal</option><option value="193">Serbia</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapore</option><option value="197">Slovakia</option><option value="198">Slovenia</option><option value="199">Smaller Territories of the UK</option><option value="200">Solomon Islands</option><option value="201">Somalia</option><option value="202">South Africa</option><option value="203">South Georgia</option><option value="204">South Sudan</option><option value="205">Spain</option><option value="206">Sri Lanka</option><option value="207">Sudan</option><option value="208">Suriname</option><option value="209">Svalbard And Jan Mayen Islands</option><option value="210">Swaziland</option><option value="211">Sweden</option><option value="212">Switzerland</option><option value="213">Syria</option><option value="214">Taiwan</option><option value="215">Tajikistan</option><option value="216">Tanzania</option><option value="217">Thailand</option><option value="218">Togo</option><option value="219">Tokelau</option><option value="220">Tonga</option><option value="221">Trinidad And Tobago</option><option value="222">Tunisia</option><option value="223">Turkey</option><option value="224">Turkmenistan</option><option value="225">Turks And Caicos Islands</option><option value="226">Tuvalu</option><option value="227">Uganda</option><option value="228">Ukraine</option><option value="229">United Arab Emirates</option><option value="230" selected=".&quot;selected&quot;">United Kingdom</option><option value="231">United States</option><option value="232">United States Minor Outlying Islands</option><option value="233">Uruguay</option><option value="234">Uzbekistan</option><option value="235">Vanuatu</option><option value="236">Vatican City State (Holy See)</option><option value="237">Venezuela</option><option value="238">Vietnam</option><option value="239">Virgin Islands (British)</option><option value="240">Virgin Islands (US)</option><option value="241">Wallis And Futuna Islands</option><option value="242">Western Sahara</option><option value="243">Yemen</option><option value="244">Yugoslavia</option><option value="245">Zambia</option><option value="246">Zimbabwe</option><option value="247">Gabon</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="prefered_state" class="text-uppercase c-gray-light">Prefered State</label>
                            <select name="prefered_state" onchange="(this.value,this)" class="form-control form-control-sm selectpicker prefered_state_edit" data-placeholder="Choose a prefered_state" tabindex="2" data-hide-disabled="true"><option value="">Choose one</option><option value="3805">Aberdeen</option><option value="3806">Aberdeenshire</option><option value="3807">Argyll</option><option value="3808">Armagh</option><option value="3809">Bedfordshire</option><option value="3810">Belfast</option><option value="3811">Berkshire</option><option value="3812">Birmingham</option><option value="3813">Brechin</option><option value="3814">Bridgnorth</option><option value="3815">Bristol</option><option value="3816">Buckinghamshire</option><option value="3817" selected=".&quot;selected&quot;">Cambridge</option><option value="3818">Cambridgeshire</option><option value="3819">Channel Islands</option><option value="3820">Cheshire</option><option value="3821">Cleveland</option><option value="3822">Co Fermanagh</option><option value="3823">Conwy</option><option value="3824">Cornwall</option><option value="3825">Coventry</option><option value="3826">Craven Arms</option><option value="3827">Cumbria</option><option value="3828">Denbighshire</option><option value="3829">Derby</option><option value="3830">Derbyshire</option><option value="3831">Devon</option><option value="3832">Dial Code Dungannon</option><option value="3833">Didcot</option><option value="3834">Dorset</option><option value="3835">Dunbartonshire</option><option value="3836">Durham</option><option value="3837">East Dunbartonshire</option><option value="3838">East Lothian</option><option value="3839">East Midlands</option><option value="3840">East Sussex</option><option value="3841">East Yorkshire</option><option value="3842">England</option><option value="3843">Essex</option><option value="3844">Fermanagh</option><option value="3845">Fife</option><option value="3846">Flintshire</option><option value="3847">Fulham</option><option value="3848">Gainsborough</option><option value="3849">Glocestershire</option><option value="3850">Gwent</option><option value="3851">Hampshire</option><option value="3852">Hants</option><option value="3853">Herefordshire</option><option value="3854">Hertfordshire</option><option value="3855">Ireland</option><option value="3856">Isle Of Man</option><option value="3857">Isle of Wight</option><option value="3858">Kenford</option><option value="3859">Kent</option><option value="3860">Kilmarnock</option><option value="3861">Lanarkshire</option><option value="3862">Lancashire</option><option value="3863">Leicestershire</option><option value="3864">Lincolnshire</option><option value="3865">Llanymynech</option><option value="3866">London</option><option value="3867">Ludlow</option><option value="3868">Manchester</option><option value="3869">Mayfair</option><option value="3870">Merseyside</option><option value="3871">Mid Glamorgan</option><option value="3872">Middlesex</option><option value="3873">Mildenhall</option><option value="3874">Monmouthshire</option><option value="3875">Newton Stewart</option><option value="3876">Norfolk</option><option value="3877">North Humberside</option><option value="3878">North Yorkshire</option><option value="3879">Northamptonshire</option><option value="3880">Northants</option><option value="3881">Northern Ireland</option><option value="3882">Northumberland</option><option value="3883">Nottinghamshire</option><option value="3884">Oxford</option><option value="3885">Powys</option><option value="3886">Roos-shire</option><option value="3887">SUSSEX</option><option value="3888">Sark</option><option value="3889">Scotland</option><option value="3890">Scottish Borders</option><option value="3891">Shropshire</option><option value="3892">Somerset</option><option value="3893">South Glamorgan</option><option value="3894">South Wales</option><option value="3895">South Yorkshire</option><option value="3896">Southwell</option><option value="3897">Staffordshire</option><option value="3898">Strabane</option><option value="3899">Suffolk</option><option value="3900">Surrey</option><option value="3901">Sussex</option><option value="3902">Twickenham</option><option value="3903">Tyne and Wear</option><option value="3904">Tyrone</option><option value="3905">Utah</option><option value="3906">Wales</option><option value="3907">Warwickshire</option><option value="3908">West Lothian</option><option value="3909">West Midlands</option><option value="3910">West Sussex</option><option value="3911">West Yorkshire</option><option value="3912">Whissendine</option><option value="3913">Wiltshire</option><option value="3914">Wokingham</option><option value="3915">Worcestershire</option><option value="3916">Wrexham</option><option value="3917">Wurttemberg</option><option value="3918">Yorkshire</option></select>                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="prefered_status" class="text-uppercase c-gray-light">Prefered Status</label>
                            <input type="text" class="form-control no-resize" name="prefered_status" value="Doesn't Matter">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label for="partner_complexion" class="text-uppercase c-gray-light">Complexion</label>
                            <input type="text" class="form-control no-resize" name="partner_complexion" value="Doesn't Matter">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(".prefered_country_edit").change(function(){
            var country_id = $(".prefered_country_edit").val();
            if (country_id == "") {
                $(".prefered_state_edit").html("<option value=''>Choose A Country First</option>");
            } else {
                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id/state/country_id/"+country_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".prefered_state_edit").html(data);
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
            }
        });
        $(".prefered_religion_edit").change(function(){
            var religion_id = $(".prefered_religion_edit").val();
            if (religion_id == "") {
                $(".prefered_caste_edit").html("<option value=''>Choose A Religion First</option>");
                $(".prefered_sub_caste_edit").html("<option value=''>Choose A Caste First</option>");
            } else {
                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".prefered_caste_edit").html(data);
                        $(".prefered_sub_caste_edit").html("<option value=''>Choose A Caste First</option>");
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
            }
        });
        $(".prefered_caste_edit").change(function(){
            var caste_id = $(".prefered_caste_edit").val();
            if (caste_id == "") {
                $(".prefered_sub_caste_edit").html("<option value=''>Choose A Caste First</option>");
            } else {  
                $.ajax({
                    url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_caste/sub_caste/caste_id/"+caste_id, // form action url
                    type: 'POST', // form submit method get/post
                    dataType: 'html', // request type html/json/xml
                    cache       : false,
                    contentType : false,
                    processData : false,
                    success: function(data) {
                        $(".prefered_sub_caste_edit").html(data);
                    },
                    error: function(e) {
                        console.log(e)
                    }
                });
            }
        });
    </script>                                        </div>
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
<script>
    var isloggedin = "1";
        // Script for Editing Profile with Ajax
        function edit_section(section)
        {
            $('#info_'+section).hide();
            $('#edit_'+section).show();
        }

        function load_section(section)
        {

            $('#info_'+section).show();
            $('#edit_'+section).hide();
        }

        function unhide_section(section)
        {
            $('#section_'+section).find('.form-control').prop('readonly', true);
            $('#section_'+section).find('.btn').prop('disabled', true); 
            $.ajax({
                type: "POST",
                url: "http://activeitzone.com/demo/matrimonial/home/profile/unhide_section/"+section,
                cache: false,
                success: function(response) {
                    $('#ajax_danger_alert').fadeOut('fast');
                    $('#ajax_success_alert').show();
                    $('.ajax_success_alert').html("This Section Is Successfully Showed");
                    setTimeout(function() {
                        $('#ajax_success_alert').fadeOut('fast');
                    }, 3000); // <-- time in milliseconds
                    $('#section_'+section).find('.form-control').prop('readonly', false);
                    $('#section_'+section).find('.btn').prop('disabled', false);
                    $('#unhide_'+section).hide();
                    $('#hide_'+section).show();
                },
                fail: function (error) {
                    alert(error);
                }
            });
        }

        function hide_section(section)
        {
            $('#section_'+section).find('.form-control').prop('readonly', true);
            $('#section_'+section).find('.btn').prop('disabled', true);
            $.ajax({
                type: "POST",
                url: "http://activeitzone.com/demo/matrimonial/home/profile/hide_section/"+section,
                cache: false,
                success: function(response) {
                    $('#ajax_success_alert').fadeOut('fast');
                    $('#ajax_danger_alert').show();
                    $('.ajax_danger_alert').html("This Section Is Successfully Hidden");
                    setTimeout(function() {
                        $('#ajax_danger_alert').fadeOut('fast');
                    }, 3000); // <-- time in milliseconds
                    $('#section_'+section).find('.form-control').prop('readonly', false);
                    $('#section_'+section).find('.btn').prop('disabled', false);
                    $('#unhide_'+section).show();
                    $('#hide_'+section).hide();
                },
                fail: function (error) {
                    alert(error);
                }
            });
        }

        function save_section(section)
        {   
            // For Safety Disabling Section Elements for Slow Internet Connections
            $('#section_'+section).find('.form-control').prop('readonly', true);
            $('#section_'+section).find('.btn').prop('disabled', true);
            
            $.ajax({
                type: "POST",
                url: "http://activeitzone.com/demo/matrimonial/home/profile/update_"+section,
                cache: false,
                data: $('#form_'+section).serialize(),
                success: function(response) {
                    // alert($('#form_'+section).serialize());

                    if (IsJsonString(response)) {
                        // Re_Enabling the Elements
                        $('#section_'+section).find('.form-control').prop('readonly', false);
                        $('#section_'+section).find('.btn').prop('disabled', false);
                        // Displaying Validation Error for ajax submit
                        // alert('TRUE');
                        var JSONArray = $.parseJSON(response);
                        var html = "";
                        $.each(JSONArray, function(row, fields) {
                            // alert(fields['ajax_error']);
                            html = fields['ajax_error'];
                        });
                        $('#validation_info').html(html);
                        $('#ajax_validation_alert').show();
                        setTimeout(function() {
                            $('#ajax_validation_alert').fadeOut('fast');
                        }, 5000); // <-- time in milliseconds
                    }
                    else{
                        // Loading the specific Section Area
                        // alert('FALSE');
                        $('#section_'+section).html(response);
                        $('#ajax_alert').show();
                        setTimeout(function() {
                            $('#ajax_alert').fadeOut('fast');
                        }, 5000); // <-- time in milliseconds
                    }
                    
                },
                fail: function (error) {
                    alert(error);
                }
            });
        }

        function IsJsonString(str) {
            try {
                JSON.parse(str);
            } catch (e) {
                return false;
            }
            return true;
        }


        function open_message_box(thread_id, now){

            $("#msg_body").html("<div class='text-center' id='payment_loader'><i class='fa fa-refresh fa-5x fa-spin'></i></div>");
            $("#msg_box_header").html("<a class='c-base-1' target='_blank' href='http://activeitzone.com/demo/matrimonial/home/member_profile/"+$(now).find('.contacts-list-name').data('member')+"'>"+$(now).find('.contacts-list-name').html()+"</a>");
            $("#msg_refresh").html("<a onclick='refresh_msg("+thread_id+")'><i class='fa fa-refresh'></i> Refresh</a>");
            $.ajax({
                type: "POST",
                url: "http://activeitzone.com/demo/matrimonial/home/get_messages/"+thread_id,
                cache: false,
                success: function(response) {
                    /*clearInterval(message_interval);
                    var message_interval =  setInterval(function(){
                                                $("#msg_body").load('http://activeitzone.com/demo/matrimonial/home/get_messages/'+thread_id);
                                            }, 4000);*/
                                            $("#msg_body").removeAttr("style");
                                            $("#message_text").removeAttr('disabled');
                                            $("#message_text").val('');
                                            $("#msg_body").html(response);
                                        }
                                    });
        }

        function refresh_msg(thread_id){
            $(".contacts-list").find("#thread_"+thread_id).click();
        }

        function load_all_msg(thread_id){
            $("#msg_body").html("<div class='text-center' id='payment_loader'><i class='fa fa-refresh fa-5x fa-spin'></i></div>");
            $("#message_text").attr('disabled', true);
            $("#msg_send_btn").attr('disabled', true);
            $.ajax({
                type: "POST",
                url: "http://activeitzone.com/demo/matrimonial/home/get_messages/"+thread_id+"/all_msg",
                cache: false,
                success: function(response) {
                    $("#message_text").removeAttr('disabled');
                    $("#msg_send_btn").removeAttr('disabled');
                    $("#msg_body").html(response);
                }
            });
        }

        function msg_send(thread, from, to){
            if ($("#message_text").val().length != 0) {
                var form_data = ($("#message_form").serialize());
                $("#message_text").attr('disabled', 'disabled');
                $("#msg_send_btn").attr('disabled', 'disabled');
                $("#msg_send_btn").html("<i class='fa fa-refresh fa-spin'></i>");

                $.ajax({
                    type: "POST",
                    url: "http://activeitzone.com/demo/matrimonial/home/send_message/"+thread+"/"+from+"/"+to,
                    data: form_data,
                    success: function(response) {
                        // alert('done');
                        $("#message_text").removeAttr('disabled');
                        $("#message_text").val('');
                        $("#msg_send_btn").html("Send");
                        $.ajax({
                            type: "POST",
                            url: "http://activeitzone.com/demo/matrimonial/home/get_messages/"+thread,
                            cache: false,
                            success: function(response) {
                                $("#msg_body").html(response);
                            }
                        });
                    }
                });
            }
        }
    </script>
    <style type="text/css">
    .xs_nav_item {
        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
    }
</style>                        <footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-md-3 col-lg-3">
                    <div class="col">
                        <a class="navbar-brand" href="#">
                            <img src="http://activeitzone.com/demo/matrimonial/uploads/footer_logo/footer_logo_1514108335.png" class="img-responsive" width="100%">
                        </a>
                        <div class="text-center"><small>Demo text from Admin</small></div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 d-none d-lg-block d-md-block">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                        Main Menu</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home" title="Home">
                                Home</a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/plans" title="Premium Plans">
                                Premium Plans</a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/stories" title="Happy Stories">
                                Happy Stories</a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/contact_us" title="Contact Us">
                                Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 d-none d-lg-block d-md-block">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                        Quick Search</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/listing" title="All Members">
                                All Members</a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/listing/premium_members" title="Premium Members">
                                Premium Members</a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/listing/free_members" title="Free Members">
                                Free Members</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                        Useful Links</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/faq" title="FAQ">
                                FAQ </a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/terms_and_conditions" title="Terms &amp; Conditions">
                                Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="http://activeitzone.com/demo/matrimonial/home/privacy_policy" title="Prvacy Policy">
                                Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-1">
        <div class="container">
            <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                <div class="col col-sm-7 col-xs-12">
                    <div class="copyright text-xs-center text-sm-left mt-2">
                       Copyright © 2018 <a href="http://activeitzone.com/demo/matrimonial/" class="c-base-1" target="_blank" title="Webpixels - Official Website">
                        <strong class="strong-400">Active  Matrimonial CMS</strong>
                    </a> - All Rights Reserved                                            </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>