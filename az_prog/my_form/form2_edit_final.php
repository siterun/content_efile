<?php
session_start();
$uid=$_SESSION["sid"];

mysql_connect("localhost","root","");
mysql_select_db("student");

//$id=$_GET["id"];
$sql ="SELECT * from register where id=".$uid;
$result =mysql_query($sql) or die(mysql_error());
$row =mysql_fetch_array($result);
$gender = $row["gender"];
$choice = $row["choice"];
$language = $row["language"];
$lan = explode(",",$language);

//echo $lan[0];
//print_r($lan);
 ?> 
 
<!DOCTYPE html >
<html>
<head>
<title>update trial</title>
</head>

<body style="background-color:lightgrey">
<?php include("header.php");?>
<form action="update1.php"  method="post">

<table bgcolor="#FFD9B3"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:red" >Registration form of user for editting</td> </tr>
    <tr>
      <td align="right">Full name</td>
      <td>: </td>
      <td><input type="text" placeholder="Full name" name="fullname"  value="<?php echo $row["fullname"];?>"/></td>
    </tr>
    <tr>
      <td align="right">Your Profile</td>
      <td>: </td>
      <td><input type="file" placeholder="Profile picture" name="pic" value="<?php echo $row["pic"]?>"/></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td>: </td>
      <td><input type="" placeholder="password" name="pass" value="<?php echo $row["password"]?>" /> </td>
      </tr>
      <tr>
      <td align="right">Email</td>
      <td>:</td>
      <td><input type="email" placeholder="email address" name="email" value="<?php echo $row["email"]?>"/>
      </td>
      </tr>
      <tr>
      <td align="right">Gender </td> 
      <td>: </td>
      <td>
      male<input type="radio" name="gender" value="male"  <?php if($gender=="male"){echo "checked";}?> />      <!--If we directly write "checked" just after the value in the 'input type 'option then it always       show checked to this option,dont care that which option is checked by user-->
      female<input type="radio" name="gender"  value="female" <?php if($gender=="female"){echo "checked";}      ?> /></td>  <!--If we directly write "checked" just after the value in the 'input type 'option then      it always show checked to this option,dont care that which option is checked by user-->
    </tr>
    <tr>
      <td align="right">Address</td>
      <td>: </td>
      <td><textarea cols="100" rows="10" name="address"><?php echo $row["address"]?></textarea> </td>
    </tr>
    <tr>
      <td align="right">City </td>
      <td>: </td>
      <td>
        <select name="choice">
         <option></option>
        <option <?php if($choice=="bangalore"){echo "selected";}?> >bangalore</option>
        <option <?php if($choice=="indore"){echo "selected";}?> >indore</option>
        <option <?php if($choice=="other"){echo "selected";}?>>other</option>
      </select ></td>
    </tr>
    <tr>
      <td align="right">Languages  </td>
      <td>: </td>
      <td> 
      Hindi<input type="checkbox" name="language[]" value="hindi"
      <?php if(in_array("hindi",$lan)){echo "checked";}?> />
      English<input type="checkbox"  name="language[]" value="english"
      <?php if(in_array("english",$lan)){echo "checked";}?>/>
      French<input type="checkbox"  name="language[]" value="french"
      <?php if(in_array("french",$lan)){echo "checked";}?>/>
      Others<input type="checkbox"  name="language[]" value="others"
      <?php if(in_array("others",$lan)){echo "checked";}?>/> </td>
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
     <input type="hidden" name="rowid"value="<?php echo $row["id"] ;?>"/>
   
    	<input type="submit" value="Submit" name="update" />
    </td>
</tr>
</table>
</form>
</body>
</html>
