<?php
// ------------------------------------------------CONNECTION------------------------------ 
$con=mysql_connect("localhost","root","");
mysql_select_db("tesadb");
session_start();
include('controller.php');

// ------------------------------------------------CONNECTION------------------------------ -->








//-----------------------------------USER REGISTER ---------------------------------------
if(isset($_POST['regsub']))
{
$username=$_POST['reg_username'];
$pass1=$_POST['reg_pass1'];
$pass2=$_POST['reg_pass2'];
$name=$_POST['reg_name'];
$email=$_POST['reg_email'];


$c = 0;
$check = 0;
//-----------PASSWORD CHECK----------
	if($pass1==$pass2)
	{
		$p=$pass1;
		$c = $c + 1;
	}
	else
	{
		echo"<script>alert('Password not matched');</script>";
		//echo "<script>location.href='index.php?msg=Password not matched!'</script>";
	
	}
//-----------PASSWORD CHECK----------


//-----------Login id CHECK----------
	$check1a = mysql_query("select username from userreg where username='".$username."'");
	$check1b = mysql_query("select email from userreg where email='".$email."'");
	
		
	if (mysql_num_rows($check1a) > 0)
	{
		$error1 = "Username already taken!";
		echo"<script>alert('username already taken');</script>";
		//header('location:index.php');
		//header('Location:index.php?username=false');
	}else 
		{
		$c = $c + 1;
		}
	if(mysql_num_rows($check1b) > 0)
	{
		$error2 = "Username already taken!";
		echo"<script>alert('Email already taken');</script>";
		//header('location:index.php');
		//header('Location:index.php?email=false');
	}else
		{
		$c = $c + 1;
		}
	
//-----------email------

//-----------email------	

//-----------Login id CHECK----------
if( $c == 3 )
	{
	$check = 1;
	}

if($check == 1)
{
	//userreg
	$id1=maxvalue('user_id','userreg');
	echo $id1;
	mysql_query("insert into userreg values('$id1','$username','$pass1','','$name','NULL','NULL','NULL','NULL','NULL','$email','','0')");
	echo "insert into userreg values('$id1','$username','$pass1','NULL','$name','NULL','NULL','NULL','NULL','NULL','$email','','0')";

	//login
	$id2 = maxvalue('unique_id','login');
	mysql_query("insert into login values('$id2','$username','$pass1','1','user')");
	echo "insert into login values('$id2','$username','$pass1','1','user')";

	//user_doc
	$id3 = maxvalue('doc_id','user_doc');
	mysql_query("insert into user_doc values('$id3','$id1','NULL','NULL','NULL','NULL','NULL','NULL','NULL')");

	//add_vehicle
	$id4 = maxvalue('v_id','add_vehicle');
	mysql_query("insert into add_vehicle values('$id4','$id1','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL')");

	
	//header('Location:index.php?userreg=true');
	echo "<script>alert('Registration Successful!')</script>";
	header('Location:index.php');
}
}

//--------------------------------------------------------------------------USER REGISTER CLOSE












// ------------------------------------------------------------------------------Officer Register -->
if(isset($_POST['offsub']))
{

	echo "Entered";
$username=$_POST['reg_username'];
$pass1=$_POST['reg_pass1'];
$pass2=$_POST['reg_pass2'];
$name=$_POST['reg_name'];
$email=$_POST['reg_email'];
$type=$_POST['reg_type'];


$c = 0;
$check = 0;
//-----------PASSWORD CHECK----------
	if($pass1==$pass2)
	{
		$p=$pass1;
		$c = $c + 1;
	}
	else
	{
		echo"<script>alert('Password not matched');</script>";
		//echo "<script>location.href='index.php?msg=Password not matched!'</script>";
		header('Location:index.php');
		echo "Password Not Match";
	
	}
//-----------PASSWORD CHECK----------


//-----------Login id CHECK----------
	$check1a = mysql_query("select username from offreg where username='".$username."'");
	$check1b = mysql_query("select email from offreg where email='".$email."'");
	
		
	if (mysql_num_rows($check1a) > 0)
	{
		
		$error1 = "Username already taken!";echo $error1;
		//echo"<script>alert('username already taken');</script>";
		//header('location:index.php');
		header('Location:index.php?username=false');
	}else 
		{
		$c = $c + 1;
		}
	if(mysql_num_rows($check1b) > 0)
	{
		$error2 = "Email already taken!";echo $error2;
		//echo"<script>alert('Email already taken');</script>";
		//header('location:index.php');
		header('Location:index.php?email=false');
	}else
		{
		$c = $c + 1;
		}
	
//-----------email------

//-----------email------	

//-----------Login id CHECK----------
if( $c == 3 )
	{
	$check = 1;
	echo $check;
	}

if($check == 1)
{
	//userreg
	$id1=maxvalue('off_id','offreg');
	$w=mysql_query("insert into offreg values('$id1','$type','','','$username','$pass1','$name','','','','','','$email','','0')");
	echo "insert into offreg values('$id1','$type','Upload Image','Upload Image','$username','$pass1','$name','','','','','','$email','','0')";

	//login
	$id2 = maxvalue('unique_id','login');
	mysql_query("insert into login values('$id2','$username','$pass1','1','$type')");

		
	
	//user_doc
	//$id3 = maxvalue('doc_id','user_doc');
	//mysql_query("insert into user_doc values('$id3','$id1','','','','','','')");

	//add_vehicle
	//$id4 = maxvalue('v_id','add_vehicle');
	//mysql_query("insert into add_vehicle values('$id4','$id1','','','','','')");

	echo "Entered";
	echo "<script>alert('Registration Successful!')</script>";
	//header('Location:index.php?offreg=true');
	header('Location:index.php');
}
}


