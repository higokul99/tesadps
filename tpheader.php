<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>T.E.S.A Officer Panel</title>



    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!-- BOOTSTRAP STYLES-->
    <link href="admin_assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="admin_assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="admin_assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="admin_assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="tpolice_index.php">T.E.S.A Traffic Police Panel</a>
            </div>

            <div class="header-right">

                <a href="admin_message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="admin_message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="admin_login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="admin_assets/img/user3.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php
                                    session_start();
                                    $tp_id=$_SESSION['username'];
                                    echo "<span>".$tp_id."</span>";
                                ?>
                            <br />
                                <small>Online</small>
                            </div>
                        </div>
                    </li>


                    
                    <li>

<!-- Approval session -->

<!-- Approval session -->


                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Reports<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="tp_fine.php"><i class="fa fa-coffee"></i>Fine</a>
                            </li>
                            <li>
                                <a href="tp_addfine.php"><i class="fa fa-flash "></i>Add Fine</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>View/Search<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="tp_view_user.php"><i class="fa fa-coffee"></i>View Users</a>
                            </li>
                            <li>
                                <a href="off_view_acc.html"><i class="fa fa-flash "></i>View Vehicles</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Accidents<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="off_report_acc.html"><i class="fa fa-coffee"></i>Add Accident</a>
                            </li>
                            <li>
                                <a href="off_view_acc.html"><i class="fa fa-flash "></i>View Accident</a>
                            </li>
                        </ul>
                    </li>
                    


                       <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Option 3</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Option 4</a>
                    </li>
                    

             </div>

        </nav> 
        <!-- /. NAV SIDE  -->





         <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        
                        
                    </div>
                </div> 
                

