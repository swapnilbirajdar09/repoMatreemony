
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top w3-black">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                 
                </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons fa fa-users"></i>
                  </div>
                  <p class="card-category">Total Members</p>
                  <h3 class="card-title">100</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger fa fa-chevron-right"></i>
                    <a href="<?php echo base_url(); ?>admin/admin_allusers">View members list</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons fa fa-mars"></i>
                  </div>
                  <p class="card-category">Total Male(s)</p>
                  <h3 class="card-title">56</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger fa fa-chevron-right"></i>
                    <a href="<?php echo base_url(); ?>admin/admin_allusers?redirect=true&gender=male">View male(s) list</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons fa fa-venus"></i>
                  </div>
                  <p class="card-category">Total Female(s)</p>
                  <h3 class="card-title">44</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger fa fa-chevron-right"></i>
                    <a href="<?php echo base_url(); ?>admin/admin_allusers?redirect=true&gender=female">View female(s) list</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Add graphs in page module commented -->
          <!-- <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Email Subscriptions</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Completed Tasks</h4>
                  <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- membership package add/update/delete form -->
          <hr>
          <h3>Membership Packages</h3>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <div class="card">
                <div class="col-md-12 w3-padding">
                  <center><img src="<?php echo base_url(); ?>assets/images/mem_packages/plan_1.png" class="img img-responsive" style="width: auto;height: 230px;"></center>
                </div>
                <div class="col-md-12 w3-padding theme_bg w3-text-white">
                  <center>
                    <h3><b>BASIC</b></h3>
                </center>
                </div>
                <div class="col-md-12 w3-padding">
                  <center>
                    <h2><i class="fa fa-inr"></i> 1000</h2>
                </center>
                </div>
                <div class="col-md-12 w3-padding">
                  <center>
                    <ul style="list-style: none;padding:0">
                      <li class="w3-padding">
                        <span class="w3-large">Period:</span> <b><span class="w3-large">Monthly</span></b>
                      </li>
                      <li class="w3-padding">
                        <span class="w3-large">Express Interests:</span> <b><span class="w3-large">5</span></b>
                      </li>
                    </ul>
                </center>
                </div>
                <div class="col-mg-12 w3-padding">
                  <a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>admin/dashboard/edit_package/basic"><i class="fa fa-edit"></i> Edit Package</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="col-md-12 w3-padding">
                  <center><img src="<?php echo base_url(); ?>assets/images/mem_packages/plan_4.png" class="img img-responsive" style="width: auto;height: 230px;"></center>
                </div>
                <div class="col-md-12 w3-padding theme_bg w3-text-white">
                  <center>
                    <h3><b>GOLD</b></h3>
                </center>
                </div>
                <div class="col-md-12 w3-padding">
                  <center>
                    <h2><i class="fa fa-inr"></i> 2500</h2>
                </center>
                </div>
                <div class="col-md-12 w3-padding">
                  <center>
                    <ul style="list-style: none;padding:0">
                      <li class="w3-padding">
                        <span class="w3-large">Period:</span> <b><span class="w3-large">Yearly</span></b>
                      </li>
                      <li class="w3-padding">
                        <span class="w3-large">Express Interests:</span> <b><span class="w3-large">4</span></b>
                      </li>
                    </ul>
                </center>
                </div>
                <div class="col-mg-12 w3-padding">
                  <a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>admin/dashboard/edit_package/gold"><i class="fa fa-edit"></i> Edit Package</a>
                </div>
              </div>
            </div>
          </div>        

        </div>
      </div>
     
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>