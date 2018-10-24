    <!-- page content -->
    <div class="right_col" role="main">
        <div class="container page_title" style="margin-top: 0px;margin-bottom: 0px;" >
            <div id="err_message"></div>
            <div class="row x_title">
                <div class="w3-padding">
                    <h3><i class="fa fa-cubes"></i> All Member List</h3>
                </div>
            </div>
            <div class="row x_title" style=" margin-top: 5px;">
                <div id="messageinfo"></div>
                <div class="w3-padding-small">
                    <h4></h4>                
                </div>
                <div class="w3-col l12 w3-margin-bottom">
                     <form method="GET" action="#membertable">
                       <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="search_byID" placeholder="search by ID" value="<?php if(isset($_GET['search_byID']) && $_GET['search_byID']!=''){ echo $_GET['search_byID'];} ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-3">
                       <div class="form-group">
                          <input type="text" name="search_byName" placeholder="search by Name" value="<?php if(isset($_GET['search_byName']) && $_GET['search_byName']!=''){ echo $_GET['search_byName'];} ?>" class="form-control" id="firstName" >
                        </div>
                     </div> 
                     <div class="col-md-2">
                       <select class="w3-input w3-border" name="sortbyGender">
                    <option value="0">Any</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                     </div>

                <button class = "btn btn-primary" type="submit">
                 <i class="fa fa-search"></i> Search
               </button>
               <a  href="<?php echo base_url(); ?>admin/all_users/downloadAllUsers" class = "btn btn-primary w3-right" >
                 <i class="fa fa-download"></i> Download Csv
               </a>
             </form>
             
                </div>
            </div>
             <div class="row clearfix" style=" margin-top: 5px;">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <table class="table table-responsive" id="tab_logic">
                        <thead>
                            <tr class="theme_bg">
                                 <th class="w3-center"><span>User Photo</span></th>
                                <th class="w3-center"><span>User Name</span></th>
                                    <th class="w3-center"><span>Registration Date</span></th>
                                    <th class="w3-center"><span>City</span></th>
                                    
                                    <th class="w3-center"><span>Marital Status</span></th>
                                    <th class="w3-center"><span>Action</span></th>
                            </tr>
                        </thead>
                             <tbody>      
                            <?php 
                            if($all_users!='' && $all_users['status']=='200'){
                                     $count=1;
                                foreach ($all_users['status_message'] as $key) {  
                                ?>
                                <tr>
                              <td>
                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="">
                              </td>
                              <td class="w3-center">
                                 
                                 <span class=""> <?php echo $key['user_fullname'];?><br><?php echo $key['user_gender']; ?></span>
                                 </td>
                              <td class="w3-center"><?php echo $key['user_reg_date']; ?></td>
                              <td class="w3-center"><?php echo $key['user_city']; ?></td>
                             <!--  <td class="w3-center"><?php echo $key['user_email']; ?></td> -->
                                  <td class="w3-center"><?php echo $key['user_marital_status']; ?></td>
                               <td class="w3-center">
                                <?php if($key['user_status']=='1') 
                                { ?>
                                    <a class="btn w3-padding-small" onclick="deactiveuser(<?php echo $key['user_id']; ?>)" title="Deactive User"><i class="w3-text-green w3-large fa fa-minus-circle"></i></a>
                                        <a class="btn w3-padding-small" onclick="deletUserDetails(<?php echo $key['user_id']; ?>)" title="Delete Member">
                                            <i class="w3-text-red w3-large fa fa-trash"></i>
                                        </a>
                              <?php } else
                                { ?>
                                 <a class="btn w3-padding-small" onclick="activeuser(<?php echo $key['user_id']; ?>)" title="Activate User"><i class="w3-text-green w3-large fa fa-check-circle"></i></a>
                                    <!--  <a class="btn w3-padding-small" onclick="deactiveuser(<?php echo $key['user_id']; ?>)" title="Deactive User"><i class="w3-text-green w3-large fa fa-minus-circle"></i></a> -->
                                        <a class="btn w3-padding-small" onclick="deletUserDetails(<?php echo $key['user_id']; ?>)" title="Delete Member">
                                            <i class="w3-text-red w3-large fa fa-trash"></i>
                                        </a>
                                        <?php } ?>
                                    </td>
                            </tr>
                            <?php 
                            $count++;
                          }
                        }
                        else{
                          ?>
                          <tr>
                            <td colspan="8" class="w3-center">
                              <span> No User Found </span>
                            </td>              
                          </tr>
                          <?php
                        }
                     ?>
                    </tbody>
                    </table>
                </div>
            </div>
             </div>
    </div>
    <!-------script for delete user-->
                            <script type="text/javascript">
                                function deletUserDetails(user_id) {
                                    $.confirm({
                                        title: '<h4 class="w3-text-red"><i class="fa fa-warning"></i> Are you sure you want to delete this Member?</h4>',
                                        content: '',
                                        type: 'red',
                                        buttons: {
                                            confirm: function () {
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>admin/all_users/deleteUserDetails",
                                                    type: "POST",
                                                    data: {
                                                        user_id: user_id
                                                    },
                                                    cache: false,
                                                    success: function (data) {
                                                      // alert(data);
                                                        $('#messageinfo').html(data);
                                                    }
                                                });
                                            },
                                            cancel: function () {
                                            }
                                        }
                                    });
                                }
                            </script>
      <!-- function to deactive user  -->
        <script type="text/javascript">
                                function deactiveuser(user_id) {
                                   $.confirm({
                                        title: '<h4 class="w3-text-red"><i class="fa fa-warning"></i> Are you sure you want to Deactivate this member?</h4>',
                                        content: '',
                                        type: 'red',
                                        buttons: {
                                             confirm: function () {
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>admin/all_users/deactiveuser",
                                                    type: "POST",
                                                    data: {
                                                        user_id: user_id
                                                    },
                                                    cache: false,
                                                    success: function (data) {
                                                       //alert(data);
                                                        $('#messageinfo').html(data);
                                                    }
                                                });
                                            },
                                            cancel: function () {
                                            }
                                        }
                                    });
                                }
                            </script> 

          <!-- function to active user  -->
        <script type="text/javascript">
                                function activeuser(user_id) {
                                  $.confirm({
                                    title: '<h4 class="w3-text-red"><i class="fa fa-warning"></i> Are you sure you want to Activate this Member?</h4>',
                                        content: '',
                                        type: 'red',
                                        buttons: {
                                        confirm: function () {
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>admin/all_users/activeuser",
                                                    type: "POST",
                                                    data: {
                                                        user_id: user_id
                                                    },
                                                    cache: false,
                                                    success: function (data) {
                                                      // alert(data);
                                                        $('#messageinfo').html(data);
                                                    }
                                                });
                                            },
                                            
                                            cancel: function () {
                                            }
                                        }
                                    });
                                }
                            </script> 