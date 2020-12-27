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
              <div><i class="ft-list"></i>&nbsp;Admin List</div>
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
          <div class="content-wrapper">
            <div class="row match-height">              
              <div class="col-xl-12 col-lg-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Admin</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive text-center">
                      <thead>
                        <tr>
                          <th>Admin ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Php Select Query Admin list start -->
                        <?php       
                          $sr="select * from admin";
                          $res=mysqli_query($con,$sr) or die(mysqli_error());
                          while($ans=mysqli_fetch_array($res))
                          {
                        ?>
                        <!-- Php Select Query Admin list End -->
                        <tr>
                          <td>
                            <?php echo $ans['adminID'];?>
                          </td>
                          <td>
                            <?php echo $ans['firstName'];?>
                          </td>
                          <td>
                            <?php echo $ans['lastName'];?>
                          </td>
                          <td>
                            <?php echo $ans['email'];?>
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