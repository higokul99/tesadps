<?php
include('tpheader.php');

// ---------------------------------
include('mastercontroller.php');
$sql = mysql_query( "SELECT username AS name FROM `register` where user_id = '3' ;" );
    $row = mysql_fetch_array( $sql );

// ---------------------------------


?>
<table>
	<tr>
		<td>
			<input type="text" name="id" placeholder="search">
		</td>
		<td>
			<button >Search</button>
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="">
		</td>
		<td>
			<button onclick="document.getElementById('modal-wrapperx').style.display='block'">Add Fine</button>
		</td>
	</tr>
	
</table>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text,date,time], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
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
    width: 120%;
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

<!-- pop button -->


<div id="modal-wrapperx" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
		<span onclick="document.getElementById('modal-wrapperx').style.display='none'" class="close" title="Close PopUp">&times;</span>
	</div>

    <div class="container">
      	<form method="post" action="mastercontroller.php">
	<table>
	<tr><td>
	<input type="text" name="regno" placeholder="Enter Registration Number" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="noticeno" placeholder="Enter Notice Number" style="width: 200%" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="location" placeholder="Enter Location" style="width: 200%">
	</tr></td><tr><td>
	<input type="date" name="date" placeholder="" style="width: 200%">
	</tr></td><tr><td>
	<input type="time" name="time" placeholder="" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="offense" placeholder="Enter the type of offense" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="amount" placeholder="Enter the amount" style="width: 200%">
	</tr></td><tr><td>
	<input type="submit" name="fine" title="Add Fine"> </tr></td>
	</table>
</form>
    </div>
    
  </form>
  
</div>


<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapperx');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- <form method="post" action="mastercontroller.php">
	<table>
	<tr><td>
	<input type="text" name="regno" placeholder="Enter Registration Number" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="noticeno" placeholder="Enter Notice Number" style="width: 200%" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="location" placeholder="Enter Location" style="width: 200%">
	</tr></td><tr><td>
	<input type="date" name="date" placeholder="" style="width: 200%">
	</tr></td><tr><td>
	<input type="time" name="time" placeholder="" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="offense" placeholder="Enter the type of offense" style="width: 200%">
	</tr></td><tr><td>
	<input type="text" name="amount" placeholder="Enter the amount" style="width: 200%">
	</tr></td><tr><td>
	<input type="submit" name="fine" title="Add Fine"> </tr></td>
	</table>
</form> -->

<?php
include('footer.php');
?>