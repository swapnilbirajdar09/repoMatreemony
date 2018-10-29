
<!-- About section -->
<div class="w3-container w3-center" id="about" style="margin-top: 120px">
  <div class="col-md-3"></div>
  <div class="col-md-6">

    <?php if($verifyEmail['status']=='success'){ ?>
      <!-- verified success div -->
      <div id="verify_success">
        <h2 class="w3-text-green">
          <i class="fa fa-check-circle w3-jumbo"></i> Email Verified.
        </h2>
        <p><b><?php echo $verifyEmail['message']; ?></b></p>
        <p>Welcome to <b>Buddhist Parinay</b>. Thank you for verifying your Email ID successfully. This will surely make you a Secure Verified User.</p>
        <p>Click here to <a href="<?php echo base_url(); ?>">Login</a></p>
      </div>
    <?php } ?>

    <?php if($verifyEmail['status']=='error'){ ?>
    <!-- verified failed div -->
    <div id="verify_failed">
      <h2 class="w3-text-red">
        <i class="fa fa-times-circle w3-jumbo"></i> Email not Verified.
      </h2>
      <p><b><?php echo $verifyEmail['message']; ?></b></p>
      <p>Welcome to <b>Buddhist Parinay</b>. Opps, it seems that your verification code is invalid. Try Resending verification code and again verify it. We care about your security.</p>
      <p>Click here to <a href="<?php echo base_url(); ?>">Login</a></p>
    </div>
    <?php } ?>

    <?php if($verifyEmail['status']=='validated'){ ?>
    <!-- already verified success div -->
    <div id="already_verify">
      <h2 class="w3-text-orange">
        <i class="fa fa-check-circle w3-jumbo"></i> Email Already Verified.
      </h2>
      <p><b><?php echo $verifyEmail['message']; ?></b></p>
      <p>Welcome to <b>Buddhist Parinay</b>. You have successfully verified your email.</p>
      <p>Click here to <a href="<?php echo base_url(); ?>">Login</a></p>
    </div>
    <?php } ?>

  </div>
  <div class="col-md-3"></div>
</div>

