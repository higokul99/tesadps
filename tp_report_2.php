<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>T.E.A Officer Panel</title>



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
                <a class="navbar-brand" href="admin_index.html">T.E.A Traffic Police Panel</a>
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
                                <a href="off_report_acc.html"><i class="fa fa-coffee"></i>Report Accident</a>
                            </li>
                            <li>
                                <a href="off_view_acc.html"><i class="fa fa-flash "></i>View Accident</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>View/Search<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="off_report_acc.html"><i class="fa fa-coffee"></i>View Users</a>
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
                




<!-- --------------------------------------------------------------------------------------------------------- -->


<?php 
                        
                        include('mastercontroller.php');

$query = "select * from register";
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 echo '<html><body><table border=1 align=center><tr>';
 while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);
  echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
 }
 echo '<th>View User</th>';
  
 $i = 0;
 while ($row = mysql_fetch_row($result))
 {
  echo '<tr>';
  $count = count($row);
  $y = 0;
  $idval='1';
  while ($y < $count)
  {
   $c_row = current($row);
   if($y==1)
    $idval=$c_row;
   echo '<td>' . $c_row . '</td>';
   next($row);
   $y = $y + 1;
  }
  //echo "<td><img width=100 height=100 src=userdocs/".$idval."_1.jpg></a></td>";
    //echo '<td><a href=rating.php><img src="images/star.jpg"></a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}

                        ?>

        <!-- <div id="Includefile">tttttttt</div>
        
        <script type="text/javascript" src="js/jquery-migrate-1.4.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#Includefile').load('trial.html');
            });
        </script> -->

<!-- --------------------------------------------------------------------------------------------------------- -->        



    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="admin_assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="admin_assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="admin_assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="admin_assets/js/custom.js"></script>
    


</body>
</html>
