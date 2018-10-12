
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/usertop_section/template/css/style.css">
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/usertop_section/template/js/main.js"></script>
<section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/slider_image_1.jpg');" data-stellar-background-ratio="0.5"  id="section-home" style="padding: 0">
	<div class="overlay"></div>
	<div class="container" style="padding: 10px">
		<div class="row align-items-center probootstrap-animate" style="padding: 50px 10px 10px 10px;">
			<div class="col-md size-sm"></div> 

			<div class="col-md-5">
				<form id="register_userForm" class="probootstrap-form">
					<div id="regForm">
						<h3><i class="fa fa-edit"></i> Register Here !</h3>
						<br>
						<div class="form-group">
							<div class="row mb-3">
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group has-feedback">
										<label for="" class="text-uppercase"><i class="fa fa-transgender"></i> Gender* :</label>
										<div class="radio radio-primary">
											<input type="radio" name="gender" id="male" value="1" >
											<label for="male" class="pr-3">Male</label>
											<input type="radio" name="gender" id="female" value="2" >
											<label for="female">Female</label>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="text-uppercase"><i class="fa fa-male"></i> <i class="fa fa-female"></i> Var/ Vadhu's Name* :</label>
										<label for="id_memberName" style="width: 100%;">
											<input type="text" required placeholder="Enter your full name here *" name="memberName" id="id_memberName" class="form-control" style="width: 100%;">
										</label>
									</div>
								</div>
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group">
										<label for="" class="text-uppercase"><i class="fa fa-at"></i> Email* :</label>
										<label for="id_email" style="width: 100%;">
											<input type="number" placeholder="Enter your Email ID here *" name="emailId" id="id_email" class="form-control" style="width: 100%;">
										</label>
									</div>
								</div>
								<div class="col-md-12 w3-margin-bottom">
									<div class="form-group">
										<label for="" class="text-uppercase"><i class="fa fa-at"></i> Mobile Number* :</label>
										<label for="id_mobileNumber" style="width: 100%;">
											<div>
												<div class="w3-col l4 s5">
													<select class="form-control form-control-lg" style="width: 100%;">
    	<option selected>India (+91)</option>
    	<option>India (+91)</option>
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
									<div class="form-group has-feedback">
                                    <label for="" class="text-uppercase">Country</label>
                                    <select name="country" onChange="(this.value,this)" class="form-control selectpicker s_country"   data-placeholder="Choose a country" tabindex="2" data-hide-disabled="true" ><option value="">Choose one</option><option value="1" >Afghanistan</option><option value="2" >Albania</option><option value="3" >Algeria</option><option value="4" >American Samoa</option><option value="5" >Andorra</option><option value="6" >Angola</option><option value="7" >Anguilla</option><option value="8" >Antarctica</option><option value="9" >Antigua And Barbuda</option><option value="10" >Argentina</option><option value="11" >Armenia</option><option value="12" >Aruba</option><option value="13" >Australia</option><option value="14" >Austria</option><option value="15" >Azerbaijan</option><option value="16" >Bahamas The</option><option value="17" >Bahrain</option><option value="18" >Bangladesh</option><option value="19" >Barbados</option><option value="20" >Belarus</option><option value="21" >Belgium</option><option value="22" >Belize</option><option value="23" >Benin</option><option value="24" >Bermuda</option><option value="25" >Bhutan</option><option value="26" >Bolivia</option><option value="27" >Bosnia and Herzegovina</option><option value="28" >Botswana</option><option value="29" >Bouvet Island</option><option value="30" >Brazil</option><option value="31" >British Indian Ocean Territory</option><option value="32" >Brunei</option><option value="33" >Bulgaria</option><option value="34" >Burkina Faso</option><option value="35" >Burundi</option><option value="36" >Cambodia</option><option value="37" >Cameroon</option><option value="38" >Canada</option><option value="39" >Cape Verde</option><option value="40" >Cayman Islands</option><option value="41" >Central African Republic</option><option value="42" >Chad</option><option value="43" >Chile</option><option value="44" >China</option><option value="45" >Christmas Island</option><option value="46" >Cocos (Keeling) Islands</option><option value="47" >Colombia</option><option value="48" >Comoros</option><option value="49" >Republic Of The Congo</option><option value="50" >Democratic Republic Of The Congo</option><option value="51" >Cook Islands</option><option value="52" >Costa Rica</option><option value="53" >Cote D'Ivoire (Ivory Coast)</option><option value="54" >Croatia (Hrvatska)</option><option value="55" >Cuba</option><option value="56" >Cyprus</option><option value="57" >Czech Republic</option><option value="58" >Denmark</option><option value="59" >Djibouti</option><option value="60" >Dominica</option><option value="61" >Dominican Republic</option><option value="62" >East Timor</option><option value="63" >Ecuador</option><option value="64" >Egypt</option><option value="65" >El Salvador</option><option value="66" >Equatorial Guinea</option><option value="67" >Eritrea</option><option value="68" >Estonia</option><option value="69" >Ethiopia</option><option value="70" >External Territories of Australia</option><option value="71" >Falkland Islands</option><option value="72" >Faroe Islands</option><option value="73" >Fiji Islands</option><option value="74" >Finland</option><option value="75" >France</option><option value="76" >French Guiana</option><option value="77" >French Polynesia</option><option value="78" >French Southern Territories</option><option value="80" >Gambia The</option><option value="81" >Georgia</option><option value="82" >Germany</option><option value="83" >Ghana</option><option value="84" >Gibraltar</option><option value="85" >Greece</option><option value="86" >Greenland</option><option value="87" >Grenada</option><option value="88" >Guadeloupe</option><option value="89" >Guam</option><option value="90" >Guatemala</option><option value="91" >Guernsey and Alderney</option><option value="92" >Guinea</option><option value="93" >Guinea-Bissau</option><option value="94" >Guyana</option><option value="95" >Haiti</option><option value="96" >Heard and McDonald Islands</option><option value="97" >Honduras</option><option value="98" >Hong Kong S.A.R.</option><option value="99" >Hungary</option><option value="100" >Iceland</option><option value="101" >India</option><option value="102" >Indonesia</option><option value="103" >Iran</option><option value="104" >Iraq</option><option value="105" >Ireland</option><option value="106" >Israel</option><option value="107" >Italy</option><option value="108" >Jamaica</option><option value="109" >Japan</option><option value="110" >Jersey</option><option value="111" >Jordan</option><option value="112" >Kazakhstan</option><option value="113" >Kenya</option><option value="114" >Kiribati</option><option value="115" >Korea North</option><option value="116" >Korea South</option><option value="117" >Kuwait</option><option value="118" >Kyrgyzstan</option><option value="119" >Laos</option><option value="120" >Latvia</option><option value="121" >Lebanon</option><option value="122" >Lesotho</option><option value="123" >Liberia</option><option value="124" >Libya</option><option value="125" >Liechtenstein</option><option value="126" >Lithuania</option><option value="127" >Luxembourg</option><option value="128" >Macau S.A.R.</option><option value="129" >Macedonia</option><option value="130" >Madagascar</option><option value="131" >Malawi</option><option value="132" >Malaysia</option><option value="133" >Maldives</option><option value="134" >Mali</option><option value="135" >Malta</option><option value="136" >Man (Isle of)</option><option value="137" >Marshall Islands</option><option value="138" >Martinique</option><option value="139" >Mauritania</option><option value="140" >Mauritius</option><option value="141" >Mayotte</option><option value="142" >Mexico</option><option value="143" >Micronesia</option><option value="144" >Moldova</option><option value="145" >Monaco</option><option value="146" >Mongolia</option><option value="147" >Montserrat</option><option value="148" >Morocco</option><option value="149" >Mozambique</option><option value="150" >Myanmar</option><option value="151" >Namibia</option><option value="152" >Nauru</option><option value="153" >Nepal</option><option value="154" >Netherlands Antilles</option><option value="155" >Netherlands The</option><option value="156" >New Caledonia</option><option value="157" >New Zealand</option><option value="158" >Nicaragua</option><option value="159" >Niger</option><option value="160" >Nigeria</option><option value="161" >Niue</option><option value="162" >Norfolk Island</option><option value="163" >Northern Mariana Islands</option><option value="164" >Norway</option><option value="165" >Oman</option><option value="166" >Pakistan</option><option value="167" >Palau</option><option value="168" >Palestinian Territory Occupied</option><option value="169" >Panama</option><option value="170" >Papua new Guinea</option><option value="171" >Paraguay</option><option value="172" >Peru</option><option value="173" >Philippines</option><option value="174" >Pitcairn Island</option><option value="175" >Poland</option><option value="176" >Portugal</option><option value="177" >Puerto Rico</option><option value="178" >Qatar</option><option value="179" >Reunion</option><option value="180" >Romania</option><option value="181" >Russia</option><option value="182" >Rwanda</option><option value="183" >Saint Helena</option><option value="184" >Saint Kitts And Nevis</option><option value="185" >Saint Lucia</option><option value="186" >Saint Pierre and Miquelon</option><option value="187" >Saint Vincent And The Grenadines</option><option value="188" >Samoa</option><option value="189" >San Marino</option><option value="190" >Sao Tome and Principe</option><option value="191" >Saudi Arabia</option><option value="192" >Senegal</option><option value="193" >Serbia</option><option value="194" >Seychelles</option><option value="195" >Sierra Leone</option><option value="196" >Singapore</option><option value="197" >Slovakia</option><option value="198" >Slovenia</option><option value="199" >Smaller Territories of the UK</option><option value="200" >Solomon Islands</option><option value="201" >Somalia</option><option value="202" >South Africa</option><option value="203" >South Georgia</option><option value="204" >South Sudan</option><option value="205" >Spain</option><option value="206" >Sri Lanka</option><option value="207" >Sudan</option><option value="208" >Suriname</option><option value="209" >Svalbard And Jan Mayen Islands</option><option value="210" >Swaziland</option><option value="211" >Sweden</option><option value="212" >Switzerland</option><option value="213" >Syria</option><option value="214" >Taiwan</option><option value="215" >Tajikistan</option><option value="216" >Tanzania</option><option value="217" >Thailand</option><option value="218" >Togo</option><option value="219" >Tokelau</option><option value="220" >Tonga</option><option value="221" >Trinidad And Tobago</option><option value="222" >Tunisia</option><option value="223" >Turkey</option><option value="224" >Turkmenistan</option><option value="225" >Turks And Caicos Islands</option><option value="226" >Tuvalu</option><option value="227" >Uganda</option><option value="228" >Ukraine</option><option value="229" >United Arab Emirates</option><option value="230" >United Kingdom</option><option value="231" >United States</option><option value="232" >United States Minor Outlying Islands</option><option value="233" >Uruguay</option><option value="234" >Uzbekistan</option><option value="235" >Vanuatu</option><option value="236" >Vatican City State (Holy See)</option><option value="237" >Venezuela</option><option value="238" >Vietnam</option><option value="239" >Virgin Islands (British)</option><option value="240" >Virgin Islands (US)</option><option value="241" >Wallis And Futuna Islands</option><option value="242" >Western Sahara</option><option value="243" >Yemen</option><option value="244" >Yugoslavia</option><option value="245" >Zambia</option><option value="246" >Zimbabwe</option><option value="247" >Gabon</option></select>                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase">State</label>

                                    <select class="form-control form-control-sm selectpicker s_state" name="state">
                                        <option value="">Choose A Country First</option>
                                    </select>
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase">City</label>
                                    <select class="form-control form-control-sm selectpicker s_city" name="city">
                                        <option value="">Choose A State First</option>
                                    </select>
                                    <div class="help-block with-errors">
                                    </div>
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
<section class="sct-color-1"></section>
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