// ------------------------------------------------------------------------------Officer Register close -->









// ------------------------------------------------------------------------------Update Profile -->
if(isset($_POST['updateprofile']))
{
	
	$user_id = $_SESSION['unique_id'] ;
	$prof = $_FILES["prof"]["tmp_name"];
	$gen = $_POST['gen'];
	$dob = $_POST['dob'];
	$bg = $_POST['bg'];
	$phno = $_POST['ph'];
	$altph = $_POST['alph'];
	$address = $_POST['address'];

	$file="userdocs/".$user_id."_profilepic.jpg";
	$sql = "update userreg SET 
	image = '".$file."',
	gender = '".$gen."',
	dob='".$dob."',
	bloodgrp = '".$bg."',
	phno = '".$phno."',
	alt_phno = '".$altph."',
	address = '".$address."',
	user_status=0 
		where user_id='".$user_id."'";

		//echo $sql;
if(mysql_query($sql))
{
	move_uploaded_file($_FILES["prof"]["tmp_name"], $file);
	
}


echo "<script>alert('You have Successfully Updated your personal Informations!')</script>";
//echo "<script>location.href='u_updateprofile.php'</script>";
}



// ------------------------------------------------------------------------------Update Profile close-->









// ------------------------------------------------------------------------------Update Profile -->
if(isset($_POST['o_update']))
{
	
	$off_id = $_SESSION['unique_id'] ;
	$prof = $_FILES["prof"]["tmp_name"];
	$idcard = $_FILES["idcard"]["tmp_name"];
	$gen = $_POST['gen'];
	$dob = $_POST['dob'];
	$bg = $_POST['bg'];
	$phno = $_POST['ph'];
	$altph = $_POST['alph'];
	$address = $_POST['address'];

	$file1="userdocs/".$off_id."_oprofilepic.jpg";
	$file2="userdocs/".$off_id."_idcard.jpg";
	$sql = "update offreg SET 
	image = '".$file1."',
	id_card = '".$file2."',
	gender = '".$gen."',
	dob='".$dob."',
	bloodgrp = '".$bg."',
	phno = '".$phno."',
	alt_ph = '".$altph."',
	address = '".$address."',
	off_status=0 
		where off_id='".$off_id."'";

		echo $sql;
if(mysql_query($sql))
{
	move_uploaded_file($_FILES["prof"]["tmp_name"], $file1);
	move_uploaded_file($_FILES["idcard"]["tmp_name"], $file2);
	
}


echo "<script>alert('You have Successfully Updated your personal Informations!')</script>";
echo "<script>location.href='o_updateprofile.php'</script>";
}



// ------------------------------------------------------------------------------Update Profile close-->









// ------------------------------------------------------------------------------Update P doc -->


if(isset($_POST['updatedocs']))
{
	
	$user_id = $_SESSION['unique_id'] ;
	
	$ano = $_POST['ano'];
	$pno = $_POST['ano'];
	$dno = $_POST['dno'];
	
	$adoc = $_FILES["adoc"]["tmp_name"];
	$pdoc = $_FILES["pdoc"]["tmp_name"];
	$ddoc = $_FILES["ddoc"]["tmp_name"];

	$file1="userdocs/pdoc/$user_id"."_aadhaar.jpg";
	$file2="userdocs/pdoc/$user_id"."_pan.jpg";
	$file3="userdocs/pdoc/$user_id"."_license.jpg";

	$sql = "update user_doc SET 
			aadhaar_no = '".$ano."',
			pan_no = '".$pno."',
			drive_no='".$dno."',
			adoc = '".$file1."',
			pdoc = '".$file2."',
			drdoc = '".$file3."',
			doc_status = 0 
				where user_id='".$user_id."'";

if(mysql_query($sql))
{
	move_uploaded_file($_FILES["adoc"]["tmp_name"], $file1);
	move_uploaded_file($_FILES["pdoc"]["tmp_name"], $file2);
	move_uploaded_file($_FILES["ddoc"]["tmp_name"], $file3);
	
}


echo "<script>alert('You have Successfully Updated your Personal Documents!')</script>";
echo "<script>location.href='u_updatedocs.php'</script>";
}


