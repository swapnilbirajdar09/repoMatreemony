<title>Transaction <?php echo $err_lvl; ?></title>
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
<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">
            <h5 class="section-title-inner heading-3 strong-300 text-normal">
                Transaction <span for="Success" class="badge <?php echo $badge; ?>"><?php echo $err_lvl; ?></span>
            </h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="col-md-12">
                    <?php
                    echo "<p>".$db_message."</p>";
                    echo "<p>Thank You. Your Transaction status is <b>" . $db_stat . "</b>.</br>";
                    echo "Your Transaction ID for this transaction is <b>" . $txnid . "</b>.</p>";
                    ?>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo base_url(); ?>user/user_profile" type="button" class="btn btn-styled btn-base-1 mt-4"><i class="fa fa-chevron-left"></i> Back to Profile</a>
                </div>
            </div>
        </div>
    </div>
</section>