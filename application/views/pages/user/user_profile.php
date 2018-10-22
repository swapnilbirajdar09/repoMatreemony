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
                                <a href="#" class="nav-link p_nav active">
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

                                            <div class="col-md-12 w3-margin-top w3-center">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1_thumb.jpg" class="img img-thumbnail" style="width: 60px;height: 60px">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1_thumb.jpg" class="img img-thumbnail" style="width: 60px;height: 60px">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1_thumb.jpg" class="img img-thumbnail" style="width: 60px;height: 60px">
                                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1_thumb.jpg" class="img img-thumbnail" style="width: 60px;height: 60px">
                                            </div>
                                            <div class="useful-links">
                                               <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav" onclick="profile_load('change_pass')">
                                                <b style="font-size: 12px">Change Password</b>
                                            </a>
                                            <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav" href="<?php echo base_url(); ?>user/login/logoutUser">
                                                <b style="font-size: 12px">Logout</b>
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
                                    <span>Profile ID</span>
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
                                                <span>Father's Name</span>
                                            </td>
                                            <td>
                                                Ashok Munde                           
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

</div>
</div>
<div id="section_life_style">
    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
        <div id="info_life_style">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">
                Life Style            </h3>
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
    </div>        
</div>
<div id="section_education_and_career">
    <div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
        <div id="info_education_and_career">
            <div class="card-inner-title-wrapper pt-0">
                <h3 class="card-inner-title pull-left">
                  Relatives Information          
              </h3>
              <div class="pull-right">

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

</div>
</div>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_introduction">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
            Expectations  </h3>
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
</style>                       
</div>
</div>
</div>