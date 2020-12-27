<?php
    include_once("Config.php");
?>
<!DOCTYPE html>
<html lang="en" class="loading">
  
<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-1/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 15:28:20 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>

  <?php

if (isset($_REQUEST['btnLogin'])) 
{

    if($_REQUEST['txtUsername']=='bhaskar' && $_REQUEST['txtTrainNo']==12905)
    {
        $Select="select * from tblloginmaster where UserName='".$_REQUEST['txtUsername']."' and Password='".$_REQUEST['txtPassword']."'";
        $Select_res=mysqli_query($con,$Select) or die(mysqli_error($con));
        if(mysqli_num_rows($Select_res)>0)
        {

            $result=mysqli_fetch_array($Select_res);
            $_SESSION["UserName"]=$result["UserName"];
            $_SESSION["IsVerified"]=$result["IsVerified"];
            $CIDD=$_REQUEST['txtTrainNo'];
            header("location:Coach.php?CID=$CIDD");
            
        }  
        else
        {
            ?>
            <script type="text/javascript" id="error">alert('Invalid Username / Password');</script>
        <?php

        } 
    }
    
    
    else
    {
        ?>
        <script type="text/javascript" id="error">alert('Required fields cann\'t be empty.');</script>
    <?php

    }




        //header("location:Coach.php");
}

?>

  <body data-col="1-column" class=" 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper"><!--Login Page Starts-->
            <section id="login">
                <div class="container-fluid">
                    <div class="row full-height-vh">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card gradient-indigo-purple text-center width-400">
                                <div class="card-img overlap">
                                    <img alt="element 06" class="mb-1" src="app-assets/img/portrait/avatars/avatar-08.png" width="190">
                                </div>
                                <div class="card-body">
                                    <div class="card-block">
                                        <h2>Login</h2>
                                        <form method="post">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required >
                                                </div><label id="lblEmail1" style="color: red"></label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="password" class="form-control" name="inputPass" id="inputPass" placeholder="Password" required>
                                                </div><label id="lblEmail1" style="color: red"></label>
                                            </div>

                                            <!-- <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                            <input type="checkbox" class="custom-control-input" checked>
                                                            <span class="custom-control-indicator ml-4"></span>
                                                            <span class="pl-2">Remember Me</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <br><br>
                                            <hr>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-pink btn-block btn-raised" id="btnLogin" name="btnLogin" value="Login">Submit</input>
                                                    <button type="button" class="btn btn-secondary btn-block btn-raised">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="card-footer">
                                    <div class="float-left"><a>Recover Password</a></div>
                                    <div class="float-right"><a>New User?</a></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!--Login Page Ends-->
          </div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>

</html>