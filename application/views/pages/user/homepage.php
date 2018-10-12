
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/style.css">
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/main.js"></script>
<section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/sinew.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
	<div class="overlay"></div>
	<div class="container" style="padding: 10px">
		<div class="row align-items-center probootstrap-animate" style="padding: 50px 10px 10px 10px;">
			<div class="col-md size-sm"></div> 

			<div class="col-md-5">
				<form id="register_userForm" class="probootstrap-form w3-opacity-min w3-light-grey" style="padding: 20px 40px 20px 40px">
					<div id="regForm" >
						<h3><i class="fa fa-edit"></i> Register Here !</h3>
						<br>
						<div class="form-group">
							<div class="row mb-3">
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group has-feedback">
										<label for="" class="text-uppercase">Gender* :</label>
										<div class="radio radio-primary">
											<input type="radio" name="gender" id="male" value="1" >
											<label for="male" class="pr-3">Male</label>
											<input type="radio" name="gender" id="female" value="2" >
											<label for="female">Female</label>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="text-uppercase">Var/ Vadhu's Name* :</label>
										<label for="id_memberName" style="width: 100%;">
											<input type="text" required placeholder="Enter your full name here *" name="memberName" id="id_memberName" class="form-control" style="width: 100%;">
										</label>
									</div>
								</div>
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group">
										<label for="" class="text-uppercase">Email* :</label>
										<label for="id_email" style="width: 100%;">
											<input type="number" placeholder="Enter your Email ID here *" name="emailId" id="id_email" class="form-control" style="width: 100%;">
										</label>
									</div>
								</div>
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group">
										<label for="" class="text-uppercase">Mobile Number* :</label>
										<label for="id_mobileNumber" style="width: 100%;">
											<div>
												<div class="w3-col l4 s5">
													<select class="form-control form-control-lg" style="width: 100%;padding-bottom: 0;padding-top: 0;height: 46px">
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
													<input type="number" class="form-control" id="id_mobileNumber" placeholder="Mobile Number here *" style="width: 100%;">
												</div>
											</div>
										</label>
									</div>
								</div>
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group">
										<label for="" class="text-uppercase">Location* :</label>
										<label for="id_location" style="width: 100%;">
											<input type="number" placeholder="Search your Location here *" name="location" id="id_location" class="form-control" style="width: 100%;">
										</label>
									</div>
								</div>
								<div class="col-md-12 w3-margin-bottom"></div>

								<div class="col-md-12 w3-margin-bottom ">
									<button type="submit" id="register_userBtn" class="btn btn-primary btn-block">Submit</button>
								</div>

							</div>
						</div>
					</div>
					<div class="row" class="probootstrap-form" style="padding: 0">
						<div class="col-md-12">
							<ul style="list-style: none;padding: 5px" id="msgList"></ul>
						</div>
						<div class="w3-col l10 col-md-offset-1" id="qr_img"></div>
					</div>
				</form>

			</div>
		</div>
	</div>

</section>
<section class="slice sct-color-1">
	<div class="container">
		<div class="section-title section-title--style-1 text-center">
			<h3 class="section-title-inner">
				<span>Our Pillars</span>
			</h3>
			<span class="section-title-delimiter clearfix d-none"></span>
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
<section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Testimonial</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class="probootstrap-author">
                <a href="https://uicookies.com/" target="_blank">
                  <img src="assets/images/person_1.jpg" alt="Free Template by uicookies.com" class="rounded-circle">
                  <span class="probootstrap-name">James Smith</span>
                  <span class="probootstrap-title">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->
