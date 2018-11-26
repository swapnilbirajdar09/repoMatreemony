<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body >
    <?php if (!$userDetails) { ?>
    <div class="col-md-12">
        <div class="col-md-12 alert alert-warning" role="alert">
            <p style="margin-bottom:0"><i class="fa fa-warning"></i> System is not able to find user details! </p>
        </div>
    </div>
    <?php
} else {
?>
<div class="grid">
    <br>
    <input class="btn btn-default" type="submit" name="submit" value="Click here to Print / Save as PDF"  onclick='printDiv();'>
</div>

<div id="DivIdToPrint">
    <title><?php echo $userDetails[0]['user_firstname'] . ' ' . $userDetails[0]['user_lastname']; ?> - Full Profile</title>
    <style type="text/css">
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
  }
  /* HTML5 display-role reset for older browsers */
  article, aside, details, figcaption, figure,
  footer, header, hgroup, menu, nav, section {
      display: block;
  }
  body {
      line-height: 1;
  }
  ol, ul {
      list-style: none;
  }
  blockquote, q {
      quotes: none;
  }
  blockquote:before, blockquote:after,
  q:before, q:after {
      content: '';
      content: none;
  }
  table {
      border-collapse: collapse;
      border-spacing: 0;
  }

/*
  ========================================
  Custom styles
  ========================================
  */

  body {
      /*background: #293f50;*/
      color: #888;
      font: 300 16px/22px "Lato", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  }

/*
  ========================================
  Grid
  ========================================
  */

  *,
  *:before,
  *:after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
  }
  .container,
  .grid {
      margin: 0 auto;
      width: 960px;
  }
  .container {
      padding-left: 30px;
      padding-right: 30px;
  }
  .grid,
  .col-1-3,
  .col-2-3 {
      padding-left: 15px;
      padding-right: 15px;
  }
  .col-1-3,
  .col-2-3  {
      display: inline-block;
      vertical-align: top;
  }
  .col-1-3 {
      width: 33.33%;
  }
  .col-2-3 {
      width: 66.66%;
  }

/*
  ========================================
  Clearfix
  ========================================
  */

  .group:before,
  .group:after {
      content: "";
      display: table;
  }
  .group:after {
      clear: both;
  }
  .group {
      clear: both;
      *zoom: 1;
  }

