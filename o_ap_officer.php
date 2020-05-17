<?php
include('header.php');

// ------------------------------------------------------------------------------------------------

                        
include('mastercontroller.php');
viewtableforuserAP("select * from off_reg where off_status='0'","APoff");
// $con=mysql_connect("localhost","root","","");
// mysql_select_db("dr");
              /*          
$query = "select * from register where user_status='0'";
$result = mysql_query($query,$con);
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
  echo "<td><a href='mastercontroller.php?id=$idval&op=APuser'>tick</a></td>";
  //$stat1=mysql_query("UPDATE REGISTER SET USER_STATUS='1' WHERE USER_ID='5'");
  //echo "<td><img width=100 height=100 src=userdocs/".$idval."_1.jpg></a></td>";
    //echo '<td><a href=rating.php><img src="images/star.jpg"></a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}
*/
                        



// ------------------------------------------------------------------------------------------------

include('footer.php');
?>