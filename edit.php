<!DOCTYPE html>
<html>
<title>Modal Popup Box</title>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
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

<body bgcolor="blue">


<!-- pop button -->
<button onclick="document.getElementById('modal-wrapperx').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
Open Popup</button>
<!-- pop button -->


<div id="modal-wrapperx" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
        <div>
    <?php
//include('mastercontroller.php');
//$id= $_POST['login_id'];

$id=$_SESSION['username'] ;

//$sql= mysql_query("select user_id from userreg where login_id='".$login_id."'")
//$sql = mysql_query( "SELECT MAX( vid ) AS max FROM `add_vehicle`;" );
    //$row = mysql_fetch_array( $sql );
    //if($row['max']>=0)
        //$idreg = $row['max'] + 1;

//$fetchrow = $idreg;
$sql="SELECT * FROM register WHERE login_id='".$id."'";
$result=mysql_query($sql);

$bill=mysql_fetch_assoc($result);
?>
    <form method="post" action="mastercontroller.php" enctype="multipart/form-data">
    <table>
    <tbody>
                                    <!-- u2_   user upload doc -->

        <tr>
                <td>
                    Login Id :
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $bill['login_id']; ?>" readonly>
                </td>
            </tr>
            
            <tr>
                <td>
                    Name :
            
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="name" placeholder="<?php echo $bill['name']; ?>" readonly>
                </td>

            </tr>

            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input style="width: 100%;" type="email" name="email" placeholder="<?php echo $bill['email']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    Gender :
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="gen" value="male" placeholder="<?php echo $bill['gender']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    DOB :
            
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="dob" placeholder="<?php echo $bill['dob']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Blood Group :
                </td>
                <td>
                    <select name="bg">
                        <option name="bg" value="A+">A+</option>
                        <option name="bg" value="A-">A-</option>
                        <option name="bg" value="B+">B+</option>
                        <option name="bg" value="B-">B-</option>
                        <option name="bg" value="AB+">AB+</option>
                        <option name="bg" value="AB-">AB-</option>
                        <option name="bg" value="O+">O+</option>
                        <option name="bg" value="O-">O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number :
            
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="ph" placeholder="<?php echo $bill['phno']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Alternate Phone Number :
                </td>
                <td>
                    <input style="width: 100%;" type="text" name="alph" placeholder="<?php echo $bill['alt_phno']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Address :
            
                </td>
                <td>
                    <input style="width: 100%;" type="textarea" name="address" placeholder="<?php echo $bill['address']; ?>">
                </td>
            </tr>
            
            <!-- <tr>
                <td>
                    <button name="update1">Save and Continue</button>
                </td>
            </tr> -->
        <tr>
            <td>Enter Aadhaar Number :</td>
            <td><input style="width: 100%;" type="text" name="aadhaar_no" ></td>
        </tr>
        <tr>
            <td>Upload Aadhaar :</td>
            <td><input style="width: 100%;" type="file" name="aadhaar_docno" ></td>
        </tr>
        <tr>
            <td>PAN Number :   </td>
            <td><input style="width: 100%;" type="text" name="pan_no" ></td>
        </tr>
        <tr>
            <td>Upload PAN :   </td>
            <td><input style="width: 100%;" type="file" name="pan_doc" ></td>
        </tr>
        <tr>
            <td>Driving Number :</td>
            <td><input style="width: 100%;" type="text" name="drlicense" ></td>
        </tr>
        <tr>
            <td>Upload Driving License :</td>
            <td><input style="width: 100%;" type="file" name="drlicense_doc" ></td>
        </tr>
            <tr><td></td></tr>
        </tbody></table>
    <input type="submit" name="upload_user_doc" value="Update">
</form>
                </div>

        

      <span onclick="document.getElementById('modal-wrapperx').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Modal Popup Box</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname">
      <input type="password" placeholder="Enter Password" name="psw">        
      <button type="submit">Login</button>
      <input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
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

</body>
</html>
