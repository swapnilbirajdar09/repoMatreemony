<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0">Active Profiles</h2>
            </div>
        </div>
    </div>
</section>
<section class="slice sct-color-1">
    <div class="container">
        <div class="row" ng-app="regularSearchProfileApp" ng-controller="regularSearchProfileController">
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="">
                        <div class="w3-card-2">
                            <div class="card-title b-xs-bottom">
                                <h3 class="heading heading-sm text-uppercase">Quick Search</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-default" id="quickSearchFilter_form" name="quickSearchFilter_form" data-toggle="validator" role="form">                                  
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium" >Age From</label>
                                                <input type="number" class="w3-input" min="0" name="filter_aged_from" id="filter_aged_from" value="">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">To</label>
                                                <input type="number" class="w3-input" min="0" name="filter_aged_to" id="filter_aged_to" value="">
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Religion</label>
                                                <select name="religion" id="religion" class="w3-input selectpicker s_religion" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" >
                                                    <option value=""><b>Choose one</b></option>
                                                    <option value="Judaism" >Judaism</option>
                                                    <option value="Cristianity" >Cristianity</option>
                                                    <option value="Hinduism" >Hinduism</option>
                                                    <option value="Buddhism" >Buddhism</option>
                                                    <option value="Atheism" >Atheism</option>
                                                    <option value="Islam" >Islam</option>
                                                    <option value="Sikhism" >Sikhism</option>
                                                    <option value="Jain" >Jain</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>                                                                                                                       
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Mother Tongue</label>
                                                <select name="language" id="language" class="w3-input selectpicker" data-placeholder="Choose a language" tabindex="2" data-hide-disabled="true" >
                                                    <option value=""><b>Choose one</b></option>
                                                    <option value="Marathi" >Marathi</option>
                                                    <option value="Bengali" >Bengali</option>
                                                    <option value="German" >German</option>
                                                    <option value="English" >English</option>
                                                    <option value="Hindi" >Hindi</option>
                                                    <option value="Urdu" >Urdu</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Marital Status</label>
                                                <select name="maritalStatus" id="maritalStatus" class="w3-input selectpicker" data-placeholder="Choose a language" tabindex="2" data-hide-disabled="true" >
                                                    <option value=""><b>Choose one</b></option>
                                                    <option value="Never Married" >Never Married</option>
                                                    <option value="Divorced" >Divorced</option>
                                                    <option value="Widow" >Widow</option>
                                                    <option value="Widower" >Widower</option>
                                                    <option value=">Awaiting divorced / Legally separated" >Awaiting divorced / Legally separated</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" ng-click="getAllUserProfilesByRegularSearch();">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <input type="hidden" id="member_type" value="">                
                <div ng-show="finderloader" class="w3-center">
                    <center>
                        <i class="w3-center fa fa-refresh fa-5x fa-spin"></i>
                        <p>Please Wait...</p>
                    </center>
                </div>
                <!-----------------------------this Div is for all users profiles---------------------------------->
                <div class="block-wrapper" id="result">
                    <!-----------------------------this Div is for single user profile---------------------------------->
                    <div class="block block--style-3 list z-depth-1-top" ng-if="profiles != 500" id="block_1" ng-repeat="p in profiles| filter:filter_member_id">
                        <div class="block-image">
                            <a onclick="goto_profile(p.user_profile_id)">
                                <div class="listing-image" style="background-image: url(http://activeitzone.com/demo/matrimonial/uploads/profile_image/profile_1.jpg)"></div>
                            </a>
                        </div>
                        <div class="block-title-wrapper">
                            <h3 class="heading heading-5 strong-500 mt-1">
                                <a onclick="goto_profile(p.user_profile_id)" class="c-base-1"> {{p.user_fullname}}</a>
                            </h3>
                            <h4 class="heading heading-xs c-gray-light text-uppercase strong-400"> {{p.user_designation}}</h4>
                            <table class="mb-2" style="font-size: 12px;">
                                <tbody>
                                    <tr>
                                        <td height="30" style="padding-left: 5px;" class="font-dark"><b>Member ID</b></td>
                                        <td height="30" style="padding-left: 5px;" class="font-dark" colspan="3"><a onclick="return goto_profile(1)" class="c-base-1"><b>#000{{p.user_profile_id}}</b></a></td>
                                    </tr>
                                    <tr>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Age</b></td>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark">{{p.age}}</td>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Height</b></td>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark">{{p.user_height}} Feet</td>
                                    </tr>                                    
                                    <tr>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Mother Tongue</b></td>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark">{{p.user_mother_tongue}}</td>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Marital Status</b></td>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark">{{p.user_marital_status}}</td>
                                    </tr>
                                    <tr>
                                        <td width="120" height="30" style="padding-left: 5px;" class="font-dark"><b>Location</b></td>
                                        <td colspan="3" height="30" style="padding-left: 5px;" class="font-dark">Nidwalden, Switzerland</td>
                                    </tr>
                                </tbody>
                            </table
                            <div class="row align-items-center w3-padding">
                                <div class="col-sm-12 text-center">
                                    <ul class="inline-links inline-links--style-3">
                                        <li class="listing-hover">
                                            <a onclick="goto_profile(p.user_profile_id)">
                                                <i class="fa fa-id-card"></i>Full Profile</a>
                                        </li>
                                        <li class="listing-hover">
                                            <a id="interest_a_1" onclick="confirm_interest(p.user_profile_id)" style="">
                                                <span id="interest_1" class=""><i class="fa fa-heart"></i> Add To Favourite</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-----------------------------this Div is for single user profile---------------------------------->
                        <div class=" w3-center w3-padding list z-depth-1-top" ng-if="profiles == 500" id="block_1">
                            <div class="w3-padding w3-margin-top">
                                <p class="w3-center w3-medium w3-text-black"> No Match Found..! </p>
                            </div>
                        </div>
                        <!-----------------------------this Div is for single user profile---------------------------------->

                    </div>

                </div>
                <!-----------------------------this Div is for all users profiles---------------------------------->
                <div id="pagination" style="float: right;">
                    <!-- Loads Ajax Pagination Links -->
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* xs */
    .size-sm {
        display: none;
    }
    .size-sm-btn {
        display: block;
    }
    /* sm */
    @media (min-width: 768px) {
        .size-sm {
            display: none;
        }
        .size-sm-btn {
            display: block;
        }
    }
    /* md */
    @media (min-width: 992px) {
        .size-sm {
            display: block;
        }
        .size-sm-btn {
            display: none;
        }
    }
    /* lg */
    @media (min-width: 1200px) {
        .size-sm {
            display: block;
        }
        .size-sm-btn {
            display: none;
        }
    }
</style>
<script src="<?php echo base_url(); ?>assets/js/module/user/search/regularsearch.js"></script>