<?php
if(isset($_POST["submit_form"])) {
error_reporting(0);
include("dbclass.php");
$obj = new db();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";

// 
$obj->database($hostname,$username,$password,$database);
$err ="error";
switch ($err) {
	case "error":
	if(empty($_POST["usrname"])) {
	 header("Location:form2_val_php.php?err");}
	
	default :
	$username =$_POST["usrname"];
	if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
	header("location:form2_val_php.php?err1");
}
  break ;
}
  if(empty($_POST["pass"])) {
 header("location:form2_val_php.php?error");
}
$pass =$_POST["pass"];
if(empty($_POST["email"])) {
   }
   else 
$email =$_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("location:form2_val_php.php?error");
} else
$address =$_POST["address"];
if(empty($_POST["gender"])) {
 header("location:form2_val_php.php?error");
} else
$gender =$_POST["gender"];
$choice =$_POST["choice"];
$language =$_POST["laguage"];
$lan = implode(",",$language);
echo $img =$_FILES["pic"]["name"];
move_uploaded_file($_FILES["pic"]["tmp_name"],"images/$img");

$tablename = "register";
$database_f = "username,password,email,address,gender,choice,language,pic";
$user_value ="'$username','$pass','$email','$address','$gender','$choice','$lan','$img'";

$obj->insert($tablename,$database_f,$user_value);
}
?>
