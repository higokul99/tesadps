<?php
include('userheader.php');
include('mastercontroller.php');

$query = mysql_query("select amount from addfine;");
$row = mysql_fetch_row($query);
$c_row = current($row);
echo $c_row;

include('footer.php');

?>