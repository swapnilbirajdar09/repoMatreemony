<title>Confirm Checkout - Buddhist Parinay</title>

<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">
            <h3 class="section-title-inner heading-1 strong-300 text-normal">
                Confirm Checkout
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>
        <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center">
            Finalize payment and Renew your Package to continue
        </div>

        <span class="space-xs-xl"></span>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Contact form -->
                <form class="form-default" action="<?php echo $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
                    <input type="text" name="key" value="<?php echo $mkey; ?>" />
                    <input type="text" name="hash" value="<?php echo $hash; ?>"/>
                    <input type="text" name="txnid" value="<?php echo $tid; ?>" />
                    <input type="text" name="productinfo" value="<?php echo $reg_data; ?>" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Package Selected</label>
                                <input class="form-control form-control-md" name="package_title" value="<?php echo strtoupper($package_title); ?>"  readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Total Payable Amount</label>
                                <input class="form-control form-control-md" name="amount" value="<?php echo $package_amount; ?>"  readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Your First Name</label>
                                <input class="form-control form-control-md" name="firstname" value="<?php echo $user_firstname; ?>" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Your Email</label>
                                <input class="form-control form-control-md" name="email" id="email" value="<?php echo $user_email; ?>" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Mobile Number</label>
                                <input class="form-control form-control-md" name="phone" value="<?php echo $user_mobile; ?>" readonly />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <input name="surl" value="<?php echo $sucess; ?>" size="64" type="text" />
                                <input name="furl" value="<?php echo $failure; ?>" size="64" type="text" />  
                                <!--for test environment comment  service provider   -->
                                <input type="text" name="service_provider" value="payu_paisa" size="64" />
                                <input name="curl" value="<?php echo $cancel; ?> " type="text" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-2 col-12">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-styled btn-base-1 mt-4">Proceed Payment</button>
                        <button type="button" class="btn btn-styled btn-base-1 mt-4" onclick="cancelTransaction();">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function cancelTransaction(){
        var cancel = confirm("Do you want to cancel your transaction?");
        if (cancel == true) {
            window.location.href=BASE_URL+'user/payment/renew_package';
        }        
    }
</script>