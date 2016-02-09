
<?php
include("dbclass.php");
$obj = new database;

/* $hostname = "localhost";
$username = "root";
$password = "";
$database = "student"; */
	
//$obj->database();	

$tablename ="register";
echo $id=$_GET["id"];
$obj->delete($tablename,$id);

header("location:select.php?msg=data deleted");
//$row = mysql_fetch_array($result);

?>