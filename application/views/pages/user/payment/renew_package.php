<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0">Premium Plans</h2>
            </div>
        </div>
    </div>
</section>
<section class="slice sct-color-1 pricing-plans pricing-plans--style-1 has-bg-cover bg-size-cover">
    <!-- <section class="slice-lg has-bg-cover bg-size-cover" > -->
        <div class="container">
            <span class="clearfix"></span>
            <div class="row">
                      
<?php 
            foreach ($package as $key) { 
               ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                            </div>
                            <div class="block-content">
                                <h3 class="heading heading-5 strong-500"><?php echo $key['package_title']; ?></h3>
                                <h3 class="price-tag" style="font-size: 26px;"><i class="fa fa-inr"></i> <?php echo $key['package_price']; ?> <span class="heading heading-6">/ <?php echo $key['package_validity'].' '.$key['package_period']; ?> </span></h3>
                                <ul class="pl-0 pr-0 mt-0">
                                    <!-- <li class="package_items">Limited Profile Searching</li> -->
                                    <?php 
                     $v = json_decode($key['package_benefits']);
                     foreach ($v as  $value) {
                        ?>
                        <li class="text-line-through package_items pull-left"> 
                         <i class="fa fa-check w3-text-green"></i> <?php echo $value; ?>
                     </li>
                 <?php  } ?>
                                </ul>
                                <div class="py-2 text-center mb-2">
                                    <a href="#" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle">
                                        <span class="text-line-through">Get This Package</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                                <li style="list-style-type: none;">
                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/plan_image/plan_2_thumb.png" class="img-sm" height="100">
                                </li>
                            </div>
                            <div class="block-content">
                                <h3 class="heading heading-5 strong-500">Bronze</h3>
                                <h3 class="price-tag" style="font-size: 26px;">$15.00</h3>
                                <ul class="pl-0 pr-0 mt-0">
                                    <!-- <li class="package_items">Advanced Profile Searching</li> -->
                                    <li class="active package_items">Express Interests: 10 Times</li>
                                    <li class="active package_items">Direct Messages: 10 Times</li>
                                    <li class="active package_items">Photo Gallery: 5 Images</li>
                                </ul>
                                <div class="py-2 text-center mb-2">
                                    <a href="http://activeitzone.com/demo/matrimonial/home/plans/subscribe/2" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle">
                                        <span class="active">Get This Package</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                                <li style="list-style-type: none;">
                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/plan_image/plan_3_thumb.png" class="img-sm" height="100">
                                </li>
                            </div>
                            <div class="block-content">
                                <h3 class="heading heading-5 strong-500">Silver</h3>
                                <h3 class="price-tag" style="font-size: 26px;">$25.00</h3>
                                <ul class="pl-0 pr-0 mt-0">
                                    <!-- <li class="package_items">Advanced Profile Searching</li> -->
                                    <li class="active package_items">Express Interests: 15 Times</li>
                                    <li class="active package_items">Direct Messages: 10 Times</li>
                                    <li class="active package_items">Photo Gallery: 5 Images</li>
                                </ul>
                                <div class="py-2 text-center mb-2">
                                    <a href="http://activeitzone.com/demo/matrimonial/home/plans/subscribe/3" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle">
                                        <span class="active">Get This Package</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                                <li style="list-style-type: none;">
                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/plan_image/plan_4_thumb.png" class="img-sm" height="100">
                                </li>
                            </div>
                            <div class="block-content">
                                <h3 class="heading heading-5 strong-500">Gold</h3>
                                <h3 class="price-tag" style="font-size: 26px;">$35.00</h3>
                                <ul class="pl-0 pr-0 mt-0">
                                    <!-- <li class="package_items">Advanced Profile Searching</li> -->
                                    <li class="active package_items">Express Interests: 20 Times</li>
                                    <li class="active package_items">Direct Messages: 15 Times</li>
                                    <li class="active package_items">Photo Gallery: 5 Images</li>
                                </ul>
                                <div class="py-2 text-center mb-2">
                                    <a href="http://activeitzone.com/demo/matrimonial/home/plans/subscribe/4" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle">
                                        <span class="active">Get This Package</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                        <div class="icon-block--style-1-v5 text-center">
                            <div class="block-icon c-gray-dark">
                                <li style="list-style-type: none;">
                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/plan_image/plan_5_thumb.png" class="img-sm" height="100">
                                </li>
                            </div>
                            <div class="block-content">
                                <h3 class="heading heading-5 strong-500">Platinum</h3>
                                <h3 class="price-tag" style="font-size: 26px;">$45.00</h3>
                                <ul class="pl-0 pr-0 mt-0">
                                    <!-- <li class="package_items">Advanced Profile Searching</li> -->
                                    <li class="active package_items">Express Interests: 25 Times</li>
                                    <li class="active package_items">Direct Messages: 20 Times</li>
                                    <li class="active package_items">Photo Gallery: 7 Images</li>
                                </ul>
                                <div class="py-2 text-center mb-2">
                                    <a href="http://activeitzone.com/demo/matrimonial/home/plans/subscribe/5" class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle">
                                        <span class="active">Get This Package</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>