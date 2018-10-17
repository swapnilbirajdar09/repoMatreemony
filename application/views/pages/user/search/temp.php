<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->
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


<!DOCTYPE html>
<!--<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
        <meta name="description" content="Demo of Bootstrap 4 user profile card widget to show different styles of user card created with default card and other components.">
        <title>Bootstrap 4 User Profile Card » WebNots</title> 
         CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .btn{border-radius: 0;}
        .btn-md {
            border-width: 0;
            outline: none;
            border-radius: 0;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, .6);
            cursor: pointer;
        }    
        h3 {text-align: center;margin:40px;}
    </style>
    <body>-->
<!--        <h3 class="headalign">User Profile Card with Right Photo</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-inverse" style="background-color: #333; border-color: #333;">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="card-title">Name: Stffanie Osterich</h2>
                                    <p class="card-text"><strong>Profile: </strong> Web Developer </p>
                                    <p class="card-text"><strong>Skills: </strong> Theme, plugin and website development </p>
                                    <p><strong>Platform: </strong>
                                        <span class="badge bg-primary">WordPress</span> 
                                        <span class="badge bg-info">Weebly</span>
                                        <span class="badge bg-warning">Bootstrap</span>
                                        <span class="badge bg-success">Wix</span>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <img class="btn-md" src="assets/images/card-image.png" alt="" style="border-radius:50%;">
                                </div>         
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong> 5.2K </strong></h2>                    
                                    <p><small>Fans</small></p>
                                    <button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Like  </button>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong>1.4K</strong></h2>                    
                                    <p><small>Following</small></p>
                                    <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong>3.8K</strong></h2>                    
                                    <p><small>Followers</small></p>
                                    <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>-->
<!--        <hr class="my-5"> 
        <h3 class="headalign">User Profile Card with Left Photo</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="card card-inverse" style="background-color: #fff; border-color: #333;">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <img src="http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1.jpg" alt="" class="btn-md" style="height: 216px !important;">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h2 class="text-left" style="color: black;">{{p.user_fullname}}</h2>
                                    <h4 style="color: black;">{{p.user_designation}}</h4>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="color: black;"><b>Member&nbsp;ID </b></td>
                                                <td style="color: black;"><a onclick="return goto_profile(1)" class="c-base-1"><b> #000{{p.user_profile_id}}</b></a></td>
                                            </tr>
                                            <tr>
                                                <td style="color: black;" ><b>Age</b></td>
                                                <td style="color: black;" >{{p.age}}</td>
                                                <td style="color: black;" ><b>Height</b></td>
                                                <td style="color: black;" >{{p.user_height}} Feet</td>
                                            </tr>                                    
                                            <tr>
                                                <td style="color: black;" ><b>Mother Tongue</b></td>
                                                <td style="color: black;">{{p.user_mother_tongue}}</td>
                                                <td style="color: black;"><b>Marital Status</b></td>
                                                <td style="color: black;" >{{p.user_marital_status}}</td>
                                            </tr>
                                            <tr>
                                                <td style="color: black;"><b>Location</b></td>
                                                <td style="color: black;">Nidwalden, Switzerland</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                                         
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>-->
<!--        <hr class="my-5">  
        <h3 class="headalign">User Profile Card with White Background</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <img src="assets/images/card-image.png" alt="" class="btn-md">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="card-title">Name: Stffanie Osterich</h2>
                                    <p class="card-text"><strong>Profile: </strong> Web Developer </p>
                                    <p class="card-text"><strong>Skills: </strong> Theme, plugin and website development </p>
                                    <p><strong>Platform: </strong>
                                        <span class="badge bg-primary">WordPress</span> 
                                        <span class="badge bg-info">Weebly</span>
                                        <span class="badge bg-warning">Bootstrap</span>
                                        <span class="badge bg-success">Wix</span>
                                    </p>
                                </div>         
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong> 5.2K </strong></h2>                    
                                    <p><small>Fans</small></p>
                                    <button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Like  </button>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong>1.4K</strong></h2>                    
                                    <p><small>Following</small></p>
                                    <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong>3.8K</strong></h2>                    
                                    <p><small>Followers</small></p>
                                    <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <hr class="my-5">  
        <h3 class="headalign">User Profile Card with Primary Background</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-inverse card-primary mb-3 text-center">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <img src="assets/images/card-image.png" alt="" class="btn-md">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h2 class="card-title">Name: Stffanie Osterich</h2>
                                    <p class="card-text"><strong>Profile: </strong> Web Developer </p>
                                    <p class="card-text"><strong>Skills: </strong> Theme, plugin and website development </p>
                                    <p><strong>Platform: </strong>
                                        <span class="badge bg-primary">WordPress</span> 
                                        <span class="badge bg-info">Weebly</span>
                                        <span class="badge bg-warning">Bootstrap</span>
                                        <span class="badge bg-success">Wix</span>
                                    </p>
                                </div>         
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong> 5.2K </strong></h2>                    
                                    <p><small>Fans</small></p>
                                    <button class="btn btn-secondary btn-block btn-md"><span class="fa fa-facebook-square"></span> Like  </button>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong>1.4K</strong></h2>                    
                                    <p><small>Following</small></p>
                                    <button class="btn btn-secondary btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h2><strong>3.8K</strong></h2>                    
                                    <p><small>Followers</small></p>
                                    <button type="button" class="btn btn-secondary btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <hr class="my-5"> 
        <h3 class="headalign">User Profile Card Two Columns</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-inverse" style="background-color: #808080; border-color: #808080;">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <img src="assets/images/card-image.png" alt="" class="btn-md">
                                    <h2 class="card-title">Name: Stffanie Osterich</h2>
                                    <p class="card-text"><strong>Profile: </strong> Web Developer </p>
                                    <p class="card-text"><strong>Skills: </strong> Theme, plugin and website development </p>
                                    <p class="card-text"><strong>Hobby: </strong> Watching movies, building websites and blogs for friends </p>
                                    <p><strong>Platform: </strong>
                                        <span class="badge bg-primary">WordPress</span> 
                                        <span class="badge bg-info">Weebly</span>
                                        <span class="badge bg-warning">Bootstrap</span>
                                        <span class="badge bg-success">Wix</span>
                                        <span class="badge bg-primary">Squarespace</span>
                                        <span class="badge bg-info">Joomla</span>
                                        <span class="badge bg-success">Drupal</span>                    
                                    </p>
                                </div>         
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="card card-inverse card-info mb-3 text-center">
                                        <div class="card-block">
                                            <h2><strong> 5.2K </strong></h2>                    
                                            <p><small>Fans</small></p>
                                            <button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Like  </button>
                                        </div></div>
                                    <div class="card card-inverse card-warning mb-3 text-center">
                                        <div class="card-block">
                                            <h2><strong>1.4K</strong></h2>                    
                                            <p><small>Following</small></p>
                                            <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
                                        </div></div>
                                    <div class="card card-inverse card-success mb-3 text-center">
                                        <div class="card-block">
                                            <h2><strong>3.8K</strong></h2>                    
                                            <p><small>Followers</small></p>
                                            <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>  
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <hr class="my-5">      -->
<!-- End Content -->              

<!-- Scripts -->
<!--        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>-->