  <header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="white-color">Our Pricing Plan</h1>
            </div>
        </div>
    </div>
</header>
<!--Price-Area -->

<section class="section-padding price-area" id="price_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">Pricing Plan</h5>
                    <h3 class="dark-color">Our Awesome Pricing Plan</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            foreach ($package as $key) { 
             ?>
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
                             <li> 
                           <?php echo $value; ?>
                            </li>
                      <?php  }
                        ?>
                   

                </ul>
            </div>
            <div class="price-rate">
                <sup></sup> <span class="rate"><?php echo $key['package_price']; ?></span> <small>/ <?php echo $key['package_period']; ?> </small>
            </div>

        </div>

        <div class="space-30 hidden visible-xs"></div>
    </div>
<?php } ?>




</div>
</div>
</section>
    <!--Price-Area-End -->