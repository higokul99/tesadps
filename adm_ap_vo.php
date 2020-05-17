<?php
include('adminheader.php');
?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Approve Vehicle Officer</h1>
                    </div>
<?php
// -----------------------------------------------------------------------------
//include('mastercontroller.php');
//viewtableforuserAP("select * from off_reg where off_status='0' and type='officer'","APoff");

$query = mysql_query('select * from offreg');
if (!$query)
  {
    $message = 'ERROR:' . mysql_error();
    return $message;
  }
  else
  {
    //$i = 0;
 echo '<table border=1 align=center style="width:80%"><tr>';
 echo "<th align=center>Officer_ID</th><th align=center>Photo</th><th align='center'>Name</th><th align=center>Verification</th>";


  
  $maxq =mysql_query("select max(off_id) as max from offreg");
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

  $val='APoff';
  //$row = mysql_fetch_row($query);
  while ($unique_id<=$maxvalue)
  {
  echo '<tr>';
  $count = count($rr);

  $q = mysql_query(
  	"select * from offreg where 
  		off_id = '".$unique_id."' and 
  		off_status=0 ");

  $r = mysql_fetch_array($q);
  
  $y = 0;
  if($r['off_id']!=""){
      while ($y <= $count)
        {
        
        if($y==0)
        {
          echo '<td align=center>' . $r['off_id'] . '</td>';
          
        }
      
      if($y==3)
        {
          //$i1=current($row);
          //next($row);
          if ($r['image'] != "")
            {
              //$row = mysql_fetch_array($q);
              echo "<td><img src=userdocs/".$unique_id."_oprofilepic.jpg height='150' width='150'></td>";
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
          echo "<td align=center><a href='validateoff.php?id=$unique_id&val=$val'>view</a></td>";
         
          
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
</div>
<?php
// -----------------------------------------------------------------------------
include('footer.php');
?>