/*
  ========================================
  Rows
  ========================================
  */

  .row,
  .row-alt {
      min-width: 960px;
  }
  .row {
      background: #fff;
      padding: 66px 0 44px 0;
  }
  .row-alt {
      background: #cbe2c1;
      background: -webkit-linear-gradient(to right, #a1d3b0, #f6f1d3);
      background:    -moz-linear-gradient(to right, #a1d3b0, #f6f1d3);
      background:         linear-gradient(to right, #a1d3b0, #f6f1d3);
      padding: 44px 0 22px 0;
  }

/*
  ========================================
  Typography
  ========================================
  */

  h1, h2, h3, h4 {
      color: #648880;
  }
  h1, h3, h4, h5, p {
      margin-bottom: 22px;
  }
  h1 {
      font-size: 36px;
      line-height: 44px;
  }
  h2 {
      font-size: 24px;
      line-height: 44px;
  }
  h3 {
      font-size: 21px;
  }
  h4 {
      font-size: 18px;
  }
  h5 {
      color: #a9b2b9;
      font-size: 14px;
      font-weight: 400;
      text-transform: uppercase;
  }
  strong {
      font-weight: 400;
  }
  cite,
  em {
      font-style: italic;
  }

/*
  ========================================
  Leads
  ========================================
  */

  .lead {
      text-align: center;
  }
  .lead p {
      font-size: 21px;
      line-height: 33px;
  }

/*
  ========================================
  Links
  ========================================
  */

  a {
      color: #648880;
      text-decoration: none;
  }
  a:hover {
      color: #a9b2b9;
  }
  p a {
      border-bottom: 1px solid #dfe2e5;
  }
  .primary-header a,
  .primary-footer a {
      color: #fff;
  }
  .primary-header a:hover,
  .primary-footer a:hover {
      color: #648880;
  }

/*
  ========================================
  Buttons
  ========================================
  */

  .btn {
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      font-weight: 400;
      letter-spacing: .5px;
      margin: 0;
      text-transform: uppercase;
  }
  .btn-default {
      border: 0;
      background: #648880;
      padding: 11px 30px;
      font-size: 14px;
  }
  .btn-default:hover {
      background: #77a198;
  }
  .btn-alt {
      border: 1px solid #fff;
      padding: 10px 30px;
  }
  .btn-alt:hover {
      background: #fff;
      color: #648880;
  }

/*
  ========================================
  Primary header
  ========================================
  */

  .logo {
      border-top: 4px solid #648880;
      float: left;
      font-size: 48px;
      font-weight: 100;
      letter-spacing: .5px;
      line-height: 44px;
      padding: 40px 0 22px 0;
      text-transform: uppercase;
  }
  .tagline {
      margin: 66px 0 22px 0;
      text-align: right;
  }
  .primary-nav {
      font-size: 14px;
      font-weight: 400;
      letter-spacing: .5px;
      text-transform: uppercase;
  }

/*
  ========================================
  Primary footer
  ========================================
  */

  .primary-footer {
      color: #648880;
      font-size: 14px;
      padding-bottom: 44px;
      padding-top: 44px;
  }
  .primary-footer small {
      float: left;
      font-weight: 400;
  }

/*
  ========================================
  Navigation
  ========================================
  */

  .nav {
      text-align: right;
  }
  .nav li {
      display: inline-block;
      margin: 0 10px;
      vertical-align: top;
  }
  .nav li:last-child {
      margin-right: 0;
  }

/*
  ========================================
  Home
  ========================================
  */

  .hero {
      color: #fff;
      line-height: 44px;
      padding: 22px 80px 66px 80px;
      text-align: center;
  }
  .hero h2 {
      font-size: 36px;
  }
  .hero p {
      font-size: 24px;
      font-weight: 100;
  }
  .teaser a:hover h3 {
      color: #a9b2b9;
  }
  .teaser img {
      border-radius: 5px;
      display: block;
      margin-bottom: 22px;
      max-width: 100%
  }

/*
  ========================================
  Speakers
  ========================================
  */

  .speaker {
      margin-bottom: 44px;
  }
  .speaker-info {
      border: 1px solid #dfe2e5;
      border-radius: 5px;
      margin-top: 28px;
      padding-bottom: 22px;
      text-align: center;
  }
  .speaker-info img {
      /*border-radius: 50%;*/
      height: 130px;
      margin: -66px 0 22px 0;
      vertical-align: top;
  }

/*
  ========================================
  Schedule
  ========================================
  */

  table {
      margin-bottom: 44px;
      width: 100%;
  }
  table:last-child {
      margin-bottom: 0;
  }
  th,
  td {
      padding-bottom: 22px;
      vertical-align: top;
  }
  th {
      padding-right: 45px;
      text-align: left;
      width: 20%;
  }
  td {
      width: 40%;
  }
  thead {
      line-height: 44px;
  }
  thead th {
      color: #648880;
      font-size: 24px;
  }
  tbody th {
      color: #a9b2b9;
      font-size: 14px;
      font-weight: 400;
      padding-top: 22px;
      text-transform: uppercase;
  }
  tbody td {
      border-top: 1px solid #dfe2e5;
      padding-top: 21px;
  }
  tbody td:first-of-type {
      padding-right: 15px;
  }
  tbody td:last-of-type {
      padding-left: 15px;
  }
  tbody td:only-of-type {
      padding-left: 0;
      padding-right: 0;
  }
  table a {
      color: #888;
  }
  table h4 {
      margin-bottom: 0;
  }
  .schedule-offset {
      color: #a9b2b9;
  }

/*
  ========================================
  Venue
  ========================================
  */

  .venue-theatre {
      margin-bottom: 66px;
  }
  .venue-hotel {
      margin-bottom: 22px;
  }
  .venue-map {
      height: 264px;
  }

/*
  ========================================
  Register
  ========================================
  */

  .why-attend {
      list-style: square;
      margin: 0 0 22px 30px;
  }
  form {
      margin-bottom: 22px;
  }
  input,
  select,
  textarea {
      font: 300 16px/22px "Lato", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  }
  .register-group label {
      color: #648880;
      cursor: pointer;
      font-weight: 400;
  }
  .register-group input,
  .register-group select,
  .register-group textarea {
      border: 1px solid #c6c9cc;
      border-radius: 5px;
      color: #888;
      display: block;
      margin: 5px 0 27px 0;
      padding: 5px 8px;
  }
  .register-group input,
  .register-group textarea {
      width: 100%;
  }
  .register-group select {
      height: 34px;
      width: 60px;
  }
  .register-group textarea {
      height: 78px;
  }

</style>

<!-- <input type='button' id='btn' value='Print'> -->
<section class="row">

  <div class="grid">

    <!-- Aaron Irizarry -->

    <section class="speaker" id="aaron-irizarry">

      <div class="col-2-3">

        <h2><?php echo $userDetails[0]['user_firstname'] . ' ' . $userDetails[0]['user_lastname']; ?></h2>
        <h5><?php echo $userDetails[0]['user_designation']; ?></h5>
        <p><?php echo $userDetails[0]['user_about_me']; ?></p>

          </div><!--

      --><aside class="col-1-3">
        <div class="speaker-info">
            <?php if ($userDetails[0]['user_profile_image'] != '') { ?>
            <img src="<?php echo base_url(); ?><?php echo $userDetails[0]['user_profile_image']; ?>" alt="<?php echo $userDetails[0]['user_firstname'] . ' ' . $userDetails[0]['user_lastname']; ?> image">
            <?php } else { ?>
            <img src="<?php echo base_url(); ?>assets/images/user.png" alt="<?php echo $userDetails[0]['user_firstname'] . ' ' . $userDetails[0]['user_lastname']; ?> image">
            <?php } ?>

            <ul>
                <?php
                $doc_verified_count = 0;
                $uploaded_doc = 0;
                if ($userDocuments) {
                $uploaded_doc = count($userDocuments);
            }
            for ($i = 0; $i < count($userDocuments); $i++) {
            if ($userDocuments[$i]['status'] == 1) {
            $doc_verified_count++;
        }
    }
    ?>
    <li><strong><?php echo $userDetails[0]['user_profile_key']; ?></strong></li>
    <li><strong>Email: </strong><?php echo $userDetails[0]['user_email']; ?></li>
    <li><strong>Mobile: </strong><?php echo $userDetails[0]['user_mobile_num']; ?></li>
    <li><strong>Caste: </strong><?php echo $userDetails[0]['user_caste']; ?></li>
    <li><strong>Documents uploaded: </strong><?php echo $uploaded_doc; ?></li>
    <li><strong>Favorited by: </strong><?php echo $userDetails[0]['self_favourite_count']; ?></li>
</ul>

</div>
</aside>

</section>
</div>
<div class="container">
    <table>
      <thead>
        <tr>
          <th scope="row">
            Basic Information
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
            <h4>Profile Created by</h4>
            <?php echo $userDetails[0]['user_profile_created_by']; ?>
        </td>
        <td>
            <h4>Date of Birth</h4>
            <?php echo date('d M Y', strtotime($userDetails[0]['user_dob'])); ?>
        </td>
        <td>
            <h4>Marital Status</h4>
            <?php echo $userDetails[0]['user_marital_status']; ?>
        </td>
    </tr>
    <tr>
        <td>
            <h4>No. of Children</h4>
            <?php
            if ($userDetails[0]['user_no_of_children'] == '0') {
            echo 'N/A';
        } 
        else 
        {
            echo $userDetails[0]['user_no_of_children'];
        }
        ?>
    </td>
    <td>
        <h4>Weight (in KGs)</h4>
        <?php echo $userDetails[0]['user_weight']; ?>
    </td>
    <td>
        <h4>Height (in feets)</h4>
        <?php echo $userDetails[0]['user_height']; ?>
    </td>
</tr>
<tr>
  <td>
    <h4>Body Type</h4>
    <?php echo $userDetails[0]['user_body_type']; ?>
</td>
<td>
    <h4>Body Complexian</h4>
    <?php echo $userDetails[0]['user_body_complexion']; ?>
</td>
<td>
    <h4>Blood Group</h4>
    <?php echo $userDetails[0]['user_blood_grp']; ?>
</td>

</tr>
<tr>
  <td>
    <h4>Mother Tongue</h4>
    <?php echo $userDetails[0]['user_mother_tongue']; ?>
</td>
<td colspan="2">
    <h4>Hobbies</h4>
    <?php echo $userDetails[0]['user_hobbies']; ?>
</td>

</tr>
</tbody>
</table>

<table>
  <thead>
    <tr>
      <th scope="row">
        Educational & Professional Information
    </th>
</tr>
</thead>
<tbody>
    <tr>
        <td>
            <h4>Educational Field</h4>
            <?php echo $userDetails[0]['user_educational_field']; ?>
        </td>
        <td>
            <h4>School/College Name</h4>
            <?php echo $userDetails[0]['user_school/clg_name']; ?>
        </td>
        <td>
            <h4>University Name</h4>
            <?php echo $userDetails[0]['user_university_name']; ?>
        </td>
    </tr>
    <tr>
        <td>
            <h4>Additional Education</h4>
            <?php echo $userDetails[0]['user_additional_edu']; ?>
        </td>
        <td>
            <h4>Occupation Type</h4>
            <?php echo $userDetails[0]['user_occupation_type']; ?>
        </td>
        <td>
            <h4>Working Field</h4>
            <?php echo $userDetails[0]['user_working_field']; ?>
        </td>
    </tr>
    <tr>
      <td>
        <h4>Company Name</h4>
        <?php echo $userDetails[0]['user_company_name']; ?>
    </td>
    <td>
        <h4>Monthly Income</h4>
        <?php echo $userDetails[0]['user_monthly_income']; ?>
    </td>
    <td>
        <h4>Annual Income</h4>
        <?php echo $userDetails[0]['user_annual_income']; ?>
    </td>
</tr>
<tr>
  <td colspan="3">
    <h4>Workplace Address</h4>
    <?php echo $userDetails[0]['user_workplace_address']; ?>
</td>
</tr>
</tbody>
</table>

<table>
  <thead>
    <tr>
      <th scope="row">
        Family Information
    </th>
</tr>
</thead>
<tbody>
    <tr>
        <td>
            <h4>Father Name</h4>
            <?php echo $userDetails[0]['user_father_name']; ?>
        </td>
        <td colspan="2">
            <h4>Father Occupation</h4>
            <?php echo $userDetails[0]['user_father_occupation']; ?>
        </td>
        
    </tr>
    <tr>
        <td>
            <h4>Mother Name</h4>
            <?php echo $userDetails[0]['user_mother_name']; ?>
        </td>
        <td colspan="2">
            <h4>Mother Occupation</h4>
            <?php echo $userDetails[0]['user_mother_occupation']; ?>
        </td>
    </tr>
    <tr>
      <td>
        <h4>Country</h4>
        <?php echo $userDetails[0]['user_country']; ?>
    </td>
    <td>
        <h4>State</h4>
        <?php echo $userDetails[0]['user_state']; ?>
    </td>
    <td>
        <h4>Native Place</h4>
        <?php echo $userDetails[0]['user_city']; ?>
    </td>
</tr>
<tr>
  <td colspan="3">
    <h4>Residential Address</h4>
    <?php echo $userDetails[0]['user_residential_address']; ?>
</td>
</tr>
<tr>
    <td>
        <h4>Contact number 1</h4>
        <?php echo $userDetails[0]['user_contact_no1']; ?>
    </td>
    <td>
        <h4>Contact number 2</h4>
        <?php echo $userDetails[0]['user_contact_no2']; ?>
    </td>
</tr>
</tbody>
</table>

<table>
  <thead>
    <tr>
      <th scope="row">
       Life Style
   </th>
</tr>
</thead>
<tbody>
    <tr>
        <td>
            <h4>Diet</h4>
            <?php echo $userDetails[0]['user_diet']; ?>
        </td>
        <td>
            <h4>Drink</h4>
            <?php echo $userDetails[0]['user_drink']; ?>
        </td>       
        <td>
            <h4>Smoke</h4>
            <?php echo $userDetails[0]['user_smoke']; ?>
        </td>
    </tr>
    <tr> 
        <td colspan="3">
            <h4>Living With</h4>
            <?php echo $userDetails[0]['user_living_with']; ?>
        </td>
    </tr>
</tbody>
</table>

<table>
  <thead>
    <tr>
      <th scope="row">
       Relatives Information
   </th>
</tr>
</thead>
<tbody>
    <?php
    if ($userDetails[0]['user_relative_info'] != '' && $userDetails[0]['user_relative_info'] != '[]') {
    $relativeArr = json_decode($userDetails[0]['user_relative_info'], TRUE);
    for ($i = 0; $i < count($relativeArr); $i++) {
    ?>
    <tr>
        <td colspan="3" style="background:grey;color: white;padding-left:10px">Relative No. <?php echo $i + 1; ?> </td>
    </tr>
    <tr>
        <td>
            <h4>Relatives Name</h4>
            <?php echo $relativeArr[$i]['relative_name']; ?>
        </td>
        <td>
            <h4>Relation with Me</h4>
            <?php echo $relativeArr[$i]['relative_relation']; ?>
        </td>
        <td>
            <h4>Contact number</h4>
            <?php echo $relativeArr[$i]['relative_contact']; ?>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h4>Residential Address</h4>
            <?php echo $relativeArr[$i]['relative_address']; ?>
        </td>
    </tr>
    <?php
}
} else {
echo '<tr><td colspan="3"><h4> Not Available. </h4></td></tr>';
}
?>
</tbody>
</table>

<table>
  <thead>
    <tr>
      <th scope="row">
       Expectations
   </th>
</tr>
</thead>
<tbody>
    <tr>
        <td colspan="3">
            <?php echo $userDetails[0]['user_partner_expections']; ?>
        </td>
    </tr>
</tbody>
</table>
</div>
</section>
</div>
<?php } ?>
<script type="text/javascript">

    function printDiv() 
    {

      var divToPrint=document.getElementById('DivIdToPrint');

      var newWin=window.open('','Print-Window');

      newWin.document.open();

      newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

      newWin.document.close();

      setTimeout(function(){newWin.close();},10);

  }
</script>
</body>
</html>