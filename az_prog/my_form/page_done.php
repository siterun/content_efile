<?php 
session_start();
$uid= $_SESSION["sid"];
mysql_connect('localhost','root','');
mysql_select_db('student');

echo $page_name=$_POST["page_name"];
$page_name_modify = ucfirst(strtolower($page_name));
$page_name_final = ucwords(strtolower($page_name_modify));
$about_page = $_POST["about_page"];
$about_page_modify =ucfirst(strtolower($about_page));

echo $page_photo =$_FILES["page_photo"]["name"];
move_uploaded_file($_FILES["page_photo"]["tmp_name"],"pages photo/$page_photo");

//echo $img =$_FILES["pic"]["name"];
//move_uploaded_file($_FILES["pic"]["tmp_name"],"images/$img");

echo $user_id = $_POST["user_id"];
$query_check= mysql_query("insert into page_create (page_name,about_page,page_photo,user_id)values('$page_name_final','$about_page_modify','$page_photo','$user_id')") or die(mysql_error());


header("location:page_page.php?page_name=$page_name");
?>