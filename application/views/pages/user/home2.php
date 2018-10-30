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
</style>

<!-- Home-Area -->
<header class="home-area overlay" id="home_page" style="background: url(<?php echo base_url(); ?>assets/client/uploads/home_page/parallax_image/parallax1.jpg) no-repeat scroll center bottom / cover;">
   <div class="container" >
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
       <div class="col-xs-12 col-md-4" ng-app="loginApp" ng-controller="loginController">
        <div class="col-md-12 w3-black w3-padding" style ="opacity: 0.5;
        filter: alpha(opacity=50);">
        <div class="w3-col l12 w3-center">
           <div class="space-20"></div>
           <div class="btn-group btn-group-lg">
              <a class="btn w3-text-white" id="register_tabbtn" style="border-color: white; border:1px solid;padding: 8px">REGISTER</a>
              <a class="btn btn-primary w3-text-white" id="login_tabbtn" style="border-color: white; border:1px solid;padding: 8px">LOG IN</a>
          </div>
          <div class="space-20"></div>
      </div>
      
      <div class="subscribe-form" id="registerDiv" style="padding:20px">
       <h3 class="blue-color"><b>Register Now</b></h3>
       <form>
          <div class="w3-col l12">
             <label class="w3-large">Gender : </label>
             <span class="hidden-xs"> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Male</span>
             <span class="hidden-xs"> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Female</span>
             <div class="w3-col l12 hidden-sm hidden-lg hidden-md">
                <span> <input type="radio" name="gender" class="w3-radio" required> Male</span>
                <span> <input type="radio" name="gender" class="w3-radio" style="margin-left: 15px" required> Female</span>
            </div>
        </div>
        <div class="w3-col l12 w3-margin-bottom hidden-xs hidden-md">
            <div class="w3-col l6  ">
         <label class="w3-large">First Name : </label>
         <input type="text" class="w3-input control w3-text-grey" placeholder="Your first name" required name="first_name" id="mc-name">
     </div>
           <div class="w3-col l6" style="padding-left: 5px;">
         <label class="w3-large">Last Name : </label>
         <input type="text" class="w3-input control w3-text-grey" placeholder="Your last name*" required name="last_name" id="mc-name">
     </div>
     </div>
     <div class="w3-col l12 w3-margin-bottom hidden-lg">
            <div class="w3-col s12">
         <label class="w3-large">First Name : </label>
         <input type="text" class="w3-input control w3-text-grey" placeholder="Enter your first name" required name="first_name" id="mc-name">
     </div>
 </div>
     <div class="w3-col l12 w3-margin-bottom hidden-lg">
           <div class="w3-col s12">
         <label class="w3-large">Last Name : </label>
         <input type="text" class="w3-input control w3-text-grey" placeholder="Enter your last name*" required name="last_name" id="mc-name">
     </div>
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
<div class="w3-col l12 text-center w3-margin-bottom">
 <div class="space-20"></div>
 <button class="bttn-default wow fadeInUp btn btn-block" type="submit" style="border-radius: 5px; background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);"> Proceed Next <i class="lnr lnr-arrow-right"></i></button>
</div>
    						<div class="col-md-12" ><!-- 
    							<div class="w3-col l6 w3-col s6" style="padding: 0 3px 0 8px">
    								<button class="btn btn-block w3-margin-bottom" style="border-radius: 5px; background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);">Register</button> 
    							</div>
    							<div class="w3-col l6 w3-col s6" style="padding: 0 5px 0 3px">
    								<button class="btn btn-block w3-margin-bottom" style="border-radius: 5px; background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);">Log In</button>
    							</div>
    						--></div>
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
    							<input type="email" ng-model="login_email_id" name="login_email_id" class="w3-input control w3-text-grey" placeholder="Enter your email*" required id="login_mc-email">
    						</div>
    						<div class="w3-col l12 w3-margin-bottom">
    							<label class="w3-large">Password : </label>
    							<input type="password" ng-model="login_password" name="login_password" class="w3-input control w3-text-grey" placeholder="Enter your password*" required id="login_mc-password">
    						</div>
    						<div class="w3-col l12 text-center w3-margin-bottom">
    							<div class="space-20"></div>
    							<button class="bttn-default btn btn-block" ng-bind-html="loginBtnText" ng-enabled="loginDisable" type="submit" style="border-radius: 5px; background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);"><i class="fa fa-lock"></i> Log In</button>
    						</div>
    					</form>
    				</div>
    			</div>
    			<div class="space-40"></div>
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
    					<a href="<?php echo base_url();?>user/about_us" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
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
    					<a href="<?php echo base_url();?>user/about_us" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
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
    			<div class="col-lg-6">
    				<div class="w3-col m6 w3-center w3-padding-large">
    					<img src="<?php echo base_url(); ?>assets/demo/images/profile_1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    					<div class="col-md-12  w3-padding-top">
    						<ul class="social-network social-circle">

    							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>

    							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
    						</ul>
    					</div>
    				</div>


    				<div class="w3-col m6  w3-padding-large">
    					<p style="line-height: 25px">I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
    					<a href="<?php echo base_url();?>user/piller_1" class="read-more">Read More</a>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="w3-col m6 w3-center w3-padding-large">
    					<img src="<?php echo base_url(); ?>assets/demo/images/profile_1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    					<div class="col-md-12  w3-padding-top">
    						<ul class="social-network social-circle">

    							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>

    							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="w3-col m6  w3-padding-large">
    					<p style="line-height: 25px">I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
    					<a href="<?php echo base_url();?>user/piller_2" class="read-more">Read More</a>
    				</div>
    			</div>
            <!--     <div class="col-xs-12 col-sm-6 col-md-4">
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
                </div> -->
              <!--   <div class="col-xs-12 col-sm-6 col-md-4">
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
                </div> -->
            </div>
        </div>

    </div>
    
    <!-- Download-Area -->
    <div class="parallax download-area overlay" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/sinew.jpg'); height: 450px;">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-md-12 text-center" style="padding:80px">
    				<div class="space-20"></div>
    				<h3 class="white-color">Join <b>PARINAAY</b> and Find your perfect match.</h3>
    				<div class="space-20"></div>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam possimus eaque magnam eum praesentium unde.</p>
    				<div class="space-20"></div>
    				<a href="#" class="bttn-white sq"><i class="w3-large lnr lnr-rocket"></i>Register</a> 
    				<a href="<?php echo base_url(); ?>user/contact_us" class="bttn-white sq" data-wow-delay="0.8s"><i class="w3-large lnr lnr-envelope"></i>Contact Us</a>
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
   <section class="w3-col l12 no-padding">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.578573098557!2d73.76471457487463!3d18.45743398155607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc295eb7242f4f9%3A0xbb7abb920bc02587!2sAnandtara&#39;s+Haritara!5e0!3m2!1sen!2sin!4v1539411827476" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
