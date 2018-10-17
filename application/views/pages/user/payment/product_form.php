
<div class="container" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
//            $lang = $this->session->userdata('language');
//
//            translate("Welcome to codeigniter", $lang);
            ?>
            <h4 class="display-5">Product Information <span class="text-danger hidden-md-up" style="font-size: 15px;">* All fields are required</span></h4>
            <form method="post" id="product_info" enctype="multipart/form-data" action="<?php echo base_url(); ?>user/payment/Welcome/check">                                                                  
                <div class="form-group">                      
                    <input type="number"  name="payble_amount" id="payble_amount" class="form-control" placeholder="Enter Payble Amount" required />
                </div>
                <div class="form-group">
                    <input type="text" name="product_info" id="product_info" class="form-control"  Placeholder="Product info " required />
                </div>
                <div class="form-group">                      
                    <input type="text"  name="customer_name" id="customer_name" class="form-control" placeholder="Full Name (Only alphabets)" required/>
                </div>
                <div class="form-group">                                   
                    <input type="number"  name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number(10 digits)" required/>
                </div>
                <div class="form-group">                                   
                    <input type="email"  name="customer_email" id="customer_email" class="form-control" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="customer_address" id="customer_address" placeholder="Address" required></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>                 
        </div>
        <div class="col-md-2"></div>
    </div>
</div> 
