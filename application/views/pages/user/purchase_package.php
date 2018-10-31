<!--Price-Area -->
<section class="section-padding price-area" id="price_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">Purchase Package</h5>
                    <h3 class="dark-color">Our Awesome Pricing Packages</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            foreach ($package as $key) { 
               ?>
               <form action="<?php echo base_url(); ?>user/payment/confirmation" method="POST">
                <input type="hidden" class="form-control" name="user_gender" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['gender']; }?>">
                <input type="hidden" class="form-control" name="user_firstname" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['first_name']; }?>">
                <input type="hidden" class="form-control" name="user_lastname" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['last_name']; }?>">
                <input type="hidden" class="form-control" name="user_email" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['email_id']; }?>">
                <input type="hidden" class="form-control" name="user_caste" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['caste']; }?>">
                <input type="hidden" class="form-control" name="user_mobile" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['country_code'].'-'.$_POST['mob_number']; }?>">
                <input type="hidden" class="form-control" name="payment_package" value="<?php echo base64_encode($key['package_title'].'|'.$key['package_id']); ?>">
               <div class="col-xs-12 col-sm-4">
                <div class="price-box">
                    <div class="price-header">
                        <div class="price-icon">
                            <span class="lnr lnr-diamond"></span>
                        </div>
                        <h4 class="upper"><?php echo $key['package_title']; ?>    
                    </h4>
                </div>
                <div class="price-body">
                    <ul>
                     <?php 
                     $v = json_decode($key['package_benefits']);
                     foreach ($v as  $value) {
                        ?>
                        <li class="pull-left"> 
                         <i class="fa fa-check w3-text-green"></i> <?php echo $value; ?>
                     </li>
                 <?php  }
                 ?>
             </ul>
         </div>
         <div class="space-30"></div>
         <div class="price-rate">
            <sup></sup> <span class="rate"><?php echo $key['package_price']; ?></span> <small>/ <?php echo $key['package_validity'].' '.$key['package_period']; ?> </small>
        </div>
        <div class="" style="padding:20px">
            <button type="submit" class="w3-button w3-hover-text-white btn btn-block w3-text-white" style="background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);"><b> Pay now </b></button>
        </div>        
    </div>
    <div class="space-30 hidden visible-xs"></div>
</div>
</form>
<?php } ?>




</div>
</div>
</section>
    <!--Price-Area-End -->