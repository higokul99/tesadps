<?php
include('userheader.php');
// ----------------------------------------------------------------------------------------------
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        
<?php
$name=$_SESSION['name'] ;
echo "<font size='5px'>Welcome,</font><br>";
echo "<font size='72px'>".$name."...</font>";
$id=$_SESSION['username'] ;
$sql="SELECT * FROM register WHERE login_id='".$id."'";
$result=mysql_query($sql);
$bill=mysql_fetch_assoc($result);
?>
                    </div>
                </div>

<div>
	<h1 style="color: green">Personal Details</h1>
	<h3 style="color: green">Date Of Birth :<?php echo $bill['dob']; ?></h3>
	<h3 style="color: green">Phone Number :<?php echo $bill['phno']; ?></h3>
	<h3 style="color: green">Email :<?php echo $bill['email']; ?></h3>
	<h3 style="color: green">Blood Group :<?php echo $bill['bloodgrp']; ?></h3>
	<h3 style="color: green">Address :<?php echo $bill['address']; ?></h3>
</div>
<?php
// ----------------------------------------------------------------------------------------------
include('footer.php');
?>