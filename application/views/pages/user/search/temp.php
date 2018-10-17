<style>
    .card-pricing:hover {
        z-index: 1;
        border: 3px solid #007bff;
    }
    .card-pricing .list-unstyled li {
        padding: .5rem 0;
        color: #6c757d;
    }
    .card:hover {
        padding: .5rem 0;
        color: #6c757d;        
    }
</style>
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0">Membership Plans</h2>
            </div>
        </div>
    </div>
</section>
<div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row col-lg-12">
        <div class="col-lg-3"></div>
        <div class="card card-pricing text-center col-lg-3 px-3 mb-4">
            <form action="<?php echo base_url(); ?>user/payment/welcome/check" method="post" name="paymentForm" id="paymentForm" style="display: block">
                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">
                        <span class="w3-large">
                            <big>300</big>
                        </span> <i class="fa fa-rupee w3-medium"></i>
                        <span class="h6 text-muted ml-2">/ per&nbsp;month</span>
                    </h1>
                </div>
                <input type="hidden" class="form-control" id="userFullname" name="userFullname" value="Swapnil Shivaji Birajdar">                
                <input type="hidden" class="form-control" id="packageType" name="packageType" value="P/M">
                <input type="hidden" class="form-control" id="userEmail" name="userEmail" value="swapnilbirajdar09@gmail.com">
                <input type="hidden" class="form-control" id="packageAmmount" name="packageAmmount" value="300">
                <input type="hidden" class="form-control" id="userMobile" name="userMobile" value="8793590809">
                <input type="hidden" class="form-control" id="userAddress" name="userAddress" value="Nal Stop, Pune">
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                        <li>Send Request</li>
                        <li>View Full Profile</li>
                        <li>Monthly updates</li>
                        <li>Free cancellation</li>
                    </ul>
                    <button type="submit" class="btn btn btn-primary mb-3 mb-3">Pay now</button>
                </div>
            </form>
        </div>
        <div class="card card-pricing shadow text-center col-lg-3 px-3 mb-4">
            <form action="<?php echo base_url(); ?>user/payment/welcome/check" method="post" name="paymentForm" id="paymentForm" style="display: block">
                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Prime</span>
                <div class="bg-transparent card-header pt-4 border-0">
                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">
                        <span class="w3-large">
                            <big>1000</big>
                        </span> <i class="fa fa-rupee w3-medium"></i>
                        <span class="h6 text-muted ml-2">/ per&nbsp;year</span>
                    </h1>
                </div>
                <input type="hidden" class="form-control" id="userFullname" name="userFullname" value="Swapnil Shivaji Birajdar">
                <input type="hidden" class="form-control" id="packageType" name="packageType" value="P/Y">
                <input type="hidden" class="form-control" id="userEmail" name="userEmail" value="swapnilbirajdar09@gmail.com">
                <input type="hidden" class="form-control" id="packageAmmount" name="packageAmmount" value="1000">
                <input type="hidden" class="form-control" id="userMobile" name="userMobile" value="8793590809">
                <input type="hidden" class="form-control" id="userAddress" name="userAddress" value="Nal Stop, Pune">
                <div class="card-body pt-0">
                    <ul class="list-unstyled mb-4">
                        <li>Send Request</li>
                        <li>View Full Profile</li>
                        <li>Monthly updates</li>
                        <li>Free cancellation</li>
                    </ul>
                    <button type="submit" class="btn btn-primary mb-3">Pay Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!---------------------------package cards -------------------------------------->