<section class="slice sct-color-1">
	<div class="container">
		<div class="section-title section-title--style-1 text-center">
			<h3 class="section-title-inner">
				<span>Happy Stories</span>
			</h3>
			<span class="section-title-delimiter clearfix d-none"></span>
		</div>
		<span class="space-xs-xl"></span>
		<div class="swiper-js-container">
			<div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
				<div class="swiper-wrapper pb-5">

					<div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
						<div class="card">
							<div class="card-image">
								<div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-1.jpg')"></div>
							</div>
							<div class="card-body">
								<small><em>15, July 2018 </em></small>
								<h3 class="heading heading-5 strong-500 story_heading">
									<a href="stories/story_detail/1.html" style="cursor: pointer !important;">Demo Happy Story Title ..</a>
								</h3>
							</div>
						</div>
					</div>
					<div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
						<div class="card">
							<div class="card-image">
								<div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-2.jpg')"></div>
							</div>
							<div class="card-body">
								<small><em>01, February 2018 </em></small>
								<h3 class="heading heading-5 strong-500 story_heading">
									<a href="stories/story_detail/2.html" style="cursor: pointer !important;">Demo Happy Story Title ..</a>
								</h3>
							</div>
						</div>
					</div>
					<div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
						<div class="card">
							<div class="card-image">
								<div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-3.jpg')"></div>
							</div>
							<div class="card-body">
								<small><em>30, December 2017 </em></small>
								<h3 class="heading heading-5 strong-500 story_heading">
									<a href="stories/story_detail/3.html" style="cursor: pointer !important;">Demo Happy Story Title ..</a>
								</h3>
							</div>
						</div>
					</div>
					<div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
						<div class="card">
							<div class="card-image">
								<div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-4.jpg')"></div>
							</div>
							<div class="card-body">
								<small><em>04, February 2018 </em></small>
								<h3 class="heading heading-5 strong-500 story_heading">
									<a href="stories/story_detail/4.html" style="cursor: pointer !important;">Demo Happy Story Title ..</a>
								</h3>
							</div>
						</div>
					</div>
					<div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
						<div class="card">
							<div class="card-image">
								<div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/img-5.jpg')"></div>
							</div>
							<div class="card-body">
								<small><em>22, November 2017 </em></small>
								<h3 class="heading heading-5 strong-500 story_heading">
									<a href="stories/story_detail/5.html" style="cursor: pointer !important;">Demo Happy Story Title ..</a>
								</h3>
							</div>
						</div>
					</div>
					<div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
						<div class="card">
							<div class="card-image">
								<div class="home_shory" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/happy_story_image/happy_story_7_1_thumb.jpg')"></div>
							</div>
							<div class="card-body">
								<small><em>10, July 2018 </em></small>
								<h3 class="heading heading-5 strong-500 story_heading">
									<a href="stories/story_detail/7.html" style="cursor: pointer !important;">Demo Happy Story</a>
								</h3>
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
	$(document).ready(function() {
		setTimeout(function() {
			set_story_box_height();
		}, 1000);
	});

	function set_story_box_height() {
		var max_title = 0;
		$('.swiper-slide .story_heading').each(function() {
			var current_height = parseInt($(this).css('height'));
			if (current_height >= max_title) {
				max_title = current_height;
			}
		});
		$('.swiper-slide .story_heading').css('height', max_title);
	}
