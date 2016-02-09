<?php
include("dbclass.php");
$obj= new db;

$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";
	
$obj->database($hostname,$username,$password,$database);
	
	$tablename ="register";
	$id =$_GET["id"];
	$result=$obj->select_view($tablename,$id);
	$row =mysql_fetch_array($result);

?> 
 
 
<!DOCTYPE >
<html>
<head>
<title>form_view</title>
</head>


<body bgcolor="#CCCC33" >
<table border="0" align="center" width="50%">
    <tr>      
       <th width="40%" align="right" style="color:#63F">Id:</th>
       <td width="60%" ><?php echo $row["id"];?></td>
    </tr>
    <tr>
      <th align="right" style="color:#63F">Username:</th>
      <td ><?php echo $row["username"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">password:</th>
       <td ><?php echo $row["password"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">email:</th>
       <td ><?php echo $row["email"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">address:</th>
       <td ><?php echo $row["address"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">gender:</th>
       <td ><?php echo $row["gender"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">city:</th>
       <td ><?php echo $row["choice"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">language:</th>
       <td ><?php echo $row["language"]?></td>
    </tr>
</table>


</body>
</html>