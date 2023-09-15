<?php

include('assets/header.php');
session_start();
if(!isset($_SESSION['user_type']) && $_SESSION['user_type'] != '0')
{
    header("phpfiles/authenticate.php");
}
elseif(!isset($_SESSION['user_type']) && $_SESSION['user_type'] != '1')
{
    header("phpfiles/authenticate.php");
}
// elseif(isset($_SESSION["cstatus"]) && $_SESSION["cstatus"] == 'suspended')
// {
//     >
//     <script>alert("true")</script>
//     <?php 
// }

?>
<!DOCTYPE html>


<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/card-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/tour/tour.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>

    <link rel="stylesheet" type="text/css" href="assets/datatable/DataTables-1.13.1/css/jquery.dataTables.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="assets/datatable/DataTables-1.13.1/css/dataTables.bootstrap.min.css"/>
    
  </head>
  <!-- END: Head-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    
    <ul class="main-search-list-defaultlist d-none">
      <li class="d-flex align-items-center"><a class="pb-25" href="#">
          <h6 class="text-primary mb-0">Files</h6></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small></a></li>
      <li class="d-flex align-items-center"><a class="pb-25" href="#">
          <h6 class="text-primary mb-0">Members</h6></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
            </div>
          </div></a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include('assets/Site_Bar.php') ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
        <div class="row">
      
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
                     <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                               <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As owners FROM `users` ";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['owners'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75">Total Users</p>
                              <h6 class="font-medium-2">
                                  <span>Till Now</span>
                              </h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                             <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As customer FROM `questions_categories` ";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['customer'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75" style="width:100px">Total Category</p>
                              <h5 class="font-medium-2">
                                  <span>Till Now</span>
                              </h5>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
           <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                              <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As managers FROM `questions` ";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['managers'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75">Total Questions</p>
                              <h5 class="font-medium-2">
                                  <span>Till Now</span>
                              </h5>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
           <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                              <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As res FROM `questions_categories` ";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['res'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75" style="width:100px">Total Categories</p>
                              <h5 class="font-medium-2">
                                  <span>Till Now</span>
                              </h5>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      
      
        </div>


  <!--<div class="row">-->
      
  <!--    <div class="col-lg-3 col-md-6 col-12">-->
  <!--      <div class="card">-->
  <!--                   <div class="card-content">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row pb-50">-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
  <!--                        <div>-->
                             
  <!--                            <h2 class="text-bold-700 mb-25"></h2>-->
  <!--                            <p class="text-bold-500 mb-75">Canceled Orders</p>-->
  <!--                            <h6 class="font-medium-2">-->
  <!--                                <span>Till Now</span>-->
  <!--                            </h6>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--                <hr/>-->
  <!--                </div>-->
  <!--                </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="col-lg-3 col-md-6 col-12">-->
  <!--      <div class="card">-->
  <!--          <div class="card-content">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row pb-50">-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
  <!--                        <div>-->
                             
  <!--                            <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>-->
  <!--                            <p class="text-bold-500 mb-75">Shipped Orders</p>-->
  <!--                            <h5 class="font-medium-2">-->
  <!--                                <span>Till now</span>-->
  <!--                            </h5>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--                <hr/>-->
  <!--                </div>-->
  <!--                </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="col-md-6 col-12">-->
  <!--      <div class="card">-->
  <!--         <div class="card-content">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row pb-50">-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
  <!--                        <div>-->
                              
  <!--                            <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>-->
  <!--                            <p class="text-bold-500 mb-75">Total delviered items</p>-->
  <!--                            <h5 class="font-medium-2">-->
  <!--                                <span>Live Status</span>-->
  <!--                            </h5>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--                <hr/>-->
  <!--                </div>-->
  <!--                </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--</div>-->

   

<!--   <div class="row">
    <div class="col-12">
      <div class="card">
          <div class="card-content">
        <div class="card-header">
          <h4 class="mb-0">User Details</h4>
        </div>
        <div class="card-content">
          <div class="table-responsive mt-1">
            <table class="table table-hover-animation mb-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>STATUS</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</section>

 <section id="dashboard-analytics">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    
                    <!--
                    =====
                    ZEEEE
                    =====
                    -->
                    
                    
                    <canvas id="myChart" style="width:60%;"></canvas>
                  <hr/>
                  </div>
            </div>
        </div>
      </div>
  </div>
</section>
<!-- Dashboard Analytics end -->

<!--google geo location-->

<?php
    require_once("connection.php");
    $sql_for_active = "SELECT COUNT(user_id) total_users,user_id,country FROM `location` where status = 'active'";
    $exec_active = mysqli_query($conn,$sql_for_active);
    while($active_ar = mysqli_fetch_array($exec_active))
    {
        $act = $active_ar['total_users'];
    }
?>

