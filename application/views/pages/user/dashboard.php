    <section class="slice sct-color-1">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 size-sm" style="display: block;">
                    <div class="sidebar  ">
                        <div class="">
                            <div class="card " >
                                <div class="card-title b-xs-bottom" style="background:#eff2f4;">
                                    <h3 class="heading heading-sm text-uppercase">Account information
                                        </h3> 
                                         <b><a href="<?php echo base_url();?>edit_profile" class="w3-right">Edit Profile</a></b>
                                   
                                </div>

                                <div class="card-body">
                                  
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Membership Registration Date : </label> 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Membership Expiry Date :</label>
                                                   
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Requested Profile Count :</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                               <b><a href="<?php echo base_url();?>edit_profile" class="">Change Password</a></b>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <b><a href="<?php echo base_url();?>edit_profile" class="">Verify Document</a></b>
                                             </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 size-sm-btn mb-4" style="display: none;">
                    <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" onclick="adv_search()">Advanced Search</button>
                </div>            
                <div class="col-lg-7">
                    <h3 class="w3-center"> Recommended Profile </h3>
                    <!-- for each loop -->
                <div class="block block--style-3 list z-depth-1-top" id="block_9">
                <div class="block-image">
                <a onclick="return goto_profile(9)">
                <div class="listing-image" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_9.jpg)"></div>
                </a>
               </div>
             <div class="block-title-wrapper">
            <h3 class="heading heading-5 strong-500 mt-4">
           <a onclick="return goto_profile(9)" class="c-base-1">Tatyana  Luna</a>
            </h3>
            <h4 class="heading heading-xs c-gray-light text-uppercase strong-400">Teacher</h4>
            <table class="table-striped table-bordered mb-2" style="font-size: 12px;">
            <tbody>
                <tr>
                <td height="30" style="padding-left: 5px;" class="font-dark"><b>Member ID</b></td>
                <td height="30" style="padding-left: 5px;" class="font-dark" colspan="3"><a onclick="return goto_profile(9)" class="c-base-1"><b>2F79EE169</b></a></td>
                </tr>
                <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Age</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark">27</td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Height</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark">5.05 Feet</td>
                </tr>
                 <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Religion</b></td>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark">Cristianity</td>
                <td width="120" height="30" style="padding-left: 5px;"><b>Caste / Sect</b></td>
              <td width="120" height="30" style="padding-left: 5px;" class="font-dark"></td>
                </tr>
                <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Mother Tongue</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark">English</td>
                <td width="120" height="30" style="padding-left: 5px;"><b>Marital Status</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark">Never Married</td>
                </tr>
                 <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Location</b></td>
                 <td colspan="3" height="30" style="padding-left: 5px;" class="font-dark">Auckland, New Zealand</td>
                </tr>
            </tbody>
           </table>
            </div>
        <div class="block-footer b-xs-top">
            <div class="row align-items-center">
                <div class="col-sm-12 text-center">
                <ul class="inline-links inline-links--style-3">
                <li class="listing-hover">
                 <a onclick="return goto_profile(9)">
                <i class="fa fa-id-card"></i>Full Profile                            
               </a>
                 </li>
                <li class="listing-hover">
                <a id="interest_a_9" style="">
                <span id="interest_9" class="c-base-1">
                <i class="fa fa-heart"></i> Interest Expresse
                </span>
                </a>
                </li>
               <li class="listing-hover">
                <a id="shortlist_a_9" onclick="return do_shortlist(9)" style="">
                <span id="shortlist_9" class="">
                <i class="fa fa-list-ul"></i> Shortlist                                    
               </span>
            </a>
            </li>
            <li class="listing-hover">
            <a id="followed_a_9" onclick="return do_unfollow(9)" style="">
           <span id="followed_9" class="c-base-1">
            <i class="fa fa-star"></i> Unfollow                                    
        </span>
            </a>
            </li>
        <li class="listing-hover">
            <a onclick="return confirm_ignore(9)">
         <i class="fa fa-ban"></i>Ignore                                
         </a>
        </li>
        </ul>

        </div>
        </div>
        </div>
    </div>
    <!-- for each div completed -->
                                                                                

</div>
</div>
 </div>
   </div>
   </section>