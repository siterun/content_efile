<!DOCTYPE html >
<html>
<head>
<title>A FORM </title>
<style>
h5 {color:#F00; } 
</style>
</head>
<body style="background-color:lightgrey">

<?php
error_reporting(0);		

if(isset($_POST["submit_form"])) {
include("dbclass.php");
$obj = new db();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";

$obj->database($hostname,$username,$password,$database);

	if(empty($_POST["usrname"])) {
		$name_error = "write the name";
	} else {
$username =$_POST["usrname"];
	if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
	  $name_error = "only letters and white space allowed ";
    } }
    if(empty($_POST["pass"])) {
	  $password_error = "Set the password";
    }
$pass =$_POST["pass"];
   if(empty($_POST["email"])) {
		$email_error = "";
	}  else {
 $email =$_POST["email"];
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "Invalid email format";
    } } 
$address =$_POST["address"];
   if(empty($_POST["gender"])) {
   $gender_error ="Select ur gender";
    } 
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
	}?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<table bgcolor="wheat"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:blue" >Registration form of user</td> </tr>
    <tr><td style="color:red" colspan="4">*Required fields</td></tr>
    <tr>
      <td width="73" align="right" valign="top">username</td>
      <td>: </td>
      <td width="20" ><input type="text" placeholder="username" name="usrname" /></td>
   <td align="left" style="color:red">*<?php echo $name_error; ?></td>
    <!-- php validation -->
    </tr>
    <tr>
      <td align="right">Your profile</td>
      <td>: </td>
      <td><input type="file" placeholder="Profile picture" name="pic" /></td>
    </tr>
    <tr>
      <td align="right">password</td>
      <td>: </td>
      <td><input type="password" placeholder="password" name="pass"  /></td> 
  <td style="color:red" align="left">*<?php echo $password_error ;?></td>
      <!-- php validation -->
      </tr>
      <tr>
      <td align="right">Email</td>
      <td>:</td>
      <td><input type="text" placeholder="email address" name="email"/></td>
  <td align="left" style="color:#933"><?php echo $email_error;?></td>
      </tr>
      <tr>
      <td align="right">gender </td> 
      <td>: </td>
      <td> male
        <input type="radio" name="gender" value="male"  />
        female
        <input type="radio" name="gender"  value="female"  /></td>
   <td style="color:red" align="left">*<?php echo $gender_error;?></td>
  <!-- php validation -->
    </tr>
    <tr>
      <td align="right">address</td>
      <td>: </td>
      <td><textarea   placeholder="address"  name="address"></textarea> </td>
    </tr>
    <tr>
      <td align="right">city </td>
      <td>: </td>
      <td>
        <select name="choice" >
         <option></option>
        <option>bangalore</option>
        <option>indore</option>
        <option>other</option>
      </select ></td>
    </tr>
    <tr>
      <td align="right">languages </td>
      <td>: </td>
      <td> 
      hindi<input type="checkbox"    name="laguage[]" value="hindi"/>
      english<input type="checkbox"  name="laguage[]" value="english"/>
      french<input type="checkbox"  name="laguage[]" value="french"/>
      others<input type="checkbox"  name="laguage[]" value="others"/> </td>
    </tr>
    <!--
    <tr>
      <td>final mode </td>
      <td> : </td>
      <td><select >
        <option>
          <input type="submit"  />
          </option>
        <option>
          <input type="submit" value=" save" />
          </option>
      </select>
    </td>
</tr>-->
<tr>
	<td colspan="3" style="text-align:center;">
    	<input type="submit" name="submit_form" value="submit" />
    </td>
</tr>
</table>
</form>
</body>
</html>