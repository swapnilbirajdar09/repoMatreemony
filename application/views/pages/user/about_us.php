<style>
    .parallax { 
        /*/ The image used /*/

        /*/ Set a specific height /*/
        height: auto; 

        /*/ Create the parallax scrolling effect /*/
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<div class="parallax download-area overlay" style="background-image: url('<?php echo base_url(); ?>assets/client/uploads/home_page/slider_image/sinew.jpg'); height: 350px;">
    <div class="col-lg-12 w3-text-white wide-text title">
        <div class="w3-col l6 w3-padding">
            <div class="space-80"></div>
            <h2 class="w3-left w3-margin-top">ABOUT US</h2>
        </div>
    </div>	
</div>

<!-- About Section -->
<div class="w3-row w3-padding-large" id="about" style="margin-top: 80px">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="w3-col m4 w3-padding-large">
            <div class="w3-col l12 w3-margin-top">
     <!--    <img src="<?php echo base_url(); ?>assets/demo/images/profile_1.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">-->
                <h4 class=""><b>Mrs. Anjali Nitin Gaikwad</b><br></h4>
                <h5><p>(Founder / President OF Gaikwad Charitable Trust .<br>
                        Women President Of <b>BAHUJAN SAMAJ PARTY</b> Constituency <b>KHADAKWASLA LEGISLATIVE ASSEMBLY .</b><br>
                        President: PARINAY VADHU VAR SUCHAK MANDAL.)</p></h5>
            </div>
        </div>
        <div class="w3-col m8 w3-padding-large ">
            <div class="w3-col l12 w3-margin-top">
                <h4 class=""><b>A Successful Marriage Requires Falling In Love Many Times, Always With Same Person.</b></h4>

                <p>
                    I hereby bow my head for the enlightened Lord Gautam Buddha and honour a salutation to the only architect of Indian Constitution, i.e. Dr.Babasaheb Ambedkar and express my kind gratitude to all those honourable personalities who encouraged me to get in this work.
                </p>
            </div>
            <p>
                In this Era of Marriage World, We Matrimonial based <b>Buddhist Parinay</b> site, have connected Brides
                and Grooms from all around the world to search their life partner.
                Our goal is to provide the best of the profiles for Brides and Grooms to help , find their ideal life partner for their marriage.
            </p>
        </div>
        <div class="w3-col m8 w3-padding-large"><div> <b>---- Contact Details ----</b></div></div>
        <div class="w3-col m8 w3-padding-large">
            <?php
            foreach ($info as $key) {
                ?>
                <h4><b><?php echo $key['admin_firstname']; ?>  <?php echo $key['admin_lastname']; ?></b></h4>
                <p><b>Office :</b> <?php echo $key['admin_officetype']; ?>&nbsp;&nbsp;&nbsp; <b>Mobile Number :</b> <?php echo $key['admin_number']; ?><br>
                    <b>Landline Number :</b> <?php echo $key['landline_no']; ?>&nbsp;&nbsp;&nbsp; <b>Address : </b><?php echo $key['admin_office_address']; ?><br>
                </p>

                <?php
            }
            ?>
        </div>
    </div>

    <div class="col-lg-2"></div>


</div>

