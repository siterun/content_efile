<!DOCTYPE html >
<html>
<head>
<title>A FORM </title>
<style>
h5 {color:#F00; } 
</style>
</head>

<?php 

$password_error = "Password is required";

$gender_error = "Gender is required";
$email = "Invalid email format";
?>
<body style="background-color:lightgrey">
<?php
echo $_GET["error"];
echo $_GET["again"];
?>
<form action="form2_submit_val_php.php" method="post" enctype="multipart/form-data">
<table bgcolor="wheat"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:blue" >Registration form of user</td> </tr>
    <tr><td style="color:red" colspan="4">*Required fields</td></tr>
    <tr>
      <td width="73" align="right" valign="top">username</td>
      <td>: </td>
      <td width="20" ><input type="text" placeholder="username" name="usrname" /></td>
   <td align="left" style="color:red">*
    <?php if(isset($_GET["error"])){ 
	                                 echo  "write ur name";
				                   }
		  if(isset($_GET["again"])){ 
								     echo  "only letters n white space allowed";
								   }  ?>
</td>
    <!-- php validation -->
    </tr>
    <tr>
      <td align="right">Your profile</td>
      <td>: </td>
      <td><input type="file" placeholder="Profile picture" name="pic" /></td>
    </tr>
    <tr>
    <tr>
      <td align="right">password</td>
      <td>: </td>
      <td><input type="password" placeholder="password" name="pass"  /></td> 
  <td style="color:red" align="left">*<?php if(isset($_GET["error"])) { echo $password_error;}?></td>
      <!-- php validation -->
      </tr>
      <tr>
      <td align="right">Email</td>
      <td>:</td>
      <td><input type="text" placeholder="email address" name="email"/></td>
  <td align="left" style="color:#933"><?php if(isset($_GET["error"])) { echo $email;  } ?></td>

      </tr>
      <tr>
      <td align="right">gender </td> 
      <td>: </td>
      <td> male
        <input type="radio" name="gender" value="male"  />
        female
        <input type="radio" name="gender"  value="female"  /></td>
   <td style="color:red" align="left">*<?php if(isset($_GET["error"])){echo $gender_error;}?></td>
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
    	<input type="submit" name="form2_submit" value="submit" />
    </td>
</tr>
</table>
</form>
