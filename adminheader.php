<?php
include('mastercontroller.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TESA Admin Panel</title>

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
                <a class="navbar-brand" href="admin_index.html">T.E.S.A Admin Panel</a>
            </div>

            <div class="header-right">
                <a href="logout.php"  class="btn btn-danger" title="Logout">Logout</a>
                <!-- <a href="admin_message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="admin_message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="admin_login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a> -->

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <?php
                            $adm_id = $_SESSION['unique_id'] ;
                            $q = mysql_query("select * from admreg where adm_id = '".$adm_id."'");
                            //$row = mysql_fetch_array($q);
                            //if ($row['image'] != "")
                            //{
                                
                                //echo "<img src=userdocs/".$adm_id."_admprofilepic.jpg height='70' width='70'>";
                            //}
                            //else
                            //{
                                echo "<img src=userdocs/default.jpg height='50' width='50'>";
                            //}
                            
                            ?>

                            
                                <?php
                                //$status = $_SESSION['status'];
                                $name = $_SESSION['name'] ;
                                //echo "<span class='inner-text'>Officer </span>";
                                echo "<span class='inner-text'>".$name."</span>";
                                echo "<br>";
                                //echo $status;
                                
                                ?>
                            <br />
                                
                            
                        </div>

                    </li>


                    <!-- <li>
                        <a class="active-menu" href="admin_index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li> -->
                    <li>

<!-- Approval session -->


                        <a href="#"><i class="fa fa-desktop "></i>Approval<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="adm_ap_vo.php"><i class="fa fa-toggle-on"></i>Vehicle Officers</a>
                            </li>
                            <li>
                                <a href="adm_ap_tp.php"><i class="fa fa-bell "></i>Traffic Police</a>
                            </li>
                            
                        </ul>
                    </li>


<!-- Approval session -->


                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Reports<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="o_rp_1.php"><i class="fa fa-coffee"></i>r1</a>
                            </li>
                            <li>
                                <a href="o_rp_2.php"><i class="fa fa-flash "></i>r2</a>
                            </li>
                            </ul>
                    </li>
                    <li>
                        <a href="adm_viewvo.php"><i class="fa fa-flash "></i>Vehicle Officers</a>
                        
                    </li>
                     

                    <li>
                        <a href="adm_viewtp.php"><i class="fa fa-anchor "></i>Traffic Police</a>
                    </li>
                    <li>
                        <a href="adm_viewuser.php"><i class="fa fa-key "></i>Users</a>
                    </li>
                    
 --> </div>

        </nav> 
        <!-- /. NAV SIDE  -->
        <!-- <div id="page-wrapper"> -->
           <!-- <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>  -->
