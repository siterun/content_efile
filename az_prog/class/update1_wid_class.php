<?php
include("dbclass.php");
/*session_start();
$uid=$_SESSION["sid"];
*/

$call= new db;

$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";
	
$call->database($hostname,$username,$password,$database);

	$userid=$_POST["rowid"];
	
	$username =$_POST["usrname"];
	$pass =$_POST["pass"];
	$email =$_POST["email"];
	$address =$_POST["address"];
	$choice =$_POST["choice"];
	$language =$_POST["language"];
	$lan = implode(",",$language);

$tableName="register";
$dbFieldName=array('username'=>$username,'password'=>$pass,'email'=>$email,'address'=>$address,'choice'=>$choice,'language'=>$lan);


$call->update($tableName,$dbFieldName,$userid);
	
	header("location:select.php?msg=Data Updated succesfully");
?>