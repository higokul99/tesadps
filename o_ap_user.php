<?php 
include('officerheader.php');
?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Approve  User</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div> 
<?php

//viewtable('select * from userreg','APuser');
//newviewtable('select * from userreg','APuser');
$query = mysql_query('select * from userreg');
if (!$query)
{
    $message = 'ERROR:' . mysql_error();
    return $message;
}
else
{
    echo '<table border=1 align=center style="width:80%"><tr>';
    echo "<th align=center>User_ID</th><th align=center>Photo</th><th align='center'>Name</th><th align=center>Verification</th>";

	$maxq =mysql_query("select max(user_id) as max from userreg");
	$w = mysql_fetch_array( $maxq );
	if($w['max']>=0)
		{
		$maxvalue = $w['max'];
		}
	else 
	    $maxvalue = 1;

	$rr = mysql_fetch_array($query);
	$unique_id = 1;
	$val='APuser';
	while ($unique_id<=$maxvalue)
	{
		echo '<tr>';
		$count = count($rr);
		$q = mysql_query("select * from userreg where user_id = '".$unique_id."' and user_status=0");
		$r = mysql_fetch_array($q);
		$y = 0;
		if($r['user_id']!="")
		{
    		while ($y <= $count)
        	{
        		if($y==0)
        		{
          echo '<td align=center>' . $r['user_id'] . '</td>';
          
        }
      
      if($y==3)
        {
          
          if ($r['image'] != "")
            {
              
              echo "<td><img src=userdocs/".$unique_id."_profilepic.jpg height='150' width='150'></td>";
            }
          else
            {
                echo "<td><img src=userdocs/default.jpg height='150' width='150'></td>";
            }
          
        }
      if($y==4)
        {
          echo '<td align=center>' . $r['name'] . '</td>';
        }
      if($y==5)
        {
          echo "<td align=center><a href='validateuser.php?id=$unique_id&val=$val'>view</a></td>";
         
          
        }
      
      $y = $y + 1;

        }
      }
        $unique_id = $unique_id + 1;
      }


    //echo "<td align=center><a href='controller.php?id=$unique_id&op=$who'>Approve</a></td>";
        //echo "<td><input type=submit name=APuser value=Approve></td>";
    //$stat1=mysql_query("UPDATE REGISTER SET USER_STATUS='1' WHERE USER_ID='5'");
    //echo "<td><img width=100 height=100 src=userdocs/".$idval."_1.jpg></a></td>";
    //echo '<td><a href=rating.php><img src="images/star.jpg"></a></td>';
  echo '</tr>';
  
 
 }
 echo '</table>';
 mysql_free_result($query);



if(isset($_GET["op"]))
{
  if($_GET["op"]=="APuser")
  {
    $id=$_GET["id"];
    $sql="update userreg set user_status='1' where user_id=$id";
    mysql_query($sql);
    header('location:o_ap_user.php');
  }
  if($_GET["op"]=="APoff")
  {
    
    $sql="update offreg set off_status='1' where off_id=$id";
    mysql_query($sql);
    header('location:adm_ap_vo.php');
  }
}

?>

<?php
include('footer.php');
?>