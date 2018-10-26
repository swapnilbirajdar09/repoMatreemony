<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0">Active Members</h2>
            </div>
        </div>
    </div>
</section>
<section class="slice sct-color-1">
    <div class="container">
        <div class="row" ng-app="advanceSearchProfileApp" ng-controller="advanceSearchProfileController">
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="">
                        <div class="w3-card-2">
                            <div class="card-title b-xs-bottom">
                                <h3 class="heading heading-sm text-uppercase">Advanced Search</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-default" id="filter_form" data-toggle="validator" role="form">
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
                                                <label for="" class="text-uppercase w3-medium">Caste</label>
                                                <select name="religion" id="religion" class="w3-input selectpicker s_religion" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" >
                                                    <option value="" class="w3-light-grey" selected>Select your Caste*</option>
                                                    <option value="Hindu Mahar">Hindu Mahar</option>    									
                                                    <option value="Mahayana">Mahayana</option>    									
                                                    <option value="Nichiren Buddhism">Nichiren Buddhism</option>    									
                                                    <option value="Pure Land Buddhism">Pure Land Buddhism</option>    									
                                                    <option value="Tantrayana (Vajrayana Tibetan)">Tantrayana (Vajrayana Tibetan)</option>    									
                                                    <option value="Theravada (Hinayana)">Theravada (Hinayana)</option>    									
                                                    <option value="Tendai Buddhism (Japanese)">Tendai Buddhism (Japanese)</option>    									
                                                    <option value="Zen Buddhism (China)">Zen Buddhism (China)</option>    									
                                                    <option value="Others">Others</option>
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
                                                    <option value=">Awaiting divorced / Legally separated">Awaiting divorced / Legally separated</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Profile Id</label>
                                                <input type="text" class="w3-input" name="filter_member_id" ng-model="filter_member_id" id="filter_member_id" value="" placeholder="Enter Profile Id">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                   

                                    <div class="row">
                                        <div class="col-sm-12">                                                                                        
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Country</label>
                                                <select name="country" id="country" ng-model="country" ng-change="getCountryState()" class="w3-input selectpicker s_country" data-placeholder="Choose a country" tabindex="2" data-hide-disabled="true">
                                                    <option value="">Choose one</option>
                                                    <?php
                                                    for ($i = 0; $i < count($country); $i++) {         ?>
                                                        <option value="<?php echo $country[$i]['name'].'/'.$country[$i]['id']; ?>">
                                                            <?php echo $country[$i]['name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">State</label>
                                                <select class="w3-input selectpicker s_state" ng-change="getStateCity()" ng-model="state" id="state" name="state">
                                                    <option value="">Choose A Country First</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">City</label>
                                                <select class="w3-input selectpicker s_city" id="city" name="city">
                                                    <option value="">Choose A State First</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Min Height (Feet)</label>
                                                <input type="text" class="w3-input height_mask" name="min_height" min="0" step="0.01" id="min_height" value="">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Max Height (Feet)</label>
                                                <input type="text" class="w3-input height_mask" name="max_height" step="0.01" id="max_height" max="8.00" value="">
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Weight From</label>
                                                <input type="text" class="w3-input height_mask" name="from_weight" min="0" step="0.01" id="from_weight" value="">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Weight To</label>
                                                <input type="text" class="w3-input height_mask" name="to_weight" step="0.01" id="to_weight" min="0" value="">
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Salary From (Annual)</label>
                                                <input type="text" class="w3-input height_mask" name="from_salary" min="0" step="0.01" id="from_salary" value="">
                                                <div class="help-block with-errors">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Salary To (Annual)</label>
                                                <input type="text" class="w3-input height_mask" name="to_salary" step="0.01" id="to_salary" min="0" value="">
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Education</label>
                                                <select name="education" id="education" class="w3-input selectpicker s_religion" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" >
                                                    <option value="" class="w3-light-grey" selected>Select One*</option>
                                                    <?php
                                                    for ($i = 0; $i < count($educations); $i++) {
                                                        ?>
                                                        <option value="<?php echo $educations[$i]['edu_name']; ?>">
                                                            <?php echo $educations[$i]['edu_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Occupation</label>
                                                <select name="occupation" id="occupation" class="w3-input selectpicker s_religion" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" >
                                                    <option value="" class="w3-light-grey" selected>Select One*</option>
                                                    <?php
                                                    for ($i = 0; $i < count($occupations); $i++) {
                                                        ?>
                                                        <option value="<?php echo $occupations[$i]['occupation_name']; ?>">
                                                            <?php echo $occupations[$i]['occupation_name']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group has-feedback">
                                                <label for="" class="text-uppercase w3-medium">Working Field</label>
                                                <select name="working_field" id="working_field" class="w3-input selectpicker s_religion" data-placeholder="Choose a religion" tabindex="2" data-hide-disabled="true" >
                                                    <option value="" class="w3-light-grey" selected>Select One*</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Own Business">Own Business</option>
                                                    <option value="Private Sector">Private Sector</option>
                                                    <option value="Public Sector">Public Sector</option>
                                                    <option value="Any">Any</option>
                                                </select>
                                                <div class="help-block with-errors">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" ng-click="getAllUserProfilesByAdvanceSearch();">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--            <div class="col-lg-4 size-sm-btn mb-4">
                            <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" onclick="adv_search()">Advanced Search</button>
                        </div>-->

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
<script src="<?php echo base_url(); ?>assets/js/module/user/search/advancesearch.js"></script>
