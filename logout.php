<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("tesadb");


session_start();
session_destroy();
//unset($_SESSION["user_id"]);
header("Location:index.php");


?>