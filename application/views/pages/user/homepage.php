
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/style.css">
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/main.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kodchasan:400,500,600,700" rel="stylesheet">
<style type="text/css">
    body{
        font-family: 'Kodchasan', sans-serif;

    }
</style>
<section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/sinew.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
    <div class="overlay"></div>
    <div class="container" style="padding: 10px">
        <div class="row align-items-center probootstrap-animate" style="padding: 50px 10px 10px 10px;">
            <div class="col-md w3-hide-small">

                <!-- text based logo -->

                <div class="">
                    <!-- <a class="btn w3-center" style="background-color: black;border:1px solid;border-color: white;border-radius: 0;padding:10px" href="#">
                      <img src="<?php echo base_url(); ?>assets/images/mea_logo.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
                    </a>
                    <p style="color: white">
                      <br>
                      Welcomes you for 
                  </p> -->
<!--                    <h1 class="heading mb-2 display-4 font-light probootstrap-animate text-white"><b>SEARCH YOUR DREAM PARTNER HERE.</b></h1>
                    <h3 class="heading mb-2 display-5 font-light probootstrap-animate text-white"><i> We make them meet, Love brings them Together. </i></h3>-->
                    <!-- <h4 class="heading mb-2 display-5 font-light probootstrap-animate text-white">... search your Dream Partner here</h4> -->

                </div>         
                <br>          
            </div> 

            <div class="col-md-5">
                <form id="register_userForm" class="probootstrap-form w3-black" style=" background-color:transparent !important; border:none !important; padding: 20px 40px 20px 40px">
                    <div id="regForm" >
