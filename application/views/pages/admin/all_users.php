<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
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
                                       
                                            <i class="w3-text-green w3-large fa fa-edit"></i>
                                        </a>                   
                                      
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