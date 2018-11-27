<title>Renew Packages - Buddhist Parinay</title>
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0">Package Expired !</h2>
            </div>
        </div>
    </div>
</section>
<section class="slice sct-color-1 pricing-plans pricing-plans--style-1 has-bg-cover bg-size-cover">
    <!-- <section class="slice-lg has-bg-cover bg-size-cover" > -->
        <div class="container">
            <span class="clearfix"></span>
            <div class="row">
                <div class="col-md-12">
                       <div class="col-md-12 alert alert-danger alert-dismissible" role="alert">
                        <p style="margin-bottom:0"><i class="fa fa-warning"></i> Your subscription was expired on <?php echo date('d-M-Y',strtotime($userDetails[0]['user_expiry_date'])); ?> ! Please activate your account by <b>Renewing your package</b> OR <b>Purchase new package</b>. </p>
                    </div>
                </div>
                <?php 
                foreach ($package as $key) { 
                    ?>                   
                   <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                            </div>
                            <div class="block-content">
                                <form action="<?php echo base_url(); ?>user/payment/renew_confirmation" method="POST">
                                    <input type="hidden" class="form-control" name="user_gender" value="<?php echo $userDetails[0]['user_gender']; ?>">
                                    <input type="hidden" class="form-control" name="user_firstname" value="<?php echo $userDetails[0]['user_firstname']; ?>">
                                    <input type="hidden" class="form-control" name="user_lastname" value="<?php echo $userDetails[0]['user_lastname']; ?>">
                                    <input type="hidden" class="form-control" name="user_email" value="<?php echo $userDetails[0]['user_email']; ?>">
                                    <input type="hidden" class="form-control" name="user_caste" value="<?php echo $userDetails[0]['user_caste']; ?>">
                                    <input type="hidden" class="form-control" name="user_mobile" value="<?php echo $userDetails[0]['user_mobile_num']; ?>">
                                    <input type="hidden" class="form-control" name="payment_package" value="<?php echo base64_encode($key['package_title'].'|'.$key['package_id']); ?>">
                                    <h3 class="heading heading-5 strong-500"><?php echo $key['package_title']; ?></h3>
                                    <h3 class="price-tag" style="font-size: 26px;"><i class="fa fa-inr"></i> <?php echo $key['package_price']; ?> <span class="heading heading-6">/ <?php echo $key['package_validity'].' '.$key['package_period']; ?> </span></h3>
                                    <ul class="pl-0 pr-0 mt-0">
                                        <!-- <li class="package_items">Limited Profile Searching</li> -->
                                        <?php 
                                        $v = json_decode($key['package_benefits']);
                                        foreach ($v as  $value) {
                                            ?>
                                            <li class="text-line package_items"> 
                                             <i class="fa fa-check w3-text-green"></i> <?php echo $value; ?>
                                         </li>
                                     <?php  } ?>
                                 </ul>
                                 <div class="py-2 text-center mb-2">
                                    <button type="submit" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle">
                                        <span class="text-line">Get This Package</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?> 
    </div>
</div>
</section>