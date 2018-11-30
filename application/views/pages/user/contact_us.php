<title>Contact Us | Buddhist Parinay</title>
<section class="slice sct-color-1 w3-padding-large" style="margin-top: 80px"> 
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">Contact Us</h5>
                    <h3 class="dark-color">we are ready to hear from you</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>

        <span class="clearfix"></span>
        <div class="row">
            <div class="col-lg-6 w3-col l6 col-xs-12 col-sm-12">
                <?php
                foreach ($info as $key) {
                    ?>
                    <h4><b><?php echo $key['admin_firstname']; ?>  <?php echo $key['admin_lastname']; ?></b></h4>
                    <p>Office : <?php echo $key['admin_officetype']; ?><br>
                        Mobile Number : <?php echo $key['admin_number']; ?><br>
                        Landline Number : <?php echo $key['landline_no']; ?><br>
                        Address : <?php echo $key['admin_office_address']; ?>
                    </p>

                    <?php
                }
                ?>
            </div>     

            <div class="col-lg-6 w3-col l6">
                <div class="row justify-content-center">
                    <!-- Contact form -->
                    <form class="form-default" name="contact_us_form" id="contact_us_form" role="form" method="POST" action="">
                        <div class="w3-col l12 w3-center" id="fpasswd_err"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase c-gray-light">Your Name</label>
                                    <input type="text" name="name" class="form-control form-control-md" required placeholder="Enter your name here...">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase c-gray-light">Email Address</label>
                                    <input type="email" name="email" class="form-control form-control-md" required placeholder="Enter your email ID here...">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase c-gray-light">Phone Number</label>
                                    <input type="number" name="number" class="form-control form-control-md" required placeholder="Enter your contact number here...">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase c-gray-light">Message <small class="text-danger sml_txt" style="text-transform: none;">(Max 300 Characters)</small></label>
                                    <textarea name="message" class="form-control no-resize" rows="5" required placeholder="Let us know what you think..." maxlength="300"></textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 col-12">
                        </div>
                        <div class="">
                            <button type="submit" id="submitbtn" class="w3-button w3-text-white btn-lg btn-styled btn-base-1 mt-4" style="background: linear-gradient(45deg, rgba(72, 44, 191, 1) 0%, rgba(106, 198, 240, 1) 100%);">Send Message</button>
                        </div>
                        <div class="space-80"></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        $("#contact_us_form").submit(function () {
            dataString = $("#contact_us_form").serialize();
            $("#submitbtn").html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Sending Message. Hang on...</b></span>');
            $.ajax({
                type: "POST",
                url: BASE_URL + "user/contact_us/sendContactEmail",
                //dataType : 'text',
                data: dataString,
                return: false, //stop the actual form post !important!
                success: function (data) {
                    console.log(data);                    
                    $("#submitbtn").html('<span>Send Message</span>');
                    $("#fpasswd_err").html(data);
                    $('form :input').val('');
                }
            });
            return false;  //stop the actual form post !important!

        });
    });
</script>