<?php
include('mastercontroller.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TESA User Panel</title>



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
                <a class="navbar-brand" href="user_home.php">T.E.S.A user Panel</a>
            </div>

            <div class="header-right">

                <!-- <a href="admin_message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="admin_message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a> -->
                
                <a href="logout.php"  class="btn btn-danger" title="Logout">Logout</a>
                <!-- <button class="btn btn-danger" title="Logout" name="logout"><i class="fa fa-exclamation-circle fa-2x"></i></button> -->
                

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <!-- <img src="admin_assets/img/user3.png" class="img-thumbnail" /> -->
                            <?php
                            $user_id = $_SESSION['unique_id'] ;
                            $q = mysql_query("select image from userreg where user_id = '".$user_id."'");
                            $row = mysql_fetch_array($q);

                            if ($row['image'] != "")
                            {
                                echo "<img src=userdocs/".$user_id."_profilepic.jpg height='50' width='50'>";
                            }
                            else
                            {
                                echo "<img src=userdocs/default.jpg height='50' width='50'>";
                            }
                            
                            ?>
                           <!-- <div class="inner-text"> -->
                                <?php
                                $status=$_SESSION['status'] ;
                                $name=$_SESSION['name'] ;
                                echo "<span class='inner-text'>".$name."</span>";
                                echo "<br>";
                                echo $status;
                                ?>
                            <br />
                                
                           <!--  </div> -->
                        </div>
                    </li>
<li>
    <a class="active-menu" href="user_home.php" ><i class="fa fa-toggle-on"></i>Dashboard</a>
</li>

                    
                    <li>

<!-- Approval session -->
<a href="#"><i class="fa fa-desktop "></i>Add Details<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="u_updateprofile.php"><i class="fa fa-circle-o "></i>Update Profile </a>
                            </li>
                            <li>
                                <a href="u_updatedocs.php"><i class="fa fa-circle-o "></i>Update Documents</a>
                            </li>
                            <li>
                                <a href="u_updatevehicle.php"><i class="fa fa-circle-o "></i>Update Vehicle</a>
                            </li>
                              <li>
                                <a href="u_regdrowsi.php"><i class="fa fa-circle-o "></i>Request Drowsiness Module</a>
                            </li>
                       
                           
                        </ul>
                    </li>


<!-- Approval session fa fa-bell "fa fa-circle-o ""fa fa-bell "-->


                     <li>
                        <a href="#"><i class="fa fa-bug "></i>Reports<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="u_rp_1.php"><i class="fa fa-coffee"></i>Report Accident</a>
                            </li>
                            <li>
                                <a href="u_rp_2.php"><i class="fa fa-flash "></i>View Your Accident</a>
                            </li>
                       
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-toggle-on"></i>Settings<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="u_changepassword.php"><i class="fa fa-coffee"></i>Change Password</a>
                            </li>
                            <li>
                                <a href="off_view_acc.html"><i class="fa fa-flash "></i>View Your Accident</a>
                            </li>
                        
                           
                        </ul>
                    </li>
                  


                       <li>
                        <a href="u_option3.php"><i class="fa fa-anchor "></i>Option 3</a>
                    </li>
                     <li>
                        <a href="error.html"><i class="fa fa-bug "></i>Option 4</a>
                    </li>
 

             </div>

        </nav> 
        <!-- /. NAV SIDE  -->





         <!-- <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        
                        
                    </div>
                </div>  -->

<!-- ---------------------------------------------------------------------------------------------------- -->         



