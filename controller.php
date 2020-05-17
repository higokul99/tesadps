<?php


function maxvalue($field,$table)
{
	$rowSQL = mysql_query( "SELECT MAX( $field ) AS max FROM `$table`" );
	$row = mysql_fetch_array( $rowSQL );
	if($row['max']>=0)
	{
		$maxvalue = $row['max'] + 1;
		return $maxvalue;
	}
	else 
		return 1;
}



function newviewtable($sql,$who)
{
$query = mysql_query($sql);
  //----------Fields-----
  if (!$query)
  {
    $message = 'ERROR:' . mysql_error();
    return $message;
  }
  else
  {
    //$i = 0;
 echo '<table border=1 align=center style="width:80%"><tr>';
 echo "<th align=center>User_ID</th><th align=center>Photo</th><th align='center'>Name</th><th align=center>Verification</th>";


  //----------Value------
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
  //$count = mysql_num_rows($query)$rr['user_id'];

  $val=$who;
  //$row = mysql_fetch_row($query);
  while ($unique_id<=$maxvalue)
  {
  echo '<tr>';
  $count = count($rr);

  $q = mysql_query("select * from userreg where user_id = '".$unique_id."' and user_status=0");

  $r = mysql_fetch_array($q);
  
  $y = 0;
  if($r['user_id']!=""){
      while ($y <= $count)
        {
        
        if($y==0)
        {
          echo '<td align=center>' . $r['user_id'] . '</td>';
          
        }
      
      if($y==3)
        {
          //$i1=current($row);
          //next($row);
          if ($r['image'] != "")
            {
              //$row = mysql_fetch_array($q);
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
  //$i = $i + 1;
  
  //$unique_id=next($r['user_id']);
 
 }
 echo '</table>';
 mysql_free_result($query);
}

 //}

// if(isset($_GET["op"]))
// {
//   if($_GET["op"]=="APuser")
//   {
//     $id=$_GET["id"];
//     $sql="update register set user_status='1' where user_id=$id";
//     mysql_query($sql);
//     header('location:o_ap_user.php');
//   }
//   if($_GET["op"]=="APoff")
//   {
    
//     $sql="update off_reg set off_status='1' where off_id=$id";
//     mysql_query($sql);
//     header('location:adm_ap_vo.php');
//   }
// }


function viewtable($sql,$who)
{
$query = $sql;
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
 echo '<th>Approve</th>';
  
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
         if($y==0)
           $idval=$c_row;
 echo '<td>' . $c_row . '</td>';
     next($row);
     $y = $y + 1;
       }
   echo "<td><a href='controller.php?id=$idval&op=$who'>tick</a></td>";
   //$stat1=mysql_query("UPDATE REGISTER SET USER_STATUS='1' WHERE USER_ID='5'");
   //echo "<td><img width=100 height=100 src=userdocs/".$idval."_1.jpg></a></td>";
    //echo '<td><a href=rating.php><img src="images/star.jpg"></a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}
}
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
   $id=$_GET["id"];
   
   $sql="update offreg set off_status='1' where off_id=$id";
   mysql_query($sql);
   header('location:adm_ap_vo.php');
 }
}



?>