<!--                        <h5 class="w3-center text-uppercase"><b> Register Here </b></h5><br>-->
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="" class="w3-large" style="text-transform: capitalize;">Gender :</label>
                                        <div class="radio radio-primary">
                                            <input type="radio" name="gender" id="male" value="1" >
                                            <label for="male" style="text-transform: capitalize;" class="pr-3">Male</label>
                                            <input type="radio" name="gender" id="female" value="2" >
                                            <label for="female" style="text-transform: capitalize;">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="" class="w3-large" style="text-transform: capitalize;">Var/ Vadhu's Name :</label>
                                        <label for="id_memberName" style="width: 100%;">
                                            <input type="text" required placeholder="Enter your full name here *" name="memberName" id="id_memberName" class="form-control" style="width: 100%;height: calc(1.8125rem + 2px);border-radius: 0;border:none;">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="" class="w3-large" style="text-transform: capitalize;">Email :</label>
                                        <label for="id_email" style="width: 100%;">
                                            <input type="email" placeholder="Enter your Email ID here *" name="emailId" id="id_email" class="w3-input" style="width: 100%;height: calc(1.8125rem + 2px);">
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="" class="w3-large" style="text-transform: capitalize;">Caste :</label>
                                        <label for="id_location" style="width: 100%;">
                                            <select class="w3-input" style="width: 100%;padding-bottom: 0;padding-top: 0;height: calc(1.8125rem + 2px);">
                                                <option value="0" class="w3-light-grey" selected>Select your Caste*</option>
                                                <option value="21">Brahmin</option>

                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="" class="w3-large" style="text-transform: none;">Mobile Number :</label>
                                        <label for="id_mobileNumber" style="width: 100%;">
                                            <div>
                                                <div class="w3-col l4 s5">
                                                    <select class="w3-input" style="width: 100%;margin-bottom: 0;margin-top: 0;height: calc(1.8125rem + 2px);">
                                                        <?php
                                                        foreach ($all_countries as $key) {
                                                            $selected = '';
                                                            if ($key['sortname'] == 'IN') {
                                                                $selected = 'selected';
                                                            }
                                                            echo '<option value="' . $key['phonecode'] . '" ' . $selected . '>' . $key['sortname'] . ' (+' . $key['phonecode'] . ')</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="w3-col l8 s7" style="padding-left: 8px">
                                                    <input type="number" class="w3-input" id="id_mobileNumber" placeholder="Mobile Number here *" style="width: 100%;height: calc(1.8125rem + 2px);">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <button type="submit" id="register_userBtn" class="btn btn-block w3-text-white" style="background-color: #5E32E1">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12 text-center">
                            Already have an account?<a class="c-gray-light" href="<?php echo base_url(); ?>login" class=""><span class="w3-text-blue" > Log In here</span></a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

</section>
<section class="slice sct-color-1">
    <br>
    <div class="container">
        <div class="col-md-12 w3-center">
            <h2 class="border-bottom probootstrap-section-heading"> Our Pillars </h2>
        </div>

        <span class="space-xs-xl"></span>
        <div class="swiper-js-container">
            <div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
                <div class="swiper-wrapper pb-5">
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                    <!-- Pillar start -->
                    <div class="swiper-slide col-md-4" data-swiper-autoplay="2000">
                        <div class="block block--style-5">
                            <div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
                                <div class="profile-picture profile-picture--style-2">
                                    <div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
                                    <div class="mt-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-1 text-white" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pillar ends -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination">
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section class="slice--offset parallax-section parallax-section-lg" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/home_page/parallax_image/parallax1.jpg);">
    <span class="mask mask-dark--style-2"></span>
    <div class="container">
        <div class="row py-3 justify-content-center">
            <div class="col-lg-8 col-md-8 text-center">
                <h1 class="heading heading-inverse heading-1 strong-400 text-normal">
                    Why Parinaay  Matrimonials? </h1>
                <span class="clearfix"></span>
                <div class="fluid-paragraph fluid-paragraph-sm mt-3 mb-3 c-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Demo in Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque diam, luctus at laoreet in, auctor ut tellus. Etiam enim lacus, ornare et tempor, rhoncus rhoncus sem.                
                </div>
                <div class="btn-container mt-5">
                    <a href="registration.html" class="btn btn-styled btn-md btn-base-1 z-depth-2-bottom">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="slice sct-color-1">
    <br>
    <div class="container">
        <div class="col-md-12 w3-center">
            <h2 class="border-bottom probootstrap-section-heading"> Testimonials from Successfull Couples </h2>
        </div>

        <span class="space-xs-xl"></span>
        <div class="swiper-js-container">
            <div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
                <div class="swiper-wrapper pb-5">

                    <div class="swiper-slide z-depth-2-bottom col-lg-4" data-swiper-autoplay="2300">
                        <div class="card row">
                            <div class="card-image">
                                <div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
                            </div>
                            <div class="card-body">
                                <h3 class="heading heading-5 strong-500 story_heading">Couple name 1</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide z-depth-2-bottom col-lg-4" data-swiper-autoplay="2300">
                        <div class="card row">
                            <div class="card-image">
                                <div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
                            </div>
                            <div class="card-body">
                                <h3 class="heading heading-5 strong-500 story_heading">Couple name 2</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide z-depth-2-bottom col-lg-4" data-swiper-autoplay="2300">
                        <div class="card row">
                            <div class="card-image">
                                <div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
                            </div>
                            <div class="card-body">
                                <h3 class="heading heading-5 strong-500 story_heading">Couple name 3</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide z-depth-2-bottom col-lg-4" data-swiper-autoplay="2300">
                        <div class="card row">
                            <div class="card-image">
                                <div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
                            </div>
                            <div class="card-body">
                                <h3 class="heading heading-5 strong-500 story_heading">Couple name 4</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide z-depth-2-bottom col-lg-4" data-swiper-autoplay="2300">
                        <div class="card row">
                            <div class="card-image">
                                <div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
                            </div>
                            <div class="card-body">
                                <h3 class="heading heading-5 strong-500 story_heading">Couple name 5</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide z-depth-2-bottom col-lg-4" data-swiper-autoplay="2300">
                        <div class="card row">
                            <div class="card-image">
                                <div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
                            </div>
                            <div class="card-body">
                                <h3 class="heading heading-5 strong-500 story_heading">Couple name 6</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            set_story_box_height();
        }, 1000);
    });

    function set_story_box_height() {
        var max_title = 0;
        $('.swiper-slide .story_heading').each(function () {
            var current_height = parseInt($(this).css('height'));
            if (current_height >= max_title) {
                max_title = current_height;
            }
        });
        $('.swiper-slide .story_heading').css('height', max_title);
    }
