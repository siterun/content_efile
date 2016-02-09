<?php 
if(isset($_POST["like"])) {
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("like");

$name = $_POST["name"];

 $newtable ="UPDATE like_table SET like_trash='1' where name='$name'";
mysql_query($newtable) or die(mysql_error());
header ("location:like.php");
}
?>