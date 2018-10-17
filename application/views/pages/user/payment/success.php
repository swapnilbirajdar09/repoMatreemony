
<!--success page for payment-->
<div class="container mt-5 w3-margin-top w3-margin-bottom">
    <div class="row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
            <div class="w3-card-2">
                <h4 class="card-header">Transaction <label for="Success" class="badge badge-success">Success</label></h4>
                <div class="card-body">
                    <?php
                    echo "<p>Thank You. Your Transaction status is " . $status . ".</br>";
                    echo "Your Transaction ID for this transaction is " . $txnid . "</br>";
                    echo "We have received a payment of Rs. " . $amount . " For The Subscription of Bhuddhist Parinay Materimonial.</p>";
                    ?>
                </div>
            </div>            
        </div> 
        <div class="col-md-2"></div>
    </div>          
</div>
<!--success page for payment Ends-->