</script>
<section class="slice--offset parallax-section parallax-section-lg" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/home_page/premium_plans_image/premium_plans_image_1524736468.jpg)">
	<div class="container">
		<span class="clearfix"></span>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="feature feature--boxed-border feature--bg-2 active package_bg">
					<div class="icon-block--style-1-v5 text-center">
						<div class="block-icon c-gray-dark">
							<li style="list-style-type: none;">
								<img src="<?php echo base_url(); ?>assets/client/uploads/plan_image/plan_2_thumb.png" class="img-sm" height="80">
							</li>
						</div>
						<div class="block-content">
							<h3 class="heading heading-5 strong-500">Bronze</h3>
							<h3 class="price-tag"><sup style="font-size: 15px;"></sup>฿565.02</h3>
							<ul class="pl-0 pr-0">
								<li class="package_items">Express Interests: 10 Times</li>
								<li class="package_items">Direct Messages 10 Times</li>
								<li class="package_items">Photo Gallery 5 Images</li>
							</ul>
							<div class="py-2 text-center mb-2">
								<a href="plans/subscribe/2.html" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle z-depth-2-bottom">
									<span class="">Get This Package</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="feature feature--boxed-border feature--bg-2 active package_bg">
					<div class="icon-block--style-1-v5 text-center">
						<div class="block-icon c-gray-dark">
							<li style="list-style-type: none;">
								<img src="<?php echo base_url(); ?>assets/client/uploads/plan_image/plan_3_thumb.png" class="img-sm" height="80">
							</li>
						</div>
						<div class="block-content">
							<h3 class="heading heading-5 strong-500">Silver</h3>
							<h3 class="price-tag"><sup style="font-size: 15px;"></sup>฿784.75</h3>
							<ul class="pl-0 pr-0">
								<li class="package_items">Express Interests: 15 Times</li>
								<li class="package_items">Direct Messages 10 Times</li>
								<li class="package_items">Photo Gallery 5 Images</li>
							</ul>
							<div class="py-2 text-center mb-2">
								<a href="plans/subscribe/3.html" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle z-depth-2-bottom">
									<span class="">Get This Package</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="feature feature--boxed-border feature--bg-2 active package_bg">
					<div class="icon-block--style-1-v5 text-center">
						<div class="block-icon c-gray-dark">
							<li style="list-style-type: none;">
								<img src="<?php echo base_url(); ?>assets/client/uploads/plan_image/plan_4_thumb.png" class="img-sm" height="80">
							</li>
						</div>
						<div class="block-content">
							<h3 class="heading heading-5 strong-500">Gold</h3>
							<h3 class="price-tag"><sup style="font-size: 15px;"></sup>฿1,098.65</h3>
							<ul class="pl-0 pr-0">
								<li class="package_items">Express Interests: 20 Times</li>
								<li class="package_items">Direct Messages 15 Times</li>
								<li class="package_items">Photo Gallery 5 Images</li>
							</ul>
							<div class="py-2 text-center mb-2">
								<a href="plans/subscribe/4.html" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle z-depth-2-bottom">
									<span class="">Get This Package</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="feature feature--boxed-border feature--bg-2 active package_bg">
					<div class="icon-block--style-1-v5 text-center">
						<div class="block-icon c-gray-dark">
							<li style="list-style-type: none;">
								<img src="<?php echo base_url(); ?>assets/client/uploads/plan_image/plan_5_thumb.png" class="img-sm" height="80">
							</li>
						</div>
						<div class="block-content">
							<h3 class="heading heading-5 strong-500">Platinum</h3>
							<h3 class="price-tag"><sup style="font-size: 15px;"></sup>฿1,412.55</h3>
							<ul class="pl-0 pr-0">
								<li class="package_items">Express Interests: 25 Times</li>
								<li class="package_items">Direct Messages 20 Times</li>
								<li class="package_items">Photo Gallery 7 Images</li>
							</ul>
							<div class="py-2 text-center mb-2">
								<a href="plans/subscribe/5.html" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle z-depth-2-bottom">
									<span class="">Get This Package</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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
											<h3 class="heading heading-5 strong-400">
											Contact Information </h3>
											<p class="mt-3 mb-3">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor                                            </p>
											<div class="icon-block--style-3 mb-1 mt-5">
												<i class="icon ion-ios-telephone bg-base-4"></i>
												<span class="heading heading-6 strong-400">
												+11 - 012 3456 7890 </span>
											</div>
											<div class="icon-block--style-3 mb-3">
												<i class="icon ion-ios-email bg-base-4"></i>
												<span class="heading heading-6 strong-400">
												activeitzone@gmail.com </span>
											</div>
											<div class="icon-block--style-3">
												<i class="icon ion-ios-location bg-base-4"></i>
												<span class="heading heading-6 strong-400">
												9975 Emerald Escape, LA </span>
											</div>
											<span class="clearfix"></span>
											<a href="<?php echo base_url(); ?>user/contact_us" class="btn btn-styled btn-block btn-base-1 btn-outline btn-circle mt-5 z-depth-2-bottom" style="width: 40%;color: #FFF!important">
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
<script src="<?php echo base_url(); ?>assets/client/template/front/js/jquery.inputmask.bundle.min.js"></script>
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
</script>
<script>
	$(document).ready(function(){
		$("#aged_from").change(function(){
			var from = parseInt($("#aged_from").val());
			var to = parseInt($("#aged_to").val());
			if (to < from) {
				var to = $("#aged_to").val(from);
			}
		});
		$("#aged_to").change(function(){
			var from = parseInt($("#aged_from").val());
			var to = parseInt($("#aged_to").val());
			if (to < from) {
				var to = $("#aged_to").val(from);
			}
		});
	});

	$(".s_religion").change(function(){
		var religion_id = $(".s_religion").val();
		if (religion_id == "") {
			$(".s_caste").html("<option value=''>Choose A Religion First</option>");
			$(".s_sub_caste").html("<option value=''>Choose A Caste First</option>");
		} else {
			$.ajax({
				url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, 
				type: 'POST', 
                																					// form submit method get/post
                																					dataType: 'html', 
                																					// request type html/json/xml
                																					cache       : false,
                																					contentType : false,
                																					processData : false,
                																					success: function(data) {
                																						$(".s_caste").html(data);
                																						$(".s_sub_caste").html("<option value=''>Choose A Caste First</option>");
                																					},
                																					error: function(e) {
                																						console.log(e)
                																					}
                																				});
		}
	});

	$(".s_caste").change(function(){
		var caste_id = $(".s_caste").val();
		if (caste_id == "") {
			$(".s_sub_caste").html("<option value=''>Choose A Caste First</option>");
		} else {
			$.ajax({
				url: "http://activeitzone.com/demo/matrimonial/home/get_dropdown_by_id_sub_caste/sub_caste/caste_id/"+caste_id, 
				type: 'POST', 
                																					// form submit method get/post
                																					dataType: 'html', 
                																					// request type html/json/xml
                																					cache       : false,
                																					contentType : false,
                																					processData : false,
                																					success: function (data) {
                																						if(data == false ){
                																							$(".s_sub_caste").html("<option value=''>None</option>");
                																						} else {
                																							$(".s_sub_caste").html(data);
                																						};
                																					},
                																					error: function(e) {
                																						console.log(e)
                																					}
                																				});
		}
	});
</script>                    
