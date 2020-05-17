<?php 
include('adminheader.php');
?>




<!-- <div id="page-wrapper"> -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Verification</h1>
                    </div>
                </div>

<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email],input[type=textarea]{
    width: 100%;
    padding: 3px ;
    /*margin: 8px 26px;*/
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    /*font-size:16px;*/
}

/* Set a style for all buttons */
/*button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
    font-size:20px;
}*/
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
    height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
    display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
    padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
<script>
// If user clicks anywhere outside of the modal, Modal will close
var modal = document.getElementById('modal-wrapperx');
window.onclick = function(event) {
    if (event.target == modal) 
    {
        modal.style.display = "none";
    }
}
</script>

<?php




if(isset($_GET["id"]))
{


$x=$_GET['id'];
$w=$_GET['val'];
$off_id=$_GET["id"];


$sql1=mysql_query("select * from offreg where off_id='".$off_id."'");
$v1=mysql_fetch_assoc($sql1);

//$sql2=mysql_query("select * from offred where user_id='".$user_id."'");
//$v2=mysql_fetch_assoc($sql2);


//$sql3=mysql_query("select * from add_vehicle where user_id='".$user_id."'");
//$v3=mysql_fetch_assoc($sql3);
}
?>
<style type="text/css">
	.column1{
		float: left;
		width: 30%;
	}
	.column2{
		float: left;
		width: 60%;
	}
	.trr{
		height: 68px;
	}
	.row:after {
		content: "";
		display: table;
		clear: both;

	}
	.inputbox{
		width: 50%;
		color: red;
	}
</style>
<div class="row" style="border-image: 41px">
	<div class="column1" align="center">
		<?php echo "<img src=userdocs/".$off_id."_oprofilepic.jpg height='300' width='300'>";

		?>
	</div>
	<div class="column2" style="background-color: lightgreen">
		<table>
			<tbody>
				<tr class="trr">
					<td>
						Officer ID:
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['off_id']; ?>" readonly>
					</td>
				</tr><tr class="trr">
					<td>
						NAME:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['name']; ?>" readonly>
					</td>
				</tr>

				<tr class="trr">
					<td>
						DOB:
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['dob']; ?>" readonly>
					</td>
				</tr>

<tr class="trr">
					<td>
						PLACE:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['off_id']; ?>" readonly>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
		
	</div>














<div>
	<h1>Personal Details</h1>
	<div style="border-style: solid;">
		<table>
			<tr class="trr">
					<td>
						Blood Group :
					</td>
					<td>
						<input class="inputbox" style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['bloodgrp']; ?>" readonly>
					</td>
				</tr>
				<tr class="trr">
					<td>
						Gender:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['gender']; ?>" readonly>
					</td>
				</tr>
				
				<tr class="trr">
					<td>
						Phone Number:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['phno']; ?>" readonly>
					</td>
				</tr>
				<tr class="trr">
					<td>
						Alternate Phone Number:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['alt_ph']; ?>" readonly>
					</td>
				</tr>
				<tr class="trr">
					<td>
						Email:
					</td>
					<td>
						<input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $v1['email']; ?>" readonly>
					</td>
				</tr>
				<tr class="trr">
					<td>
						Address :
					</td>
					<td>
						<input style="width: 100%;" type="textarea" name="login_id" placeholder="<?php echo $v1['address']; ?>" readonly>
					</td>
				</tr>
		</table>
	</div>
</div>



















<div>
	<h1 >Documents</h1>
	<div style="border-style: solid;">
		<table>
			
				
				<tr class="trr">
					<td>
						ID Card :
					</td>
					<td>
						
<button onclick="document.getElementById('modal-wrapperx').style.display='block'" ><!-- style="width:200px; margin-top:200px; margin-left:160px;" -->
View Document</button>
<div id="modal-wrapperx" class="modal">
<div class="imgcontainer">
<div>

<form class="modal-content animate" method="post" action="mastercontroller.php" enctype="multipart/form-data">
<table>
<tbody>
                                    <!-- u2_   user upload doc -->
<tr>
<td>
    ID Card of <?php echo $v1['name'] ?> :
</td>
</tr>
<tr>
<td>
     <?php echo "<img src=userdocs/".$off_id."_idcard.jpg width=100% height=100%>";?>
</td>
</tr>
</tbody>
</table>
</form>
</div>
<span onclick="document.getElementById('modal-wrapperx').style.display='none'" class="close" title="Close">&times;</span>
</div>
</div>
					</td>
				</tr>
				
		</table>
	</div>
</div>















<div style="border-style: solid;">
	<!-- <button style="border-style: solid;">Verified</button> -->
	<!-- <a href="o_ap_user.php?id=$unique_id&op=$who">Verified</a> -->
	<?php $x=$_GET['id'];
	$w=$_GET['val'];
	echo "<button><a href='adm_ap_vo.php?id=$x&op=$w'>Approve</a></button>";
	?>
	
	
</div>


<?php
include('footer.php');
?>






<?php 
include('footer.php');
?>