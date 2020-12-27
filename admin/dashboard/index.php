<?php
    include_once("../config/config.php");
?>

<!DOCTYPE html>
<html lang="en" class="loading">
  
<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-1/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 15:27:37 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard - CMS eCommerce</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/chartist.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <?php
        include_once("../includeFiles/Menu.php");
      ?>

      <div class="main-panel">

        <!-- Navbar (Header) Starts-->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
          <div class="container-fluid">
            <div class="navbar-header">
              
              <div><i class="ft-home"></i>&nbsp;Dashboard</div>
            </div>
            <div class="navbar-container">
              <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  
                  <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>&nbsp;<b>Hi,&nbsp;<?php echo $_SESSION['firstName'];?></b>
                      <p class="d-none">User Settings</p></a>
                    <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item py-1"><i class="ft-settings mr-2"></i><span>Settings</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>Edit Profile</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-mail mr-2"></i><span>My Inbox</span></a>
                      <div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar (Header) Ends-->

        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 col-12">
            <div class="card gradient-blackberry">
              <div class="card-body">
                <div class="card-block pt-2 pb-0">
                  <div class="media">
                    <div class="media-body white text-left">
                      <h3 class="font-large-1 mb-0">$2156</h3>
                      <span>Total Tax</span>
                    </div>
                    <div class="media-right white text-right">
                      <i class="icon-pie-chart font-large-1"></i>
                    </div>
                  </div>
                </div>
                <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">					
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-12">
            <div class="card gradient-ibiza-sunset">
              <div class="card-body">
                <div class="card-block pt-2 pb-0">
                  <div class="media">
                    <div class="media-body white text-left">
                      <h3 class="font-large-1 mb-0">$1567</h3>
                      <span>Total Cost</span>
                    </div>
                    <div class="media-right white text-right">
                      <i class="icon-bulb font-large-1"></i>
                    </div>
                  </div>
                </div>
                <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">					
                </div>

              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-6 col-md-6 col-12">
            <div class="card gradient-green-tea">
              <div class="card-body">
                <div class="card-block pt-2 pb-0">
                  <div class="media">
                    <div class="media-body white text-left">
                      <h3 class="font-large-1 mb-0">$4566</h3>
                      <span>Total Sales</span>
                    </div>
                    <div class="media-right white text-right">
                      <i class="icon-graph font-large-1"></i>
                    </div>
                  </div>
                </div>
                <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">				
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-12">
            <div class="card gradient-pomegranate">
              <div class="card-body">
                <div class="card-block pt-2 pb-0">
                  <div class="media">
                    <div class="media-body white text-left">
                      <h3 class="font-large-1 mb-0">$8695</h3>
                      <span>Total Earning</span>
                    </div>
                    <div class="media-right white text-right">
                      <i class="icon-wallet font-large-1"></i>
                    </div>
                  </div>
                </div>
                <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">					
                </div>
              </div>
            </div>
          </div>
        </div>
            <!--Statistics cards Ends-->

            <!--Line with Area Chart 1 Starts-->
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">PRODUCTS SALES</h4>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <div class="chart-info mb-3 ml-3">
                        <span class="gradient-blackberry d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span> Sales
                        <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span> Visits
                      </div>
                      <div id="line-area" class="height-350 lineArea">						
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Line with Area Chart 1 Ends-->

            <div class="row match-height">
              <div class="col-xl-4 col-lg-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                  </div>
                  <div class="card-body">

                    <p class="font-medium-2 text-muted text-center pb-2">Last 6 Months Sales</p>
                    <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">				
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Shopping Cart</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive text-center">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Status</th>
                          <th>Amount</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img class="media-object round-media height-50" src="../app-assets/img/elements/01.png" alt="Generic placeholder image" /></td>
                          <td>Ferrero Rocher</td>
                          <td>1</td>
                          <td>
                            <a class="btn white btn-round btn-primary">Active</a>
                          </td>
                          <td>$19.94</td>
                          <td>
                            <a class="danger" data-original-title="" title="">
                              <i class="ft-x"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media height-50" src="../app-assets/img/elements/07.png" alt="Generic placeholder image" /></td>
                          <td>Headphones</td>
                          <td>2</td>
                          <td>
                            <a class="btn white btn-round btn-danger">Disabled</a>
                          </td>
                          <td>$99.00</td>
                          <td>
                            <a class="danger" data-original-title="" title="">
                              <i class="ft-x"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media height-50" src="../app-assets/img/elements/11.png" alt="Generic placeholder image" /></td>
                          <td>Camera</td>
                          <td>1</td>
                          <td>
                            <a class="btn white btn-round btn-info">Paused</a>
                          </td>
                          <td>$299.00</td>
                          <td>
                            <a class="danger" data-original-title="" title="">
                              <i class="ft-x"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><img class="media-object round-media height-50" src="../app-assets/img/elements/14.png" alt="Generic placeholder image" /></td>
                          <td>Beer</td>
                          <td>2</td>
                          <td>
                            <a class="btn white btn-round btn-success">Active</a>
                          </td>
                          <td>$24.51</td>
                          <td>
                            <a class="danger" data-original-title="" title="">
                              <i class="ft-x"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="row match-height">
              <div class="col-xl-8 col-lg-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title mb-0">Visit & Sales Statistics</h4>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <div class="chart-info mb-2">
                        <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                        <span class="text-uppercase"><i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Visits</span>
                      </div>
                      <div id="line-area2" class="height-400 lineAreaDashboard">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 col-12">
                <div class="card gradient-blackberry">
                  <div class="card-body">
                    <div class="card-block">
                      <h4 class="card-title white">Statistics</h4>
                      <div class="p-2 text-center">
                        <a class="white font-medium-1">Month</a>
                        <a class="btn btn-raised btn-round bg-white mx-3 px-3">Week</a>
                        <a class="white font-medium-1">Day</a>
                      </div>
                      <div class="my-3 text-center white">
                        <a class="font-large-2 d-block mb-1">$ 78.89 <span class="ft-arrow-up font-large-2"></span></a>
                        <span class="font-medium-1">Week2   +15.44</span>
                      </div>
                    </div>
                    <div id="lineChart" class="height-250 lineChart lineChartShadow">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row match-height">
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                  </div>
                  <div class="card-body">

                    <p class="font-medium-2 text-muted text-center">Hobbies</p>
                    <div id="bar-chart" class="height-250 BarChartShadow BarChart">					
                    </div>

                    <div class="card-block">
                      <div class="row">
                        <div class="col text-center">
                          <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                          <span class="font-large-1 d-block mb-2">48</span>
                          <span>Sport</span>
                        </div>
                        <div class="col text-center">
                          <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                          <span class="font-large-1 d-block mb-2">9</span>
                          <span>Music</span>
                        </div>
                        <div class="col text-center">
                          <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                          <span class="font-large-1 d-block mb-2">26</span>
                          <span>Travel</span>
                        </div>
                        <div class="col text-center">
                          <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                          <span class="font-large-1 d-block mb-2">17</span>
                          <span>News</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title mb-0">User List</h4>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <div class="media mb-1">
                        <a> 
                          <img alt="96x96" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="../app-assets/img/portrait/small/avatar-s-12.png">
                        </a>
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-1 mb-0">Jessica Rice</h4>
                          <p class="text-muted font-small-3">UX Designer</p>
                        </div>
                        <div class="mt-1">
                          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input" checked>
                            <span class="custom-control-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="media mb-1">
                        <a> 
                          <img alt="96x96" class="media-object d-flex mr-3 bg-danger height-50 rounded-circle" src="../app-assets/img/portrait/small/avatar-s-11.png">
                        </a>
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-1 mb-0">Jacob Rios</h4>
                          <p class="text-muted font-small-3">HTML Developer</p>
                        </div>
                        <div class="mt-1">
                          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="media mb-1">
                        <a> 
                          <img alt="96x96" class="media-object d-flex mr-3 bg-success height-50 rounded-circle" src="../app-assets/img/portrait/small/avatar-s-3.png">
                        </a>
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-1 mb-0">Russell Delgado</h4>
                          <p class="text-muted font-small-3">Database Designer</p>
                        </div>
                        <div class="mt-1">
                          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="media mb-1">
                        <a> 
                          <img alt="96x96" class="media-object d-flex mr-3 bg-warning height-50 rounded-circle" src="../app-assets/img/portrait/small/avatar-s-6.png">
                        </a>
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-1 mb-0">Sara McDonald</h4>
                          <p class="text-muted font-small-3">Team Leader</p>
                        </div>
                        <div class="mt-1">
                          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input" checked>
                            <span class="custom-control-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="media mb-1">
                        <a> 
                            <img alt="96x96" class="media-object d-flex mr-3 bg-info height-50 rounded-circle" src="../app-assets/img/portrait/small/avatar-s-18.png">
                          </a>
                        <div class="media-body">
                          <h4 class="font-medium-1 mt-1 mb-0">Janet Lucas</h4>
                          <p class="text-muted font-small-3">Project Manger</p>
                        </div>
                        <div class="mt-1">
                          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </div>
                      </div>
                      <div class="action-buttons mt-2 text-center">
                        <a class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2">Add New</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Project Stats</h4>
                  </div>
                  <div class="card-body">

                    <p class="font-medium-2 text-muted text-center">Project Tasks</p>
                    <div id="donut-dashboard-chart" class="height-250 donut">
                    </div>

                    <div class="card-block">
                      <div class="row mb-3">
                        <div class="col">
                          <span class="mb-1 text-muted d-block">23% - Started</span>
                          <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col">
                          <span class="mb-1 text-muted d-block">14% - In Progress</span>
                          <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-amber" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <div class="col">
                          <span class="mb-1 text-muted d-block">35% - Remaining</span>
                          <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-deep-purple bg-lighten-1" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0"
                            aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col">
                          <span class="mb-1 text-muted d-block">28% - Done</span>
                          <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-blue" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2021 <a href="../dashboard" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">CMS eCommerce </a>, All rights reserved. </span></p>
        </footer>

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- START Notification Sidebar-->
    <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
      <div class="side-nav notification-sidebar-content">
        <div class="row">
          <div class="col-12 mt-1">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
              <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
              <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
            </ul>
            <div class="tab-content px-1 pt-1">
              <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                <div id="activity" class="col-12 timeline-left">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                  <div id="timeline" class="timeline-left timeline-wrapper">
                    <ul class="timeline">
                      <li class="timeline-line"></li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                <div id="chatapp" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                  <div class="collection border-none">
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Thank you </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Hello Boo </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards </h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Keny ! </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Ohh God </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Love you </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates </h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Can we </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts </h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Great! </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Do it </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis </h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Got that </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood </h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Like you </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell </h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Thank you </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves </h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Okay you </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman </h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Can do </p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="../app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch </h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Leave it </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                <div id="settings" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                  <ul class="list-unstyled">
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input checked="checked" type="checkbox" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input type="checkbox" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input type="checkbox" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                          <div class="float-right">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input type="checkbox" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                          <div class="float-right">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input type="checkbox" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!-- END Notification Sidebar-->
    <!-- Theme customizer Starts-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
      <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
        <div class="cz-bg-color">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
          </div>
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Sidebar Options Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Bg Image</h6>
        <div class="cz-bg-image row">
          <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="90" class="rounded"></div>
          <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="90" class="rounded"></div>
          <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="90" class="rounded"></div>
          <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="90" class="rounded"></div>
          <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="90" class="rounded"></div>
          <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="90" class="rounded"></div>
        </div>
        <!-- Sidebar BG Image Ends-->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton">
          <div class="switch"><span>Sidebar Bg Image</span>
            <div class="float-right">
              <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" checked="" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
              </label>
            </div>
          </div>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <hr>
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
          <div class="switch"><span>Compact Menu</span>
            <div class="float-right">
              <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu"><span class="custom-control-indicator"></span>
              </label>
            </div>
          </div>
        </div>
        <!-- Compact Menu Ends-->
        <hr>
        <!-- Sidebar Width Starts-->
        <div>
          <label for="cz-sidebar-width">Sidebar Width</label>
          <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
            <option value="small">Small</option>
            <option value="medium" selected="">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <!-- Sidebar Width Ends-->
      </div>
    </div>
    <!-- Theme customizer Ends-->
    <!-- BEGIN VENDOR JS-->
    <script src="../app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../app-assets/vendors/js/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="../app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="../app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="../app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/dashboard1.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-1/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 15:27:37 GMT -->
</html>