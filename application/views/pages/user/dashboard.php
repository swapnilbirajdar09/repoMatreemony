    <section class="slice sct-color-1">
        <div class="container">
            <div class="row">
                  
                <div class="col-lg-5 size-sm" style="display: block;">
                    <div class="sidebar  ">
                        <div class="">
                             
                            <div class="card " style="background:#fff;" >
                                <div class="card-title b-xs-bottom" style="background:#eff2f4;">
                                    <h3 class="heading heading-sm text-uppercase">Account information
                                        </h3> 
                                         <b><a href="<?php echo base_url();?>edit_profile" class="w3-right w3-hover-text-blue" style="color: #337ab7;">Edit Profile</a></b>
                                   
                                </div>
                            
                                <div class="card-body">
                                  
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Membership Registration Date : </label>
                                                    <?php echo $userDetails[0]['user_reg_date']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Membership Expiry Date :</label>

                                                   <?php echo $userDetails[0]['user_expiry_date']; ?>
                                                </div>
                                            </div>
                                          
                                        </div>
                                         <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase">Membership Package :</label>
                                                 <?php echo $userDetails[0]['user_package']; ?>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Incoming Request :</label>
                                                    <?php 
                                        echo count(json_decode($userDetails[0]['user_received_requests']));
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-feedback">
                                                    <label for="" class="text-uppercase">Remaining Request :</label>
                                                    <?php echo $userDetails[0]['user_remaining_requests']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                               <b><a href="<?php echo base_url();?>edit_profile" class="w3-hover-text-blue" style="color: #337ab7;">Change Password</a></b>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <b><a href="<?php echo base_url();?>edit_profile" class="w3-hover-text-blue" style="color: #337ab7;">Verify Document</a></b>
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
                    <h3 class="w3-center" style="background:#eff2f4;"> Recommended Profile </h3>
                    <?php
                    //print_r($userprofile);die(); 
                        foreach ($userprofile as $value) {
                             
                       
                    ?>
                    <!-- for each loop -->
                <div class="block block--style-3 list z-depth-1-top" id="block_9">
                <div class="block-image">
                <a onclick="return goto_profile(9)">
                <div class="listing-image" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_9.jpg)"></div>
                </a>
               </div>
             <div class="block-title-wrapper">
            <h3 class="heading heading-5 strong-500 mt-4">
           <a onclick="return goto_profile(9)" class="c-base-1"> <?php echo $value['user_firstname']; ?> <?php echo $value['user_lastname']; ?></a>
            </h3>
            <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"> <?php echo $value['user_designation']; ?></h4>
            <table class="table-striped table-bordered mb-2" style="font-size: 12px;">
            <tbody>
                <tr>
                <td height="30" style="padding-left: 5px;" class="font-dark"><b>Member ID</b></td>
                <td height="30" style="padding-left: 5px;" class="font-dark" colspan="3"><a onclick="return goto_profile(9)" class="c-base-1"><b><?php echo $value['user_profile_id']; ?></a></td>
                </tr>
                <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Age</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark">
                    <?php $dateOfBirth = $value['user_dob'];
                     $today = date("Y-m-d");
                    $diff = date_diff(date_create($dateOfBirth), date_create($today));
                    echo $diff->format('%y'); ?>
                 </td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Height</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><?php echo $value['user_height']; ?> ft</td>
                </tr>
                 <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Mother Tongue</b></td>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><?php echo $value['user_mother_tongue']; ?></td>
                <td width="120" height="30" style="padding-left: 5px;"><b>Marital Status</b></td>
              <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><?php echo $value['user_marital_status']; ?></td>
                </tr>
                <tr>
                <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Location</b></td>
                 <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><?php echo $value['user_city']; ?></td>
               
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
                <a id="shortlist_a_9" onclick="return do_shortlist(9)" style="">
                <span id="shortlist_9" class="">
                <i class="fa fa-list-ul"></i> Add To Favourite                              
               </span>
            </a>
            </li>
        </ul>

        </div>
        </div>
        </div>
    </div>
    <!-- for each div completed -->
                                                                                
<?php  } ?>
</div>
</div>
 </div>
   </div>
   </section>