<!-- Price-Area --> 
<section class="section-padding price-area" id="price_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">Checkout Payment</h5>
                    <h3 class="dark-color">Finalize payment and Complete your Registration</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="<?php echo $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
                                <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
                                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
                                <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
                                <input type="hidden" name="productinfo" value="<?php echo $reg_data; ?>" />
                                <div class="form-group">
                                    <label class="control-label">Package Selected</label>
                                    <input class="form-control" name="package_title" value="<?php echo strtoupper($package_title); ?>"  readonly/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Total Payable Amount</label>
                                    <input class="form-control" name="amount" value="<?php echo $package_amount; ?>"  readonly/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Your First Name</label>
                                    <input class="form-control" name="firstname" value="<?php echo $user_firstname; ?>" readonly/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Your Email</label>
                                    <input class="form-control" name="email" id="email" value="<?php echo $user_email; ?>" readonly/>
                                    <?php if($email_exist=='1'){ ?><label class="w3-text-red">ERROR: Email ID already exist! Try Login.</label><?php } ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Mobile Number</label>
                                    <input class="form-control" name="phone" value="<?php echo $user_mobile; ?>" readonly />
                                </div>

                                <div class="form-group">
                                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
                                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />  
                                    <!--for test environment comment  service provider   -->
                                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
                                </div>
                                <div class="form-group w3-center">
                                    <?php if($email_exist=='0'){ ?><button type="submit" class="w3-button w3-green btn btn-lg btn-success" value="Pay Now"> Pay Now </button><?php } ?>
                                    <button type="button" class="w3-button w3-red btn btn-lg btn-warning" onclick="cancelTransaction();" value="Cancel"> Cancel </button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
           <!--  
            <?php 
            foreach ($package as $key) { 
               ?>
               <form action="<?php echo base_url(); ?>user/payment/confirmation">
                <input type="hidden" class="form-control" name="user_gender" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['gender']; }?>">
                <input type="hidden" class="form-control" name="user_firstname" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['first_name'].' '.$_POST['last_name']; }?>">
                <input type="hidden" class="form-control" name="user_email" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['email_id']; }?>">
                <input type="hidden" class="form-control" name="user_caste" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['caste']; }?>">
                <input type="hidden" class="form-control" name="user_mobile" value="<?php if(isset($_POST) && !empty($_POST)){echo $_POST['country_code'].''.$_POST['mob_number']; }?>">
                <input type="text" class="form-control" name="payment_package" value="<?php echo base64_encode($key['package_title'].'|'.$key['package_id']); ?>">
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
-->



</div>
</div>
</section>
<!--Price-Area-End -->
<script type="text/javascript">
    function cancelTransaction(){
        var cancel = confirm("Do you want to cancel your transaction?");
        if (cancel == true) {
            window.location.href=BASE_URL;
        }        
    }
</script>