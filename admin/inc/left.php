  <div id="nav"> 
    <!--logo start-->
    <div class="profile">
      <div class="logo"><a href=""><img style="width:120px;" src="../asset/images/logo.gif" alt=""></a></div>
    </div><!--logo end--> 
    
    <!--navigation start-->
    <ul class="navigation">
<!--       <li><a class="active" href="index.html"><i class="fa fa-home"></i><span>Vendors</span></a></li>
      <li class="sub"> <a href="#"><i class="fa fa-smile-o"></i><span>UI Elements</span></a>
 -->
<?php
  $currFile = basename($_SERVER['PHP_SELF']); 
 ?>

 <li class="sub"> <a <?php if($currFile == 'dashboard.php' ) echo 'class="active"'; ?> href="dashboard.php"><i class="fa fa-sitemap"></i><span>Dashboard</span></a>
 <li class="sub"> <a <?php if($currFile == 'queries.php' ) echo 'class="active"'; ?> href="queries.php"><i class="fa fa-sitemap"></i><span>Queries</span></a>


<?php /*
<!-- <li class="sub"> <a <?php if($currFile == 'vendors.php' ||  $currFile == 'vendordeals.php' ||  $currFile == 'editvendor.php') echo 'class="active"'; ?> href="vendors.php"><i class="fa fa-briefcase"></i><span>Vendors</span></a>
<li class="sub"> <a <?php if($currFile == 'events.php' || $currFile == 'editevent.php') echo 'class="active"'; ?> href="events.php"><i class="fa fa-calendar-o"></i><span>Events</span></a>
<li class="sub"> <a <?php if($currFile == 'deals.php') echo 'class="active"'; ?> href="deals.php"><i class="fa fa-trophy"></i><span>Deals</span></a>
<li class="sub"> <a <?php if($currFile == 'promovendors.php') echo 'class="active"'; ?> href="promovendors.php"><i class="fa fa-bullhorn"></i><span>Promo Vendors</span></a>
<li class="sub"> <a <?php if($currFile == 'subscribers.php') echo 'class="active"'; ?> href="subscribers.php"><i class="fa fa-bullhorn"></i><span>Subscribers</span></a>
<li class="sub"> <a <?php if($currFile == 'queries.php') echo 'class="active"'; ?> href="queries.php"><i class="fa fa-bullhorn"></i><span>Queries</span></a>
 --> */ ?>
  <!--         <ul class="navigation-sub">
          <li><a href="buttons.html"><i class="fa fa-power-off"></i><span>Button</span></a></li>
          <li><a href="grids.html"><i class="fa fa-columns"></i><span>Grid</span></a></li>
          <li><a href="icons.html"><i class="fa fa-flag"></i><span>Icon</span></a></li>
          <li><a href="tab-accordions.html"><i class="fa fa-plus-square-o"></i><span>Tab / Accordion</span></a></li>
          <li><a href="nestable.html"><i class="fa  fa-arrow-circle-o-down"></i><span>Nestable</span></a></li>
          <li><a href="slider.html"><i class="fa fa-font"></i><span>Slider</span></a></li>
          <li><a href="timeline.html"><i class="fa fa-filter"></i><span>Timeline</span></a></li>
          <li><a href="gallery.html"><i class="fa fa-picture-o"></i><span>Gallery</span></a></li>
        </ul>
 -->      </li>
<!--       <li class="sub"><a href="#"><i class="fa fa-list-alt"></i><span>Forms</span></a>
        <ul class="navigation-sub">
          <li><a href="form-components.html"><i class="fa fa-table"></i><span>Components</span></a></li>
          <li><a href="form-validation.html"><i class="fa fa-leaf"></i><span>Validation</span></a></li>
          <li><a href="form-wizard.html"><i class="fa fa-th"></i><span>Wizard</span></a></li>
          <li><a href="input-mask.html"><i class="fa fa-laptop"></i><span>Input Mask</span></a></li>
          <li><a href="muliti-upload.html"><i class="fa fa-files-o"></i><span>Multi Upload</span></a></li>
        </ul>
      </li> -->
