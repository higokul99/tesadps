<?php 
include('tpheader.php');
 
                        
include('mastercontroller.php');
$sql = mysql_query( "SELECT MAX( vid ) AS max FROM `report_accident`;" );
    $row = mysql_fetch_array( $sql );
    if($row['max']>=0)
        $aid = $row['max'] + 1;

$sql2 = mysql_query( "SELECT x  FROM `off_reg` where;" );
    $row2 = mysql_fetch_array( $sql2 );
    if($row2['max']>=0)
        $tp_id = $row2['max'] + 1;
?>
<div>
	<form>
		<input type="text" name="aid" value="<?php echo $aid ?>" readonly>
		<input type="text" name="tp_id" value="<?php echo $tp_id ?>" readonly>
		<input type="text" name="user_id">
		<input type="date" name="date">
		<input type="time" name="time">
		<input type="text" name="status">

	</form>
</div>

<?php
include('footer.php');
?>