<?php
include("dbclass.php");
$obj = new db();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";


$obj->database($hostname,$username,$password,$database);

$username =$_POST["usrname"];
$pass =$_POST["pass"];
$email =$_POST["email"];
$address =$_POST["address"];
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
?>