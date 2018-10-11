<!-- page content -->
<div class="right_col" role="main">
    <div class="container page_title" style="margin-top: 0px;margin-bottom: 0px;" ng-app="allPOApp" ng-controller="allPOAppController">
        <div id="err_message"></div>
        <div class="row x_title">
            <div class="w3-padding">
                <h3><i class="fa fa-cubes"></i> All Member List</h3>
            </div>
        </div>
        <div class="row x_title" style=" margin-top: 5px;">
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
         </form>
            </div>
        </div>