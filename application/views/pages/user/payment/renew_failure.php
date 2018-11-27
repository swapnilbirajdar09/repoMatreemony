<title>Transaction Failed</title>
<!--failure page for payment-->

<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">
            <h3 class="section-title-inner heading-1 strong-300 text-normal">
                Transaction <label for="failure" class="badge w3-red">Failed</label>
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>
        <span class="space-xs-xl"></span>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="col-md-12">
                    <?php
                    echo "<p>Your Transaction status is <b>" . $status . "</b></p>";
                    echo "<p class='w3-small'>Your transaction id for this transaction is <b>" . $txnid . "</b>. <br>Contact administrator for any query or money was deducted from your account.</p>";
                    ?>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo base_url(); ?>user/user_profile" type="button" class="btn btn-styled btn-base-1 mt-4"><i class="fa fa-chevron-left"></i> Back to Profile</a>
                </div>
            </div>
        </div>
    </div>
</section>