// ------------------------------------------------------------------------------Update P doc close-->





// ------------------------------------------------------------------------------Update Vehicle -->
if(isset($_POST['updatevehicle']))
{
	
	$user_id = $_SESSION['unique_id'] ;
	
	$v_type = $_POST['v_type'];
	$v_com = $_POST['v_com'];
	$v_model = $_POST['v_model'];
	$v_color = $_POST['v_color'];
	$reg_no = $_POST['reg_no'];
	$ch_no = $_POST['ch_no'];
	$ins_no = $_POST['ins_no'];

	$v_image = $_FILES["v_image"]["tmp_name"];
	$rc_book = $_FILES["rc_book"]["tmp_name"];

	$file1="userdocs/vdoc/$user_id"."_veh_image.jpg";
	$file2="userdocs/vdoc/$user_id"."_rc_book.jpg";

	$sql = "update add_vehicle SET 
			v_type = '".$v_type."',
			v_com = '".$v_com."',
			v_model='".$v_model."',
			v_color = '".$v_color."',
			reg_no = '".$reg_no."',
			chasis_no = '".$ch_no."',
			ins_no = '".$ins_no."',
			v_image = '".$file1."',
			rc_book = '".$file2."',
			veh_status = 0 
				where user_id='".$user_id."'";

if(mysql_query($sql))
{
	move_uploaded_file($_FILES["v_image"]["tmp_name"], $file1);
	move_uploaded_file($_FILES["rc_book"]["tmp_name"], $file2);
	
}


echo "<script>alert('You have Successfully Updated your Vehicle Informations!')</script>";
echo "<script>location.href='u_updatevehicle.php'</script>";
}
// ------------------------------------------------------------------------------Update Vehicle -->


// ------------------------------------------------------------------------------LOGIN -->
if(isset($_POST['logsub']))
{
  $username=$_POST['log_user'];
  $password=$_POST['log_pass'];

  $count1=0; $count2=0;
  $count1=substr_count($username, "'");
  $count2=substr_count($password, "'");
  $err=0;
  if ($count1>0 || $count2>0)
     $err=1;

$result = mysql_query("SELECT * from login where username='".$username."' and password='".$password."' and status='1'");
echo $result;
if(isset($result) == true)
{
$flag=0;
while($row = mysql_fetch_array($result))
	{
	$flag=1;
	$type=$row['type'];
	
		if($type == 'user')
			$table='userreg';
		else if($type == 'officer')
			$table='offreg';
		else if($type == 'admin')
			$table='admreg';
		else 
			$table='offreg';

    $_SESSION['username'] = $username;
	}
	$xx = mysql_query("SELECT * FROM ".$table." WHERE username='".$username."' ");	
	while ($xc = mysql_fetch_array($xx))
	{
	$name = $xc['name'];
	if($type == 'user')
			{
			$x=$xc['user_id'];
			$stat = $xc['user_status'];
			}

		else if($type == 'officer')
			{
			$x=$xc['off_id'];
			$stat = $xc['off_status'];
			}
		else if($type == 'admin')
			$x=$xc['adm_id'];
		else {
			$x=$xc['off_id'];
			$stat = $xc['off_status'];
		}

	$unique_id = $x;
	
	if($stat == 0)
	{
		$status = "<span style='color: red'><h4>Not Verified!!!</h4></span>";
	} 
	else
	{
		$status= "<span style='color: Green'><h4>Verified Account!!!</h4></span>";
	}
	$_SESSION['unique_id'] = $unique_id;
	$_SESSION['name'] = $name;
	$_SESSION['status'] = $status;
	
	}
  if($err>0)
  {
	  echo "<scripts>alert('Access Denied!');</script>";
  //echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";
  }
	else if($flag==1 && $type=="user")
			echo "<script>location.href='user_home.php'</script>";
			//echo "done";
	else if($flag==1 && $type=="admin")
			echo "<script>location.href='admin_home.php'</script>";
		
	else if($flag==1 && $type=="officer")
			echo "<script>location.href='officer_home.php'</script>";
		
	else if($flag==1 && $type=="trafficpolice")
			echo "<script>location.href='tp_home.php'</script>";
}
	else
		{
			echo "<script>alert('Invalid Username And Password!')</script>";
			//echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";
		}

}
// ------------------------------------------------------------------------------LOGIN CLOSE -->


// ------------------------------------------------------------------------------ -->

// ------------------------------------------------------------------------------ -->