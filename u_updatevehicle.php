<?php
include('userheader.php');
// ----------------------------------------------------------------------------------------------
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Vehicle Info</h1>
                        
                        
                    </div>
                </div>
<?php 

$user_id = $_SESSION['unique_id'] ;
$sql = "SELECT * FROM add_vehicle WHERE user_id='".$user_id."'";
$result = mysql_query($sql);
$bill = mysql_fetch_assoc($result);
?>
<div>
<table > <!-- style="border-style: ridge;" -->
<tbody>
<tr><td>
        Vid :
    <td>
        <input type="text" name="v_id" placeholder="<?php echo $bill['v_id'] ?>" readonly>
    </td>
</td></tr>
<tr><td>
        Vehicle Type :
    <td><input type="text" name="v_type" placeholder="<?php echo $bill['v_type'] ?>" readonly>
</td></tr>
<tr><td>
        Vehicle Company :
    <td><input type="text" name="v_com" placeholder="<?php echo $bill['v_com'] ?>" readonly>
</td></tr>
<tr><td>
        Vehicle Model :
    <td><input type="text" name="v_model" placeholder="<?php echo $bill['v_model'] ?>" readonly>
</td></tr>
<!-- <tr><td>
        Upload Vehicle Image :
    <td><input type="file" name="v_image" placeholder="" readonly>
</td></tr> -->
<tr><td>
        Registration Number :   
    <td><input type="text" name="reg_no" placeholder="<?php echo $bill['reg_no'] ?>"readonly></td>
</td></tr>
<tr><td>
        Chasis Number :
    <td><input type="text" name="ch_no" placeholder="<?php echo $bill['chasis_no'] ?>"readonly></td>
<tr><td>
        Insurance Number :
    <td><input type="text" name="ins_no" placeholder="<?php echo $bill['ins_no'] ?>" readonly></td>
</td></tr>
<tr><td>
                
    <td></td>
</td></tr>

                                </tbody>
                            </table>

<button onclick="document.getElementById('modal-wrapperx').style.display='block'" ><!-- style="width:200px; margin-top:200px; margin-left:160px;" -->
Edit</button>
                    <!-- </form> -->
</div>
<div id="modal-wrapperx" class="modal">
    <div>
<?php
$id=$_SESSION['unique_id'] ;
$sql="SELECT * FROM add_vehicle WHERE user_id='".$id."'";
$result=mysql_query($sql);
$v=mysql_fetch_assoc($result);
?>
<form class="modal-content animate" method="post" action="mastercontroller.php" enctype="multipart/form-data">
    <table>
    <tbody>
                                    <!-- u2_   user upload doc -->
<tr><td>
        Vid :
    <td>
        <input type="text" name="vid" value="" placeholder="<?php echo $v['v_id'] ?>" readonly>
    </td>
</td></tr>
<tr><td>
        Vehicle Type :
    
    <td>
        <select name="v_type" default = "select">
            <option name="l" value="LMV">LMV</option>
            <option name="h" value="HMV">HMV</option>
            <option name="hg" value="HGMV">HGMV</option>
            <option name="ht" value="HGMV/HTV">HGMV/HTV</option> 
        </select></td>
</td></tr>
<tr><td>
        Vehicle Company :
    <td><input type="text" name="v_com" placeholder="" >
</td></tr>
<tr><td>
        Vehicle Model :
    <td><input type="text" name="v_model" placeholder="" >
</td></tr>
<tr><td>
        Vehicle Color :
    <td><input type="text" name="v_color" placeholder="" >
</td></tr>
<tr><td>
        Upload Vehicle Image :
    <td><input type="file" name="v_image" placeholder="" >
</td></tr>
<tr><td>
        Registration Number :   
    <td><input type="text" name="reg_no" placeholder=""></td>
</td></tr>
<tr><td>
        Chasis Number :
    <td><input type="text" name="ch_no" placeholder=""></td>
<tr><td>
        Insurance Number :
    <td><input type="text" name="ins_no" placeholder="" ></td>
</td></tr>
<tr><td>
        Upload RC Book :
    <td><input type="file" name="rc_book" placeholder="" >
</td></tr>
</tbody></table>
    <input type="submit" name="updatevehicle" value="Update">
</form>


<span onclick="document.getElementById('modal-wrapperx').style.display='none'" class="close" title="Close">&times;</span>
    </div>
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
<?php
// ----------------------------------------------------------------------------------------------
include('footer.php');
?>