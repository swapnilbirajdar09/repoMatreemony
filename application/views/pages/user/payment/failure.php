<title>Transaction Failed</title>      
<div class="container w3-padding-large" style="margin-top: 80px">
    <div class="space-100"></div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="w3-col 12 w3-card-2 w3-padding-large ">
        <div class="">
                <h3 class="card-header">Transaction <label for="failure" class="badge w3-red">Failed</label></h3>
                <div class="card-body">
                    <?php
                    echo "<p>Your Transaction status is <b>" . $status . "</b></p>";
                    echo "<p class='w3-small'>Your transaction id for this transaction is <b>" . $txnid . "</b>. <br>Contact administrator for any query or money was deducted from your account.</p>";
                    ?>
                </div>
            <a href="<?php echo base_url(); ?>" class="bttn-white w3-border" style="padding:5px"><i class="fa fa-chevron-left"></i> Back to Home</a>
            </div> 
        </div>
    </div>
        <div class="col-md-3"></div>
        <div class="space-100"></div>
</div>

<!-- Transaction failed page -->