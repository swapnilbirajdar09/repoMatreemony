<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<hr>
<div class="container bootstrap snippet">
    <div class="row">
       <div class="col-lg-12" style="margin-left:200px;">
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
         </form>
               </div>
        <div class="col-lg-12">

            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix" id="membertable">

                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th class="w3-center"><span>User</span></th>
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
                          
                          <td class="w3-center">
                             <img src="https://bootdey.com/img/Content/user_3.jpg" alt="">
                             <span class="user-subhead w3-left"> <?php echo $key['user_fullname'];?></span><br>
                              <span class="user-subhead w3-left"> <?php echo $key['user_gender']; ?></span>
                      </td>
                          <td class="w3-center"><?php echo $key['user_registraion_date']; ?></td>
                          <td class="w3-center"><?php echo $key['user_city']; ?></td>
                         <!--  <td class="w3-center"><?php echo $key['user_email']; ?></td> -->
                              <td class="w3-center"><?php echo $key['user_marital_status']; ?></td>
                           <td class="w3-center">
                             <a class="btn w3-padding-small" onclick="activeuser(<?php echo $key['user_id']; ?>)" title="Approve request"><i class="w3-text-green w3-large fa fa-check-circle"></i></a>
                                 <a class="btn w3-padding-small" onclick="deactiveuser(<?php echo $key['user_id']; ?>)" title="Approve request"><i class="w3-text-green w3-large fa fa-minus-circle"></i></a>
                                    <a class="btn w3-padding-small" onclick="deletUserDetails(<?php echo $key['user_id']; ?>)" title="Delete Member">
                                        <i class="w3-text-red w3-large fa fa-trash"></i>
                                    </a>
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
    </div>
</div>
 <!-------script for delete user-->
                        <script type="text/javascript">
                            function deletUserDetails(user_id) {
                                $.confirm({
                                    title: '<h4 class="w3-text-red"><i class="fa fa-warning"></i> Are you sure you want to Delete this user?</h4>',
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
                              
                              // confirm: function () {
                                            $.ajax({
                                                url: "<?php echo base_url(); ?>admin/all_users/deactiveuser",
                                                type: "POST",
                                                data: {
                                                    user_id: user_id
                                                },
                                                cache: false,
                                                success: function (data) {
                                                   alert(data);
                                                    $('#messageinfo').html(data);
                                                }
                                            });
                                        // },
                                // $.confirm({
                                //     title: '<h4 class="w3-text-red"><i class="fa fa-warning"></i> Are you sure you want to Delete this user?</h4>',
                                //     content: '',
                                //     type: 'red',
                                //     buttons: {
                                        
                                //         cancel: function () {
                                //         }
                                //     }
                                // });
                            }
                        </script> 
                        <!-- function to active user  -->
    <script type="text/javascript">
                            function activeuser(user_id) {
                              
                              // confirm: function () {
                                            $.ajax({
                                                url: "<?php echo base_url(); ?>admin/all_users/activeuser",
                                                type: "POST",
                                                data: {
                                                    user_id: user_id
                                                },
                                                cache: false,
                                                success: function (data) {
                                                   alert(data);
                                                    $('#messageinfo').html(data);
                                                }
                                            });
                                        // },
                                // $.confirm({
                                //     title: '<h4 class="w3-text-red"><i class="fa fa-warning"></i> Are you sure you want to Delete this user?</h4>',
                                //     content: '',
                                //     type: 'red',
                                //     buttons: {
                                        
                                //         cancel: function () {
                                //         }
                                //     }
                                // });
                            }
                        </script> 