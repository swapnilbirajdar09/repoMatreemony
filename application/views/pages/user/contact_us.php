<section class="slice sct-color-1">
        <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">
            <h3 class="section-title-inner heading-1 strong-300 text-normal">
                Contact Us            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>
                <div class="row">
            <div class="col-lg-6 w3-col l6 col-xs-12 col-sm-12">
                <?php
                 
              foreach ($info as $key) {            
                ?>
                    <h4><?php echo $key['admin_firstname']; ?>  <?php echo $key['admin_lastname']; ?></h4>
                     <p>Office : <?php echo $key['admin_officetype']; ?><br>
                       Contact Number : <?php echo $key['admin_number']; ?></p>
                     <p>Address : </b><?php echo $key['admin_office_address']; ?>
                    </p>
                   
                 <?php
                }
                ?>
            </div>     

        <div class="col-lg-6 w3-col l6">
        <div class="row justify-content-center">
             <!-- Contact form -->
                <form class="form-default" id="contact_us_form" role="form" method="POST" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Your Name</label>
                                <input type="text" name="name" class="form-control form-control-md" required="" value="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-md" required="" value="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Phone Number</label>
                                <input type="number" name="number" class="form-control form-control-md" required="" value="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Message <small class="text-danger sml_txt" style="text-transform: none;">(Max 300 Characters)</small></label>
                                <textarea name="message" class="form-control no-resize" rows="5" required="" maxlength="300"></textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                                        <div class="mt-2 col-12">
                                            </div>
                    <div class="">
                        <button type="submit" class="btn btn-styled btn-base-1 mt-4">Send Message</button>
                    </div>
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
        $("#spinnerDiv").html('<center><img width="70%" height="auto" src="'+BASE_URL+'css/logos/reg.gif"/></center>');
           $.ajax({
            type: "POST",
            url: BASE_URL + "user/Contact_us/sendContactEmail",
            //dataType : 'text',
            data: dataString,
                        return: false, //stop the actual form post !important!
                        success: function (data){ 
                            $("#spinnerDiv").html('');
                            $.alert(data);
                        }
                    });



         return false;  //stop the actual form post !important!

     });
        });
    </script>