</script>
<section class="slice bg-base-2 no-padding">
    <div class="container">
        <div class="container-inner sct-color-1">
            <div class="block-card-wrapper">
                <div class="block-card-section">
                    <div class="" id="same_height_1">
                        <div class="row">
                            <div class="col-lg-12 no-padding">
                                <div class="same-height bg-base-2" data-same-height="#same_height_1">
                                    <center>
                                        <div class="sct-inner px-4 py-4">
                                            <h2 class="heading heading-4 strong-400">
                                                Contact Information </h2>
                                            <p class="mt-3 mb-3">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor                                            </p>
                                            <div class="icon-block--style-3 mb-1 mt-5">
                                                <i class="icon ion-ios-telephone bg-base-4"></i>
                                                <span class="heading heading-6 strong-400">
                                                    +91 - <?php echo $all_contact[0]['admin_number']; ?> </span>
                                            </div>
                                            <div class="icon-block--style-3 mb-3">
                                                <i class="icon ion-ios-email bg-base-4"></i>
                                                <span class="heading heading-6 strong-400">
                                                    <?php echo $all_contact[0]['admin_email']; ?> </span>
                                            </div>
                                            <div class="icon-block--style-3">
                                                <i class="icon ion-ios-location bg-base-4"></i>
                                                <span class="heading heading-6 strong-400">
                                                    <?php echo $all_contact[0]['admin_office_address']; ?> </span>
                                            </div>
                                            <span class="clearfix"></span>
                                            <a href="<?php echo base_url(); ?>user/contact_us" class="btn btn-styled w3-hide-small btn-block btn-base-1 btn-outline btn-circle mt-5 z-depth-2-bottom" style="width: 40%;color: #FFF!important">
                                                Contact Us</a>
                                            <a href="<?php echo base_url(); ?>user/contact_us" class="btn w3-hide-large w3-hide-medium btn-styled btn-block btn-base-1 btn-outline btn-circle mt-5 z-depth-2-bottom" style="color: #FFF!important">
                                                Contact Us</a>
                                            <span class="clearfix"></span>
                                            <div class="text-center">
                                                <ul class="social-media social-media--style-1-v4 mt-4">
                                                    <li><a href="http://facebook.com/" class="facebook" target="_blank" title="Facebook"><i class="fa fa-facebook-square"></i></a>
                                                    </li>
                                                    <li><a href="http://google.com/" class="facebook" target="_blank" title="Google-plus"><i class="fa fa-google-plus-square"></i></a>
                                                    </li>
                                                    <li><a href="http://twitter.com/" class="facebook" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i>	</a>
                                                    </li>
                                                    <li><a href="http://skype.com/" class="facebook" target="_blank" title="Skype"><i class="fa fa-skype"></i>	</a>
                                                    </li>
                                                    <li><a href="http://pinterest.com/" class="facebook" target="_blank" title="Pinterest">	<i class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li><a href="http://youtube.com/" class="facebook" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="col-md-12 no-padding">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.578573098557!2d73.76471457487463!3d18.45743398155607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295eb7242f4f9%3A0xbb7abb920bc02587!2sAnandtara&#39;s+Haritara!5e0!3m2!1sen!2sin!4v1539411827476" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<script src="<?php echo base_url(); ?>assets/client/template/front/js/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(function () {
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
</script>
<script>
    $(document).ready(function () {
        $("#aged_from").change(function () {
            var from = parseInt($("#aged_from").val());
            var to = parseInt($("#aged_to").val());
            if (to < from) {
                var to = $("#aged_to").val(from);
            }
        });
        $("#aged_to").change(function () {
            var from = parseInt($("#aged_from").val());
            var to = parseInt($("#aged_to").val());
            if (to < from) {
                var to = $("#aged_to").val(from);
            }
        });
    });

    $(".s_religion").change(function () {
        var religion_id = $(".s_religion").val();
        if (religion_id == "") {
            $(".s_caste").html("<option value=''>Choose A Religion First</option>");
            $(".s_sub_caste").html("<option value=''>Choose A Caste First</option>");
        } else {
            $.ajax({
                url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_caste/caste/religion_id/" + religion_id,
                type: 'POST',
                // form submit method get/post
                dataType: 'html',
                // request type html/json/xml
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $(".s_caste").html(data);
                    $(".s_sub_caste").html("<option value=''>Choose A Caste First</option>");
                },
                error: function (e) {
                    console.log(e)
                }
            });
        }
    });

    $(".s_caste").change(function () {
        var caste_id = $(".s_caste").val();
        if (caste_id == "") {
            $(".s_sub_caste").html("<option value=''>Choose A Caste First</option>");
        } else {
            $.ajax({
                url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_sub_caste/sub_caste/caste_id/" + caste_id,
                type: 'POST',
                // form submit method get/post
                dataType: 'html',
                // request type html/json/xml
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == false) {
                        $(".s_sub_caste").html("<option value=''>None</option>");
                    } else {
                        $(".s_sub_caste").html(data);
                    }
                    ;
                },
                error: function (e) {
                    console.log(e)
                }
            });
        }
    });
</script>                    
