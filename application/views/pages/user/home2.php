<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Parinaay Matrimonials</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/demo/css/responsive.css">
    <script src="<?php echo base_url(); ?>assets/demo/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


<style type="text/css">
	body{
                font-family: 'Montserrat', sans-serif;

            }
</style>
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
</style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h3 class="w3-text-white"><b><i>Budhisht Parinay</i></b></h3></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active">
                    <li><a href="#home_page">Home</a></li>
                    <li><a href="#about_page">About Parinaay</a></li>
                    <li><a href="#pillars_page">Our Pillars</a></li>
                    <li><a href="#testimonial_page">Testimonials</a></li>
                    <!-- <li><a href="<?php echo base_url(); ?>login">Log In</a></li> -->
                </ul><!-- 
                <div class="right-button hidden-xs">
                    <a href="#">Contact Us</a>
                    <a href="#">Log In</a>
                </div> -->
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page" style="background: url(<?php echo base_url(); ?>assets/client/uploads/home_page/parallax_image/parallax1.jpg) no-repeat scroll center bottom / cover;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-8 hidden-xs">
                	<div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp handwritten" data-wow-delay="0.4s"  style="margin-top: 20px">Search your Dream Partner here.</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp handwritten" data-wow-delay="0.6s">
                        <h4 class="handwritten">We make them meet, Love brings them Together.</h4>
                    </div>
                    <div class="space-20"></div>
                    <a href="#contact_page" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-phone-handset"></i>Contact Us For any Inquiry</a>
                </div>
                <div class="col-xs-12 col-md-4">
                	<div class="col-md-12 w3-black w3-padding" style ="opacity: 0.5;
    filter: alpha(opacity=50);">
                		<div class="subscribe-form" style="padding:20px">
                        <h3 class="blue-color"><b>Register Now</b></h3>
                        <form id="mc-form">
                        	<div class="w3-col l12">
                        		<label class="w3-large">Gender : </label>
                        		<span class="hidden-xs"> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Male</span>
                        		<span class="hidden-xs"> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Female</span>
                        		<div class="w3-col l12 hidden-sm hidden-lg hidden-md">
                        			<span> <input type="radio" name="gender" class="w3-radio" required> Male</span>
                        		<span> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Female</span>
                        		</div>
    					</div>
    					<div class="w3-col l12 w3-margin-bottom">
                        		<label class="w3-large">Name : </label>
                        		<input type="text" class="w3-input control w3-text-grey" placeholder="Enter your full name*" required name="full_name" id="mc-name">
    					</div>
    					<div class="w3-col l12 w3-margin-bottom">
                        		<label class="w3-large">Email ID : </label>
                        		<input type="email" name="email_id" class="w3-input control w3-text-grey" placeholder="Enter your email*" required id="mc-email">
    					</div>
    					<div class="w3-col l12 w3-margin-bottom">
                        		<label class="w3-large">Caste : </label>
                        		<select class="w3-input control w3-text-grey" name="caste" id="mc-caste">
    									<option value="0" class="w3-light-grey" selected>Select your Caste*</option>
    									<option value="Hindu Mahar">Hindu Mahar</option>    									
    									<option value="Mahayana">Mahayana</option>    									
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
    										<select class="w3-input control w3-text-grey" name="country_code" id="country_code">
    											<option value="0" class="w3-light-grey">Select Country code*</option>
    											<?php 															
    											foreach($all_countries as $key) {
    												$selected='';
    												if($key['sortname']=='IN'){
    													$selected='selected';
    												}
    												echo '<option value="'.$key['phonecode'].'" '.$selected.'>'.$key['sortname'].' (+'.$key['phonecode'].')</option>';
    											}
    											?>
    										</select>
    									</div>
    									<div class="w3-col l8 s7" style="padding-left: 8px">
    										<input type="number" name="mob_number" class="w3-input control w3-text-grey" placeholder="Enter your mobile number*" required id="mc-number" style="height: 32px;">	
    									</div>
                        		
    					</div>
    					<div class="col-lg-12 text-center">
    						<div class="space-20"></div>
    						<a href="#" class="bttn-default wow fadeInUp " style="border-radius: 5px"> Proceed Next <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                            <div class="col-lg-12 w3-margin-top">
                                <div class="col-md-6 col-sm-4">
                     <button class="btn btn-block w3-margin-bottom" style="background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);">Register</button> 
                 </div>
                 <div class="col-md-6 col-sm-4">
                   <button class="btn btn-block w3-margin-bottom" style="background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);">Log In</button>
                </div>
                </div>

    					</div>
                        </form>
                    </div>
                	</div>
                	<div class="space-40"></div>
                    </div>
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
                        <h5 class="title">About Parinaay</h5>
                        <div class="space-30"></div>
                        <h3 class="blue-color">A beautiful app for consectetur adipisicing elit, sed do eiusmod tempor incididunt ut mollit anim id est laborum. Sedut perspiciatis unde omnis. </h3>
                        <div class="space-20"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Progress-Area -->
    <div class="space-80 hidden-lg "></div>
    <section class="progress-area gray-bg" id="about_page" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/progress.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 hidden-sm hidden-xs">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Our Mission</h5>
                        <div class="space-10 hidden-md"></div>
                        <h3 class="dark-color wow fadeInUp hidden-md" data-wow-delay="0.4s">Great Matchmaking Ever</h3>
                        <div class="space-20 "></div>
                        <div class="desc wow fadeInUp hidden-md" data-wow-delay="0.6s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        </div>
                        <div class="space-50 hidden-md"></div>
                        <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 hidden-md hidden-lg">
                    <div class="page-title section-padding w3-text-white">
                        <h5 class="title wow fadeInUp w3-text-white" data-wow-delay="0.2s">Our Mission</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp w3-text-white" data-wow-delay="0.4s">Great Matchmaking Ever</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        </div>
                        <div class="space-50"></div>
                        <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
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
                        <h3 class="dark-color">People who raised "PARINAAY"</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single" style="padding: 0">
                        <figure class="post-media" style="margin: 0">
                            <img src="<?php echo base_url(); ?>assets/demo/images/profile_1.jpg" alt="">
                        </figure>
                        <div class="post-body" style="padding:0 30px 10px 30px">
                            <h4 class="dark-color" style="margin: 10px 0 8px 0"><a href="single.html">Person Name</a></h4>

                            <p style="line-height: 25px">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="single.html" class="read-more">Know More</a>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single" style="padding: 0">
                        <figure class="post-media" style="margin: 0">
                            <img src="<?php echo base_url(); ?>assets/demo/images/profile_1.jpg" alt="">
                        </figure>
                        <div class="post-body" style="padding:0 30px 10px 30px">
                            <h4 class="dark-color" style="margin: 10px 0 8px 0"><a href="single.html">Person Name</a></h4>

                            <p style="line-height: 25px">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="single.html" class="read-more">Know More</a>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post-single" style="padding: 0">
                        <figure class="post-media" style="margin: 0">
                            <img src="<?php echo base_url(); ?>assets/demo/images/profile_1.jpg" alt="">
                        </figure>
                        <div class="post-body" style="padding:0 30px 10px 30px">
                            <h4 class="dark-color" style="margin: 10px 0 8px 0"><a href="single.html">Person Name</a></h4>

                            <p style="line-height: 25px">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="single.html" class="read-more">Know More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    
    </div>
    
   <!-- Download-Area -->
    <div class="parallax download-area overlay" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/parallax_image/parallax1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center" style="padding:40px">
                    <h3 class="white-color">Join <b>PARINAAY</b> and Find your perfect match.</h3>
                    <div class="space-20"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam possimus eaque magnam eum praesentium unde.</p>
                    <div class="space-20"></div>
                    <a href="#" class="bttn-white sq"><i class="w3-large lnr lnr-rocket"></i>Register</a> 
                    <a href="<?php echo base_url(); ?>contact_us" class="bttn-white sq" data-wow-delay="0.8s"><i class="w3-large lnr lnr-envelope"></i>Contact Us</a>
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
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo base_url(); ?>assets/demo/images/team-1.png" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo base_url(); ?>assets/demo/images/team-2.jpg" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo base_url(); ?>assets/demo/images/team-3.jpg" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo base_url(); ?>assets/demo/images/team-1.png" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo base_url(); ?>assets/demo/images/team-2.jpg" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="<?php echo base_url(); ?>assets/demo/images/team-3.jpg" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area-End -->
    
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding" style="padding:0 0 80px 0">
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
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>+91 - <?php echo $all_contact[0]['admin_number']; ?></p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p><?php echo $all_contact[0]['admin_email']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <section class="col-md-12 no-padding">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.578573098557!2d73.76471457487463!3d18.45743398155607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295eb7242f4f9%3A0xbb7abb920bc02587!2sAnandtara&#39;s+Haritara!5e0!3m2!1sen!2sin!4v1539411827476" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
</div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom" style="background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);">
            <div class="container" >
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Website Designed with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://bizmo-tech.com" target="_blank">Bizmo Technologies</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7"><!-- 
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                     --></div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="<?php echo base_url(); ?>assets/demo/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/vendor/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?php echo base_url(); ?>assets/demo/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/contact-form.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/ajaxchimp.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="<?php echo base_url(); ?>assets/demo/js/main.js"></script>
</body>

</html>