<?php
    require_once("connection.php");
    $sql_for_inactive = "SELECT COUNT(user_id) total_users,user_id,country FROM `location` where status = 'inactive'";
    $exec_inactive = mysqli_query($conn,$sql_for_inactive);
    while($inactive_ar = mysqli_fetch_array($exec_inactive))
    {
        $inact = $inactive_ar['total_users'];
    }
?>

<section id="dashboard-analytics">
    <div class="row">
         <div class="col-md-10">
            <p style="color:green;font-weight:bold">Total Active = <?php echo $act ?></p>
        </div>
        <div class="col-md-2">
            <p style="color:red;font-weight:bold">Total Inactive = <?php echo $inact ?></p>
        </div>
      <div class="col-lg-12 col-md-12 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                     <div id="regions_div" style="width: 900px; height: 500px;"></div>
                  <hr/>
                  </div>
            </div>
        </div>
      </div>
  </div>
</section>
<!--google geo location-->



<section>
    <!--Spend on the app-->
            
            
            <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text"></p>
                        <div class="table-responsive">
                            <h3><strong>Total Spend Time</strong></h3>
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Id</th>
                                        <th>User name</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Start time</th>
                                        <th>End time</th>
                                        <th>Total Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php
                                      include_once('connection.php');
                                        $users="SELECT l.id,l.country,l.status,l.start_time,l.end_time,u.name FROM location l INNER JOIN users u on u.id = l.user_id";
                                        $result = mysqli_query($conn,$users);
                                        $index = 0;
                                      while($row = mysqli_fetch_array($result)){
                                          $start_time = date_create($row['start_time']);
                                          $end_time = date_create($row['end_time']);
                                          
                                        //   $s = explode(" ",$start_time);
                                        //   $s_date = $s[0];
                                          
                                        //   $e = explode(" ",$end_time);
                                        //   $e_date = $s[0];
                                          
                                          
                                          $diff = date_diff($start_time,$end_time);
                                          $total_time = $diff->format("%d Day %h Hours %m Minutes %s Seconds");
                                          
                                          $sn = $index+1;
                                          echo "<tr>";
                                            echo "<td>{$sn}</td>";
                                            echo "<td>{$row['id']}</td>";
                                            echo "<td>{$row['name']}</td>";
                                            echo "<td>{$row['country']}</td>";
                                            echo "<td>{$row['status']}</td>";
                                            echo "<td>{$row['start_time']}</td>";
                                            echo "<td>{$row['end_time']}</td>";
                                            echo "<td>$total_time</td>";
                                          echo "</tr>";
                                          $index++;
                                      }
                                      
                                      ?>
                                    

                                </tbody>
                                <tfoot>
                                    <tr>
                                          <th>S No.</th>
                                        <th>Id</th>
                                        <th>User name</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Start time</th>
                                        <th>End time</th>
                                        <th>Total Time</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            
            
            <!--Spend on the app-->
</section>


        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- End: Customizer-->

   
    <!--</div>-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022<a class="text-bold-800 grey darken-2" href="index.php" target="_blank">Talk Talk,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block"></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->
    
    <script type="text/javascript" src="assets/datatable/DataTables-1.13.1/js/jquery-3.6.3.min.js"></script>
    
    <script type="text/javascript" src="assets/datatable/DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript" src="assets/datatable/DataTables-1.13.1/js/dataTables.bootstrap.min.js"></script>
    
    <script>$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );</script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
    
    <!-- END: Page JS-->
<script type="text/javascript">
$(document).ready(function() {
        
        $.ajax({
            type: "POST",
            url: 'getStreaks.php',
            // data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                // user is logged in successfully in the back-end
                // let's redirect
                // if (jsonData.success == "1")
                // {
               
                     
                     if(jsonData.status == true){
                  
                        var xValues = jsonData.xValues;
                        var yValues = jsonData.yValues;
                        var barColors = ["red", "green","blue","orange","brown"];
                        
                        new Chart("myChart", {
                          type: "bar",
                          data: {
                            labels: xValues,
                            datasets: [{
                              backgroundColor: barColors,
                              data: yValues
                            }]
                          },
                          options: {
                            legend: {display: false},
                            title: {
                              display: true,
                              text: "Highest Streaks"
                            }
                          }
                        });
                     }
                 
                         
                   

                   // location.href = 'my_profile.php';
                // }
                // else
                // {
                //     alert('Something went wrong!');
                // }
          }
      });
   

});

<?php 

    require_once("connection.php");
    $sql_for_loc = "SELECT COUNT(id) total_users,user_id,country FROM `location` GROUP BY country";
    $exec_loc = mysqli_query($conn,$sql_for_loc);

?>

</script>


<!--geo location-->
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Total Users'],
          <?php
          while($loc_arr = mysqli_fetch_array($exec_loc))
          {
              ?>
            ['<?php echo $loc_arr['country'] ?>', <?php echo $loc_arr['total_users'] ?>],
            <?php
          }
          ?>
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
<!--geo location-->







  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-semi-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:04:21 GMT -->
</html>