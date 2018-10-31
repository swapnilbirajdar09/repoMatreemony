<!--success page for payment-->
<?php 
$dbArr=json_decode($db_info,TRUE);
$err_lvl='';
$db_stat='';
$db_message='';
$badge='';
if($dbArr['db_error_level']=='fatal'){
    $err_lvl='Fatal Error';
    $badge='w3-red';
    $db_stat='failure';
    $db_message=$dbArr['db_message'];
}
if($dbArr['db_error_level']=='warning'){
    $err_lvl='Warning';
    $badge='w3-orange w3-text-white';
    $db_stat='success';
    $db_message=$dbArr['db_message'];
}
if($dbArr['db_error_level']=='none'){
    $err_lvl='Success';
    $badge='w3-green';
    $db_stat='success';
    $db_message=$dbArr['db_message'];
}
?>
<title>Transaction <?php echo $err_lvl; ?></title>

<div class="container w3-padding-large" style="margin-top: 80px">
    <div class="space-100"></div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="w3-col 12 w3-card-2 w3-padding-large ">
        <div class="">
                <h3 class="card-header">Transaction <label for="Success" class="badge <?php echo $badge; ?>"><?php echo $err_lvl; ?></label></h3>
                <div class="card-body">
                    <?php
                    echo "<p>".$db_message."</p>";
                    echo "<p class='w3-small'>Thank You. Your Transaction status is <b>" . $db_stat . "</b>.</br>";
                    echo "Your Transaction ID for this transaction is <b>" . $txnid . "</b>.</p>";
                    ?>
                </div>
                <a href="<?php echo base_url(); ?>" class="bttn-white w3-border" style="padding:5px"><i class="fa fa-chevron-left"></i> Back to Home</a>
            </div> 
        </div>
    </div>
        <div class="col-md-3"></div>
        <div class="space-100"></div>
</div>

<!-- <div class="container mt-5 w3-margin-top w3-margin-bottom"></div> -->
<!--success page for payment Ends-->
