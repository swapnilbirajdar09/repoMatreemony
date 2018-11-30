<style>
    .parallax { 
        /*/ The image used /*/

        /*/ Set a specific height /*/
        height: auto; 

        /*/ Create the parallax scrolling effect /*/
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    ul.social-network {
        list-style: none;
        display: inline;
        margin-left:0 !important;
        padding: 0;
    }
    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }


    /* footer social icons */
    .social-network a.icoFacebook:hover {
        background-color:#3B5998;
    }
    .social-network a.icoTwitter:hover {
        background-color:#33ccff;
    }


    .social-network a.icoLinkedin:hover {
        background-color:#007bb7;
    }
    .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
    .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
        color:#fff;
    }
    a.socialIcon:hover, .socialHoverClass {
        color:#44BCDD;
    }

    .social-circle li a {
        display:inline-block;
        position:relative;
        margin:5px auto 0 auto;

        -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;
        text-align:center;
        width: 40px;
        height: 40px;
        font-size:20px;
    }
    .social-circle li i {
        margin:0;
        line-height:40px;
        text-align: center;
    }

    .social-circle li a:hover i, .triggeredHover {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }
    .social-circle i {
        color: #fff;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        -ms-transition: all 0.8s;
        transition: all 0.8s;
    }

    .social-circle a {
        background-color: #D3D3D3;   
    }

    .testimonial_img{
        width: 100%;
        height: 250px;
        border-radius: 100%;
        background-color: #000000;
        text-align: center;
        overflow: hidden;
        border: 5px solid #ffffff;
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
    }
</style>

