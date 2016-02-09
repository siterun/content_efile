<?php 
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("like");

$name = $_POST["name"];

 $newtable ="insert into like_table(name)values('$name')";
mysql_query($newtable) or die(mysql_error());
header ("location:like.php")?>
