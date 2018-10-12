<style>
@media (max-width: 576px) {
	.outer-search {
		top: auto !important; bottom: 0px; margin-left: 0px !important;
	}
	.btn-search {
		margin-top: 0px !important;
	}
}
@media (min-width: 567px) and (max-width: 991px) {
	.outer-search {
		position: absolute; top: auto !important; bottom: 0px !important; z-index: 1; margin-left: -25px !important;        
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
	.outer-search {
		position: absolute; top: 45% !important; z-index: 1; margin-left: 1.5% !important;       
	}
}
.s-search label {
	white-space: nowrap;
}
.outer-search {
	position: absolute; top: 45%; z-index: 1; margin-left: 95px;    
}
.btn-search {
	border-radius: 3px !important;
}
</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/fonts/ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/owl.carousel.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/fonts/flaticon/font/flaticon.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/select2.css">


  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/helpers.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/style.css">
  <link href="<?php echo base_url(); ?>assets/build/css/w3.css" rel="stylesheet"> 
<section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/template/images/background03.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
      <div class="overlay"></div>
      <div class="container" style="padding: 10px">
        <div class="row align-items-center probootstrap-animate" style="padding: 10px">
          <div class="col-md">
            <!-- text based logo -->
            <div class="w3-center">
              <a class="btn w3-center" style="padding:10px" href="bizmo-tech.com" target="_blank">
                <img src="<?php echo base_url(); ?>assets/usertop_section/images/bizmo_logoDark.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
              </a><br>           
            </div>
            <div class="w3-center">
              <a class="btn w3-center" style="background-color: black;border:1px solid;border-color: white;border-radius: 0;padding:10px" href="#">
                <img src="<?php echo base_url(); ?>assets/usertop_section/images/mea_logo.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
              </a>
              <p style="color: white">
                <br>
                Welcomes you for 
              </p>
              <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Annual General Meet 2018</h2>
              <p class="mu-event-date-line probootstrap-animate" style="background-color: black;color: white;border:1px solid;border-color: white">8th September, 2018. Sharp 5pm <br> Siddhi Banquets, D.P. Road, Near Mhatre Bridge, Pune.</p>
            </div>         
            <br>
            <div class="w3-col l12 w3-text-white w3-center w3-padding-bottom probootstrap-animate">
              <p class="lead mb-5 probootstrap-animate"><span class="fa fa-copyright w3-large"></span> Powered by <a class="btn w3-center" style="padding:10px" href="bizmo-tech.com" target="_blank">
                <img src="<?php echo base_url(); ?>assets/usertop_section/images/bizmo_logoDark.jpg" class="img img-responsive" style="width: 200px;height: auto;"/>
              </a>
              <br>
              Sponsored by <span class="w3-text-white">Ar. Dakshata Ranjeet Wagh</span></p>
              <br>
            </div>
          </div> 

          <div class="col-md probootstrap-animate">
            <form id="register_userForm" class="probootstrap-form">
              <div id="regForm">
                <h3><i class="fa fa-edit"></i> Register Here !</h3>
                <br>
                <div class="form-group">
                  <div class="row mb-3">
                    <div class="col-md-12 w3-margin-bottom">
                      <div class="form-group">
                        <!-- <label for="id_memberName"><i class="fa fa-user-secret"></i> Member Name</label> -->
                        <label for="id_memberName" style="width: 100%;">
                          <input type="text" required placeholder="Enter your full name here *" name="memberName" id="id_memberName" class="form-control" style="width: 100%;">
                        </label>
                      </div>
                    </div>

                    <div class="col-md-6 w3-margin-bottom">                    
                      <div class="form-group">
                        <label for="id_gender"><i class="fa fa-male"></i><i class="fa fa-female"></i> Gender <b class="w3-text-red">*</b></label>
                        <label for="id_gender" style="width: 100%;">
                          <label for="id_genderMale" class="mr-5"><input required type="radio" value="Male" id="id_genderMale" name="gender">  Male</label>
                          <label for="id_genderFemale"><input required type="radio" value="Female" id="id_genderFemale" name="gender">  Female</label>
                        </label>
                      </div>
                    </div>

                    <div class="col-md-6 w3-margin-bottom">
                      <div class="form-group">
                        <label for="id_foodRef"><i class="fa fa-glass"></i> Food Reference <b class="w3-text-red">*</b></label>
                        <label for="id_foodRef" style="width: 100%;">
                          <label for="id_foodRefVeg" class="mr-5"><input required type="radio" value="veg" id="id_foodRefVeg" name="foodRef">  Veg</label>
                          <label for="id_foodRefNVeg"><input required type="radio" value="nveg" id="id_foodRefNVeg" name="foodRef">  Non Veg</label>
                        </label>
                      </div>
                    </div>

                    <div class="col-md-6 w3-margin-bottom">                    
                      <div class="form-group">
                        <label for="id_seatConfirm"><i class="fa fa-check-square"></i> Seat Confirmation <b class="w3-text-red">*</b></label>
                        <label for="id_seatConfirm" style="width: 100%;">
                          <label for="id_seatConfirmYes" class="mr-5"><input required type="radio" value="yes" id="id_seatConfirmYes" name="seatConfirm">  Yes</label>
                          <label for="id_seatConfirmNo"><input required type="radio" value="no" id="id_seatConfirmNo" name="seatConfirm">  No</label>
                        </label>
                      </div>
                    </div>

                    <div class="col-md-12 w3-margin-bottom">
                      <div class="form-group">
                        <!-- <label for="id_memberName"><i class="fa fa-user-secret"></i> Member Name</label> -->
                        <label for="id_mobNumber" style="width: 100%;">
                          <input type="number" placeholder="Enter your Mobile number(optional)" name="mobNumber" id="id_mobNumber" class="form-control" style="width: 100%;">
                        </label>
                      </div>
                    </div>

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
<section class="sct-color-1">
	<div class="container-fluid no-padding">
		<div class="row row-no-padding">

			<div class="col-lg-12">
				<div style="position: relative;">
					<div class="swiper-js-container background-image-holder">
						<div class="swiper-container" data-swiper-autoplay="true" data-swiper-effect="coverflow" data-swiper-items="1" data-swiper-space-between="0">
							<div class="swiper-wrapper">
								<!-- Slide -->
								<div class="swiper-slide" data-swiper-autoplay="10000">
									<div class="slice px-3 holder-item holder-item-light has-bg-cover bg-size-cover same-height" data-same-height="#div_properties_search" style="height: 650px; background-size: cover; background-position: center; background-image: url(<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/slider_image_1.jpg); background-position: bottom bottom;">
									</div>
								</div>
								<div class="swiper-slide" data-swiper-autoplay="10000">
									<div class="slice px-3 holder-item holder-item-light has-bg-cover bg-size-cover same-height" data-same-height="#div_properties_search" style="height: 650px; background-size: cover; background-position: center; background-image: url(<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/slider_image_2.jpg); background-position: bottom bottom;">
									</div>
								</div>
								<div class="swiper-slide" data-swiper-autoplay="10000">
									<div class="slice px-3 holder-item holder-item-light has-bg-cover bg-size-cover same-height" data-same-height="#div_properties_search" style="height: 650px; background-size: cover; background-position: center; background-image: url(<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/slider_image_3.jpg); background-position: bottom bottom;">
									</div>
								</div>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button swiper-button-next">
							</div>
							<div class="swiper-button swiper-button-prev">
							</div>
						</div>
					</div>
					<div class="container pl-0">
						<div class="outer-search" style="margin-left: 700px;top: 50px">
							<h4 class="text-white text-center mb-4">
								<span style="text-shadow: 4px 3px 6px #000;">Search Your Soul Mates</span>
							</h4>
							<div class="feature feature--boxed-border feature--bg-1 z-depth-2-bottom px-3 py-4 animated animation-ended s-search" data-animation-in="zoomIn" data-animation-delay="400" style="background: #1b1e23b3;min-width: 100%">
								<form class="mt-4" style="margin-top: 0px !important;padding:10px">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group has-feedback">
												<label for="" class="text-uppercase text-white">Gender* :</label>
												<div class="radio radio-primary">
													<input type="radio" name="gender" id="male" value="1">
													<label for="male" class="pr-3 text-white text-uppercase">Male</label>
													<input type="radio" name="gender" id="female" value="2">
													<label for="female" class="text-white text-uppercase">Female</label>
												</div>
												<div class="help-block with-errors">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group has-feedback">
												<label for="" class="text-uppercase text-white">Var/ Vadhu's Name* :</label>
												<input type="text" class="form-control form-control-sm" name="full_name" id="full_name" value="">
												<div class="help-block with-errors">
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-5 col-sm-6 col-6">
											<div class="form-group has-feedback">
												<label for="" class="text-uppercase text-white">Religion</label>
												<select name="religion" onChange="(this.value,this)" class="form-control form-control-sm selectpicker s_religion"  data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" ><option value="">Choose one</option><option value="2" >Judaism</option><option value="3" >Cristianity</option><option value="4" >Hinduism</option><option value="5" >Buddhism</option><option value="6" >Atheism</option><option value="7" >Islam</option><option value="8" >Sikhism</option><option value="9" >Jain</option></select>                                    <div class="help-block with-errors">
												</div>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-6 col-6">
											<div class="form-group has-feedback">
												<label for="" class="text-uppercase text-white">Mother Tongue</label>
												<select name="language" onChange="(this.value,this)" class="form-control form-control-sm selectpicker"   data-placeholder="Choose a language" tabindex="2" data-hide-disabled="true" ><option value="">Choose one</option><option value="2" >Bengali</option><option value="4" >German</option><option value="7" >English</option><option value="8" >Hindi</option><option value="9" >Urdu</option></select>                                    <div class="help-block with-errors">
												</div>
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-12 col-12 mr-auto">
											<button type="submit" class="btn btn-styled btn-sm btn-block btn-base-1 btn-search" style="padding: 6.5px 5px !important;margin-top: 29px;">Search</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>    
			</div>        </div>
		</div>
	</section>
	<section class="slice sct-color-1">
		<div class="container">
			<div class="section-title section-title--style-1 text-center">
				<h3 class="section-title-inner">
					<span>Premium Members</span>
				</h3>
				<span class="section-title-delimiter clearfix d-none"></span>
			</div>
			<span class="space-xs-xl"></span>
			<div class="swiper-js-container">
				<div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
					<div class="swiper-wrapper pb-5">
						<div class="swiper-slide" data-swiper-autoplay="2000">
							<div class="block block--style-5">
								<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
									<div class="profile-picture profile-picture--style-2">
										<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)"></div>
									</div>
									<div class="card-body text-center">
										<h3 class="heading heading-5 premium_heading">Whitney Stevens Channing Beard</h3>
										<div class="mt-2">
											<ul class="inline-links inline-links--style-2">
												<li>
													<span class="c-base-1 strong-500">0</span> Follower(s)</li>
													<li>
														<span class="c-base-1 strong-500">7</span> Following</li>
													</ul>
												</div>
												<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(46)">Full Profile</a>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide" data-swiper-autoplay="2000">
									<div class="block block--style-5">
										<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
											<div class="profile-picture profile-picture--style-2">
												<div class="home_pm" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/default.jpg"></div>
											</div>
											<div class="card-body text-center">
												<h3 class="heading heading-5 premium_heading">Elizabeth Mason</h3>
												<div class="mt-2">
													<ul class="inline-links inline-links--style-2">
														<li>
															<span class="c-base-1 strong-500">0</span> Follower(s)</li>
															<li>
																<span class="c-base-1 strong-500">2</span> Following</li>
															</ul>
														</div>
														<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(44)">Full Profile</a>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide" data-swiper-autoplay="2000">
											<div class="block block--style-5">
												<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
													<div class="profile-picture profile-picture--style-2">
														<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_34.jpg)"></div>
													</div>
													<div class="card-body text-center">
														<h3 class="heading heading-5 premium_heading">Cary  Campbell</h3>
														<div class="mt-2">
															<ul class="inline-links inline-links--style-2">
																<li>
																	<span class="c-base-1 strong-500">0</span> Follower(s)</li>
																	<li>
																		<span class="c-base-1 strong-500">1</span> Following</li>
																	</ul>
																</div>
																<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(34)">Full Profile</a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide" data-swiper-autoplay="2000">
													<div class="block block--style-5">
														<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
															<div class="profile-picture profile-picture--style-2">
																<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_14.jpg)"></div>
															</div>
															<div class="card-body text-center">
																<h3 class="heading heading-5 premium_heading">Monir Hossain</h3>
																<div class="mt-2">
																	<ul class="inline-links inline-links--style-2">
																		<li>
																			<span class="c-base-1 strong-500">1</span> Follower(s)</li>
																			<li>
																				<span class="c-base-1 strong-500">0</span> Following</li>
																			</ul>
																		</div>
																		<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(14)">Full Profile</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-slide" data-swiper-autoplay="2000">
															<div class="block block--style-5">
																<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																	<div class="profile-picture profile-picture--style-2">
																		<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/default.jpg)"></div>
																	</div>
																	<div class="card-body text-center">
																		<h3 class="heading heading-5 premium_heading">Miriam Roberson</h3>
																		<div class="mt-2">
																			<ul class="inline-links inline-links--style-2">
																				<li>
																					<span class="c-base-1 strong-500">0</span> Follower(s)</li>
																					<li>
																						<span class="c-base-1 strong-500">0</span> Following</li>
																					</ul>
																				</div>
																				<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(45)">Full Profile</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide" data-swiper-autoplay="2000">
																	<div class="block block--style-5">
																		<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																			<div class="profile-picture profile-picture--style-2">
																				<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_10.jpg)"></div>
																			</div>
																			<div class="card-body text-center">
																				<h3 class="heading heading-5 premium_heading">Amber Huffman</h3>
																				<div class="mt-2">
																					<ul class="inline-links inline-links--style-2">
																						<li>
																							<span class="c-base-1 strong-500">1</span> Follower(s)</li>
																							<li>
																								<span class="c-base-1 strong-500">0</span> Following</li>
																							</ul>
																						</div>
																						<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(10)">Full Profile</a>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="swiper-slide" data-swiper-autoplay="2000">
																			<div class="block block--style-5">
																				<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																					<div class="profile-picture profile-picture--style-2">
																						<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_40.jpg)"></div>
																					</div>
																					<div class="card-body text-center">
																						<h3 class="heading heading-5 premium_heading">New  User</h3>
																						<div class="mt-2">
																							<ul class="inline-links inline-links--style-2">
																								<li>
																									<span class="c-base-1 strong-500">0</span> Follower(s)</li>
																									<li>
																										<span class="c-base-1 strong-500">0</span> Following</li>
																									</ul>
																								</div>
																								<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(40)">Full Profile</a>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="swiper-slide" data-swiper-autoplay="2000">
																					<div class="block block--style-5">
																						<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																							<div class="profile-picture profile-picture--style-2">
																								<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_1.jpg)"></div>
																							</div>
																							<div class="card-body text-center">
																								<h3 class="heading heading-5 premium_heading">Slade Bennett</h3>
																								<div class="mt-2">
																									<ul class="inline-links inline-links--style-2">
																										<li>
																											<span class="c-base-1 strong-500">7</span> Follower(s)</li>
																											<li>
																												<span class="c-base-1 strong-500">6</span> Following</li>
																											</ul>
																										</div>
																										<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(1)">Full Profile</a>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="swiper-slide" data-swiper-autoplay="2000">
																							<div class="block block--style-5">
																								<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																									<div class="profile-picture profile-picture--style-2">
																										<div class="home_pm" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/default.jpg"></div>
																									</div>
																									<div class="card-body text-center">
																										<h3 class="heading heading-5 premium_heading">Jaden Reyes</h3>
																										<div class="mt-2">
																											<ul class="inline-links inline-links--style-2">
																												<li>
																													<span class="c-base-1 strong-500">3</span> Follower(s)</li>
																													<li>
																														<span class="c-base-1 strong-500">1</span> Following</li>
																													</ul>
																												</div>
																												<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(3)">Full Profile</a>
																											</div>
																										</div>
																									</div>
																								</div>
																								<div class="swiper-slide" data-swiper-autoplay="2000">
																									<div class="block block--style-5">
																										<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																											<div class="profile-picture profile-picture--style-2">
																												<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_5.jpg)"></div>
																											</div>
																											<div class="card-body text-center">
																												<h3 class="heading heading-5 premium_heading">Cole  Bender</h3>
																												<div class="mt-2">
																													<ul class="inline-links inline-links--style-2">
																														<li>
																															<span class="c-base-1 strong-500">3</span> Follower(s)</li>
																															<li>
																																<span class="c-base-1 strong-500">0</span> Following</li>
																															</ul>
																														</div>
																														<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(5)">Full Profile</a>
																													</div>
																												</div>
																											</div>
																										</div>
																										<div class="swiper-slide" data-swiper-autoplay="2000">
																											<div class="block block--style-5">
																												<div class="card card-hover--animation-1 z-depth-1-top z-depth-2--hover">
																													<div class="profile-picture profile-picture--style-2">
																														<div class="home_pm" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/profile_image/profile_2.jpg)"></div>
																													</div>
																													<div class="card-body text-center">
																														<h3 class="heading heading-5 premium_heading">Emma Clark</h3>
																														<div class="mt-2">
																															<ul class="inline-links inline-links--style-2">
																																<li><span class="c-base-1 strong-500">3</span> Follower(s)</li><li>	<span class="c-base-1 strong-500">3</span> Following</li>
																															</ul>
																														</div>
																														<a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(2)">Full Profile</a>
																													</div>
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
																						var isloggedin = "";

																						$(document).ready(function() {
																							setTimeout(function() {
																								set_premium_member_box_height();
																							}, 1000);
																						});

																						function set_premium_member_box_height() {
																							var max_title = 0;
																							$('.swiper-slide .premium_heading').each(function() {
																								var current_height = parseInt($(this).css('height'));
																								if (current_height >= max_title) {
																									max_title = current_height;
																								}
																							});
																							$('.swiper-slide .premium_heading').css('height', max_title);
																						}

																						function goto_profile(id) {
																							if (isloggedin == "") {
																								$("#active_modal").modal("toggle");
																								$("#modal_header").html("Please Login");
																								$("#modal_body").html("<p class='text-center'>Please Login To View Full Profile Of This Member</p>");
																								$("#modal_buttons").html("<button type='button' class='btn btn-danger btn-sm btn-shadow' data-dismiss='modal' style='width:25%'>Close</button> <a href='http://activeitzone.com/demo/matrimonial/home/login' class='btn btn-sm btn-base-1 btn-shadow' style='width:25%'>Login</a>");
																							}
																							else {
																								window.location.href = "http://activeitzone.com/demo/matrimonial/home/member_profile/"+id;
																							}
																						}
																					</script>
																					<section class="slice--offset parallax-section parallax-section-lg" style="background-image: url(<?php echo base_url(); ?>assets/client/uploads/home_page/parallax_image/parallax_image_1513662458.jpg);">
																						<span class="mask mask-dark--style-2"></span>
																						<div class="container">
																							<div class="row py-3 justify-content-center">
																								<div class="col-lg-8 col-md-8 text-center">
																									<h1 class="heading heading-inverse heading-1 strong-400 text-normal">
																									Active  Matrimonial CMS </h1>
																									<span class="clearfix"></span>
																									<div class="fluid-paragraph fluid-paragraph-sm mt-3 mb-3 c-white">
																									Demo in Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque diam, luctus at laoreet in, auctor ut tellus. Etiam enim lacus, ornare et tempor, rhoncus rhoncus sem.                </div>
																									<div class="btn-container mt-5">
																										<a href="registration.html" class="btn btn-styled btn-md btn-base-1 z-depth-2-bottom">Register Now</a>
																									</div>
																								</div>
																							</div>
																						</div>
																					</section>
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
																																<a href="contact_us.html" class="btn btn-styled btn-block btn-base-1 btn-outline btn-circle mt-5 z-depth-2-bottom" style="width: 40%;color: #FFF!important">
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
