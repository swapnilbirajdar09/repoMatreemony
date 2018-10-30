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
               <form action="<?php echo base_url(); ?>user/payment/confirmation">
                <input type="hidden" class="form-control" name="userFullname" value="Swapnil Shivaji Birajdar">
                <input type="hidden" class="form-control" name="packageType" value="P/M">
                <input type="hidden" class="form-control" name="userEmail" value="swapnilbirajdar09@gmail.com">
                <input type="hidden" class="form-control" name="packageAmmount" value="300">
                <input type="hidden" class="form-control" name="userMobile" value="8793590809">
                <input type="hidden" class="form-control" name="userAddress" value="Nal Stop, Pune">
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