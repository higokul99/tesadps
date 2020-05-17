<!DOCTYPE html>
<html>
<head>
    <title>try</title>
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
</head>
<body>
<button onclick="document.getElementById('modal-wrapperx').style.display='block'" ><!-- style="width:200px; margin-top:200px; margin-left:160px;" -->
Edit</button>


<div id="modal-wrapperx" class="modal">
    <div class="imgcontainer">
        <div>
<?php
//$id=$_SESSION['unique_id'] ;
$sql="SELECT * FROM user_doc WHERE user_id='1'";
$result=mysql_query($sql);
$bill=mysql_fetch_assoc($result);
?>
<form class="modal-content animate" method="post" action="mastercontroller.php" enctype="multipart/form-data">
<table>
<tbody>
                                    <!-- u2_   user upload doc -->
<tr>
<td>
    User Id :
</td>
<td>
    <input style="width: 100%;" type="text" name="login_id" placeholder="<?php echo $bill['user_id']; ?>" readonly>
</td>
</tr>
<tr>
<td>
    Name :
</td>
<td>
     <?php echo "<img src=userdocs/pdoc/".$user_id."_aadhaar.jpg width=100% height=100%>";?>
</td>
</tr>
</form>
</div>
<span onclick="document.getElementById('modal-wrapperx').style.display='none'" class="close" title="Close">&times;</span>
</div>
</div>

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









</body>
</html>