<!--       <li class="sub"><a href="#"><i class="fa fa-table"></i><span>Table</span></a>
        <ul class="navigation-sub">
          <li><a href="basic-tables.html"><i class="fa fa-table"></i><span>Basic Table</span></a></li>
          <li><a href="data-tables.html"><i class="fa fa-columns"></i><span>Data Table</span></a></li>
        </ul>
      </li>
      <li><a href="fullcalendar.html"><i class="fa fa-calendar nav-icon"></i><span>Calendar</span></a></li>
      <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i><span>Charts</span></a></li>
      <li class="sub"><a href="#"><i class="fa fa-folder-open-o"></i><span>Pages</span></a>
        <ul class="navigation-sub">
          <li><a href="404-error.html"><i class="fa fa-warning"></i><span>404 Error</span></a></li>
          <li><a href="500-error.html"><i class="fa fa-warning"></i><span>500 Error</span></a></li>
          <li><a href="balnk-page.html"><i class="fa fa-copy"></i><span>Blank Page</span></a></li>
          <li><a href="profile.html"><i class="fa fa-user"></i><span>Profile</span></a></li>
          <li><a href="login.html"><i class="fa fa-sign-out"></i><span>Login</span></a></li>
          <li><a href="map.html"><i class="fa fa-map-marker"></i><span>Map</span></a></li>
        </ul>
      </li> -->
    </ul><!--navigation end--> 
  </div><!--Left navbar end--> 


  <div id="confirm" class="modal fade" style="z-index:99999!important">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->



      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
  
      <div class="modal-body">
          <p>Are you sure?</p>
      </div>
      
      <!-- dialog buttons -->
      <div class="modal-footer">

      <img src="images/spinner.gif" id="del_spinner" style="display:none;">
      <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete" >Yes</button>
      <button type="button" data-dismiss="modal" class="btn">No</button>
 
      </div>
    </div>
  </div>
</div>

<div id="query_detail" class="modal fade" style="z-index:99999!important">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->



      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Query Details</h4>
      </div>
  
      <div class="modal-body" id="detail_query_body">
<!--         <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Parent Name</th>
                    <td id="parent_name"></td>
                  </tr>
                  <tr>
                    <th>Child Name</th>
                    <td id="child_name"></td>
                  </tr>
                  <tr>
                    <th>Date Of Birth</th>
                    <td id="dob"></td>
                  </tr>
                  <tr>
                    <th>Age</th>
                    <td id="age"></td>
                  </tr>
                  <tr id="filename">
                    <th>File Name</th>
                    <td id="file_name"></td>
                  </tr>
                  <tr>
                    <th>Branch Office</th>
                    <td id="branch_office"></td>
                  </tr>
                  <tr>
                    <th>Strat Time</th>
                    <td id="start_time"></td>
                  </tr>
                  <tr>
                    <th>End Time</th>
                    <td id="end_time"></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td id="email"></td>
                  </tr>
                  <tr>
                    <th>Phone</th>
                    <td id="phone"></td>
                  </tr>
                  <tr>
                    <th>Refer By</th>
                    <td id="refer_by"></td>
                  </tr>
                  <tr>
                    <th>Date Created</th>
                    <td id="date_created"></td>
                  </tr>
                  <tr>
                    <th style="vertical-align: top;">Services</th>
                    <td id="services"></td>
                  </tr>

                </thead>
                <tbody id="detail">

                </tbody>
              </table> -->

      </div>
      
      <!-- dialog buttons -->
      <div class="modal-footer">

      <img src="images/spinner.gif" id="del_spinner" style="display:none;">
      <button type="button" data-dismiss="modal" class="btn">No</button>
 
      </div>
    </div>
  </div>
</div>