<!-- Home-Area -->
<header class="home-area overlay" id="home_page" style="background: url(<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/couple-min.jpg) no-repeat scroll center bottom / cover;">
    <div class="container" >
        <div class="row">
            <div class="col-xs-12 hidden-sm col-md-8 hidden-xs">
                <div class="space-80 hidden-xs"></div>
                <h1 class="wow fadeInUp handwritten" data-wow-delay="0.4s"  style="margin-top: 20px">Search your Dream Partner here.</h1>
                <div class="space-20"></div>
                <div class="desc wow fadeInUp handwritten" data-wow-delay="0.6s">
                    <h4 class="handwritten">We help them meet, Love brings them Together.</h4>
                </div>
                <div class="space-20"></div>
                <a href="#contact_page" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-phone-handset"></i>Contact Us For any Inquiry</a>
            </div>
            <div class="col-xs-12 col-md-4" ng-app="loginApp" ng-controller="loginController">
                <div class="w3-col l12 w3-black w3-padding" style ="opacity: 0.7;filter: alpha(opacity=50);">
                    <div class="w3-col l12 w3-center" style="z-index: -1">
                        <div class="space-30"></div>
                        <div class="btn-group btn-group-lg">
                            <a class="btn w3-text-white" id="register_tabbtn" style="border-color: white; border:1px solid;padding: 8px">REGISTER</a>
                            <a class="btn btn-primary w3-text-white" id="login_tabbtn" style="border-color: white; border:1px solid;padding: 8px">LOG IN</a>
                        </div>
                        <div class="space-10"></div>
                    </div>

                    <div class="subscribe-form" id="registerDiv" style="padding:20px">
                        <h3 class="blue-color"><b>Register Now</b></h3>
                        <form method="POST" action="<?php echo base_url(); ?>purchase_package">
                            <div class="w3-col l12">
                                <label class="w3-large">Gender : </label>
                                <span class="hidden-xs"> <input type="radio" name="gender" value="Male" class="w3-radio" style="margin-left: 15px" required> Male</span>
                                <span class="hidden-xs"> <input type="radio" name="gender" value="Female" class="w3-radio" style="margin-left: 15px" required> Female</span>
                                <div class="w3-col l12 hidden-sm hidden-lg hidden-md">
                                    <span> <input type="radio" name="gender" class="w3-radio" required> Male</span>
                                    <span> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Female</span>
                                </div>
                            </div>
                            <div class="w3-col l12 w3-margin-bottom hidden-md">
                                <div class="w3-col l6  " style="padding-right: 5px;">
                                    <label class="w3-large">First Name : </label>
                                    <input type="text" class="w3-input control w3-text-black" autocomplete="off" placeholder="Your first name" required name="first_name" id="mc-fname">
                                </div>
                                <div class="w3-col l6" style="padding-right: 5px;">
                                    <label class="w3-large">Last Name : </label>
                                    <input type="text" class="w3-input control w3-text-black" autocomplete="off" placeholder="Your last name*" required name="last_name" id="mc-lname">
                                </div>
                            </div>
                            <div class="w3-col l12 w3-margin-bottom" style="padding-right: 5px;">
                                <label class="w3-large">Email ID : </label>
                                <input type="email" name="email_id" class="w3-input control w3-text-black" autocomplete="off" placeholder="Enter your email*" required id="mc-email">
                            </div>
                            <div class="w3-col l12 w3-margin-bottom" style="padding-right: 5px;">
                                <label class="w3-large">Caste : </label>
                                <select class="w3-input control w3-text-black" name="caste" id="mc-caste">
                                    <option value="0" class="w3-light-black" selected>Select your Caste*</option>
                                    <option value="Hindu Mahar">Hindu Mahar</option>    									
                                    <option value="Mahayana">Mahayana</option>                      
                                    <option value="Boudhha">Boudhha</option>                      
                                    <option value="Nav Bouddha">Nav Bouddha</option>                      
                                    <option value="Nichiren Buddhism">Nichiren Buddhism</option>    									
                                    <option value="Pure Land Buddhism">Pure Land Buddhism</option>    									
                                    <option value="Tantrayana (Vajrayana Tibetan)">Tantrayana (Vajrayana Tibetan)</option>    									
                                    <option value="Theravada (Hinayana)">Theravada (Hinayana)</option>    									
                                    <option value="Tendai Buddhism (Japanese)">Tendai Buddhism (Japanese)</option>    									
                                    <option value="Zen Buddhism (China)">Zen Buddhism (China)</option>    									
                                    <option value="Others">Others</option>    									
                                </select>
                            </div>

                            <div class="w3-col l12 w3-margin-bottom">
                                <div class="w3-col l12"><label class="w3-large">Mobile Number : </label></div>
                                <div class="w3-col l4 s5">
                                    <select class="w3-input control w3-text-black" name="country_code" id="country_code" style="padding-right: 5px;">
                                        <option value="0" class="w3-light-grey">Select Country code*</option>
                                        <?php
                                        foreach ($all_countries as $key) {
                                            $selected = '';
                                            if ($key['sortname'] == 'IN') {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="+' . $key['phonecode'] . '" ' . $selected . '>' . $key['sortname'] . ' (+' . $key['phonecode'] . ')</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="w3-col l8 s7" style="padding-left: 8px">
                                    <input type="number" name="mob_number" autocomplete="off" class="w3-input control w3-text-black" placeholder="Enter your mobile number*" required min="0" id="mc-number" style="height: 32px;">	
                                </div>
                                <div class="w3-col l12 w3-margin-top" style="padding-right: 5px;"> 
                                    <input type="checkbox" name="terms_conditions" class=" w3-text-black" required id="mc-chekbox">
                                    <label class="w3-medium">
                                        I agree the <a href="<?php echo base_url(); ?>user/terms_conditions" class="w3-text-grey" target="_blank">Terms & Conditions.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="w3-col l12 text-center w3-margin-bottom">
                                <div class="space-20"></div>
                                <!-- <p style="color: red;font-size: 12px;line-height: 15px"><b>NOTE: Currently we are working on Registration. Till then, you can contact the Administrator for Registration. Soon you will be able to register yourself from this website.</b></p> -->
                                <button class="bttn-default wow fadeInUp btn btn-block" type="submit" style="border-radius: 5px; background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);"> Proceed Next <i class="lnr lnr-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- login form -->
                    <div class="subscribe-form" id="loginDiv" style="padding:20px;display: none;">
                        <h3 class="blue-color"><b>Welcome Back!</b></h3>
                        <form ng-submit="userLoginsubmit()">
                            <div class="w3-col l12 w3-center" ng-bind-html="loginMessage">
                                <p class="w3-text-white w3-red"><i class="fa fa-warning"></i> Login credentials are incorrect ! </p>
                            </div>
                            <div class="w3-col l12 w3-margin-bottom">
                                <label class="w3-large">Email ID : </label>
                                <input type="email" ng-model="login_email_id" autocomplete="off" name="login_email_id" class="w3-input control w3-text-black" placeholder="Enter your email*" required id="login_mc-email">
                            </div>
                            <div class="w3-col l12 w3-margin-bottom">
                                <label class="w3-large">Password : </label>
                                <input type="password" ng-model="login_password" autocomplete="off" name="login_password" class="w3-input control w3-text-black" placeholder="Enter your password*" required id="login_mc-password">
                            </div>
                            <div class="w3-col l12 text-center w3-margin-bottom">
                                <div class="space-20"></div>
                                <button class="bttn-default btn btn-block" ng-bind-html="loginBtnText" ng-enabled="loginDisable" type="submit" style="border-radius: 5px; background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);"><i class="fa fa-lock"></i> Log In</button>
                                <div class="space-20"></div>
                                <a href="<?php echo base_url(); ?>forget_password" class="btn blue-color"><span class="w3-text-white"> Forget Password ?</span></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="space-40"></div>
            </div>
        </div>
    </div>
</header>
<!-- Home-Area-End -->
<!-- About-Area -->
<section class="" id="about_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                 <!-- <img src="<?php echo base_url(); ?>assets/client/uploads/header_logo/logo.jpeg" alt="About Logo"> -->
                    <div class="space-20"></div>
                    <h5 class="title">About Us</h5>
                    <div class="space-30"></div>
                    <h3 class="blue-color">A Successful Marriage Requires Falling In Love Many Times, Always With Same Person.</h3>
                    <div class="space-20"></div>
                    <p>We Help Them Meet , Love Brings Them Together.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-Area-End -->

<!-- Progress-Area -->
<div class="space-80 hidden-lg "></div>
<section class="progress-area gray-bg" id="about_page" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/hands_sq.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 hidden-sm hidden-xs">
                <div class="page-title section-padding">
                    <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Our Mission</h5>
                    <div class="space-10 hidden-md"></div>
                    <h3 class="dark-color wow fadeInUp hidden-md" data-wow-delay="0.4s">Great Matchmaking Ever</h3>
                    <div class="space-20 "></div>
                    <div class="desc wow fadeInUp hidden-md" data-wow-delay="0.6s">
                        <p>Our Mission is to provide a pleasant and superior matchmaking experience to our Brides and Grooms to 
                            meet their prospective life partners along with protecting their privacy and security.</p>
                    </div>
                    <div class="space-50 hidden-md"></div>
                    <a href="<?php echo base_url(); ?>user/about_us" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 hidden-md hidden-lg">
                <div class="page-title section-padding w3-text-white">
                    <h5 class="title wow fadeInUp w3-text-white" data-wow-delay="0.2s">Our Mission</h5>
                    <div class="space-10"></div>
                    <h3 class="dark-color wow fadeInUp w3-text-white" data-wow-delay="0.4s">Great Matchmaking Ever</h3>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Our Mission is to provide a pleasant and superior matchmaking experience to our Brides and Grooms to 
                            meet their prospective life partners along with protecting their privacy and security.</p>
                    </div>
                    <div class="space-50"></div>
                    <a href="<?php echo base_url(); ?>user/about_us" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Progress-Area-End -->
<div class="" id="pillars_page">    	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <div class="space-80 hidden-lg "></div>
                    <h5 class="title">Our Pillars</h5>
                    <h3 class="dark-color">People who raised "BUDDHIST PARINAAY"</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <img src="<?php echo base_url(); ?>assets/demo/images/piller_vidya.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" style="height: 230px;width: auto;">
                    <!-- <div class="col-md-12  w3-padding-top">
                     <ul class="social-network social-circle">
                 
                      <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                 
                      <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div> -->
                </div>


                <div class="w3-col m6  w3-padding-large">
                    <h4 class=""><b>Mrs. Vidya Sunil Taware</b><br></h4>
                    <h5><p>B.COM.LLB GDC. AMC,</p>
                        <p>Pune.</p>
                    </h5>
                    <!-- <p style="line-height: 25px; text-align: justify;"> In this journey of Buddhist Parinay our Main Supporter and Counselor is Mrs. Vidya Sunil Taware. We are thankful to her for help and guidance which is valuable to us.</p> -->
                    <a href="<?php echo base_url(); ?>user/pillars/pillar_1" class="read-more">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <img src="<?php echo base_url(); ?>assets/demo/images/pillar2.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of A.K. Gaikwad" style="height: 250px;width: auto;">
                    <!-- <div class="col-md-12  w3-padding-top">
                     <ul class="social-network social-circle">
                 
                      <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                 
                      <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div> -->
                </div>
                <div class="w3-col m6  w3-padding-large">
                    <h4 class=""><b>Mr. A.K. Gaikwad</b><br></h4>
                    <h5>
                        <p>Asst. Divisional Manager (Retd.)</p>
                        <p>United India Insurance Co. Ltd.</p>
                        <p>Sr. Activist: <b>BAMCEF</b>.</p>
                    </h5>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Download-Area -->
<div class="parallax download-area overlay" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/sinew-min.jpg'); height: 450px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center" style="padding:80px">
                <div class="space-20"></div>
                <h3 class="white-color">Join <b>BUDDHIST PARINAAY</b> and Find your perfect match.</h3>
                <div class="space-20 hidden-xs"></div>
                <p class="hidden-xs">Buddhist Parinay - Find Buddhist Brides and Grooms on our Portal.</p>
                <div class="space-20 hidden-xs"></div>
                <a href="#" class="bttn-white sq"><i class="w3-large lnr lnr-rocket"></i>Register</a> 
                <a href="<?php echo base_url(); ?>user/contact_us" class="bttn-white sq" data-wow-delay="0.8s"><i class="w3-large lnr lnr-envelope"></i>Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Download-Area-End -->
<!-- Testimonial-Area -->
<section class="testimonial-area" id="testimonial_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">Testimonials</h5>
                    <h3 class="dark-color">Our Client Loves US</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="team-slide">
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/sshelar-min.jpg');">
                        </div>
                        <br>
                        <h4>Mr. & Mrs. Shelar</h4>
                        <p class="text-small">I'm really grateful to buddhistparinay.in for helping me to find my life partner. It is the perfect place to find like minded individuals on your journey to find your partner.</p>
                    </div>
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/apansare-min.jpg');background-position: center;background-repeat: no-repeat;background-size: contain;">
                        </div>
                        <br>
                        <h4>Amit & Komal Pansare</h4>
                        <p>I am very much thankful to buddhistparinay.in, who helped me to found my dream partner.Marriages are made in heaven but this site is the best medium for fulfilling dreams.</p>
                    </div>
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/aspansare1-min.JPG');">
                        </div>
                        <br>
                        <h4>Ashish & Ashwini Pansare</h4>
                        <p>We both would like to specially thank the team at buddhistparinay.in to have provided such an important platform for interaction and being able to go ahead with the right person to spend the rest of the life in the happiest possible way! Once again we thanks to buddhistparinay.in for helping us find each other.</p>
                    </div>
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/sahil-min.JPG');">
                        </div>
                        <br>
                        <h4>Mr. & Mrs. Sonar</h4>
                        <p>Thank you buddhistparinay.in for helping us to select a right partner. You have brought true love to our life. I would like to thank Buddhist Parinay team for excellent service. Your  website was user friendly and easy to manage. I would definitely recommend Buddhist Parinay to others to find there soul mate. We shared our interest to each other and our family too were interested.</p>
                    </div>
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/pwaghmare-min.jpg');">
                        </div>
                        <br>
                        <h4>Prashant & Aishwarya Waghmare</h4>
                        <p>I would like to thank Buddhist Parinay for helping me find my soul mate. The way they treat their client is very friendly and I felt they present all genuine profiles of your choices.</p>
                    </div>
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/kakade.jpg');">
                        </div>
                        <br>
                        <h4>Mr & Mrs Kakade</h4>
                        <p>we both have seen each other's profile on buddhistparinay.in and liked very much. I would thank to buddhistparinay.in that it helped me to find my Loving buddhistparinay.in.</p>
                    </div>
                    <div class="team-box" style="padding: 20px">
                        <div class="testimonial_img" style="background-image: url('<?php echo base_url(); ?>assets/demo/images/testimonials/kamble.jpg');">
                        </div>
                        <br>
                        <h4>Bharat & Manda Kamble</h4>
                        <p>Thanks to Buddhistparinay.in for great help to find perfect life partner. Thanks once again.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial-Area-End -->
<div class="section-padding" id="contact_page" style="padding:0 0 80px 0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">Contact Us</h5>
                    <h3 class="dark-color">Find Us By Below Details</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="footer-box">
                    <div class="box-icon">
                        <span class="lnr lnr-map-marker"></span>
                    </div>
                    <p><?php echo $all_contact[0]['admin_office_address']; ?></p>
                </div>
                <div class="space-30 hidden visible-xs"></div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="footer-box">
                    <div class="box-icon">
                        <a href="tel:+91<?php echo $all_contact[0]['admin_number']; ?>" class="w3-text-white"><span class="lnr lnr-phone-handset"></span></a>
                    </div>
                    <p>+91 - <?php echo $all_contact[0]['admin_number']; ?></p>
                </div>
                <div class="space-30 hidden visible-xs"></div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="footer-box">
                    <div class="box-icon">
                        <a href="mailto:<?php echo $all_contact[0]['admin_email']; ?>" class="w3-text-white"><span class="lnr lnr-envelope"></span></a>
                    </div>
                    <p><?php echo $all_contact[0]['admin_email']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <section class="w3-col l12 no-padding">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.5631577100594!2d73.76872971489186!3d18.458133187445398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcee388fe67e656e!2sBuddhist+parinay!5e0!3m2!1sen!2sin!4v1543321421343" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</div>

<script type="text/javascript">
    $('#login_tabbtn').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('btn-primary');
        $('#register_tabbtn').addClass('btn-primary');
        $('#registerDiv').hide();
        $('#loginDiv').fadeIn(600);

    });

    $('#register_tabbtn').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('btn-primary');
        $('#login_tabbtn').addClass('btn-primary');
        $('#loginDiv').hide();
        $('#registerDiv').fadeIn(600);

    });
</script>
<script src="<?php echo base_url(); ?>assets/js/module/user/home.js"></script>
