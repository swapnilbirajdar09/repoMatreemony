        
<!-- Transaction failed page -->
<div class="container mt-5 w3-margin-top w3-margin-bottom">
    <div class="row">
        <div class="col-md-2"></div>  
        <div class="col-md-8 text-center">
            <div class="w3-card-2 ">
                <h4 class="card-header">Transaction <label for="failure" class="badge badge-danger">Failed</label></h4>
                <div class="card-body">
                    <?php
                    echo "<p>Your Transaction status is " . $status . "..</br>";
                    echo "Your transaction id for this transaction is " . $txnid . ". <br>Contact our customer support.</p>";
                    echo "<a href='" . base_url() . "' class='btn btn-sm float-left btn-info'> < - Go Back</a>";
                    ?>
                </div>
            </div>
        </div> 
        <div class="col-md-2"></div>
    </div>
</div> 

<!-- Transaction failed page -->