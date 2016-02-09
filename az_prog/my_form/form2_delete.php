
<?php
mysql_connect("localhost","root","");
mysql_select_db("student");

$id=$_GET["id"];

$sql = "DELETE from register where id=".$id;
$result = mysql_query($sql) or die(mysql_error());
//$row = mysql_fetch_array($result);

header("location:form2_select.php?msg=data deleted");


 ?> 
   <!-- Below this comment everthing is useless,what we are doing actually ,in that php work the lower is       not use-->
 <!DOCTYPE html >
<html>
<head>
<title>form_delete</title>
</head>

<body style="background-color:lightgrey">
<form action="form2_submit.php" method="post">

<table bgcolor="#FFD9B3"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:red" >Registration form of user for delete</td> </tr>
    <tr>
      <td align="right">username</td>
      <td>: </td>
      <td><input type="text" placeholder="username" name="usrname"  value="<?php echo $row["username"]?>"/></td>
    </tr>
    <tr>
      <td align="right">password</td>
      <td>: </td>
      <td><input type="password" placeholder="password" name="pass" value="<?php echo $row["password"]?>" > </td>
      </tr>
      <tr>
      <td align="right">Email</td>
      <td>:</td>
      <td><input type="email" placeholder="email address" name="email" value="<?php echo $row["email"]?>"/>
      </td>
      </tr>
      <tr>
      <td align="right">gender </td> 
      <td>: </td>
      <td> male<input type="radio" name="gender" value="m" value="<?php echo $row["gender"]?>"  />
           female<input type="radio" name="gender"  value="f" value="<?php echo $row["gender"]?>"  /></td>
    </tr>
    <tr>
      <td align="right">address</td>
      <td>: </td>
      <td><textarea   placeholder="address"  name="address" value="<?php echo $row["address"]?>"></textarea> </td>
    </tr>
    <tr>
      <td align="right">city </td>
      <td>: </td>
      <td>
        <select name="choice" value="<?php echo $row["choice"]?>" >
         <option></option>
        <option>bangalore</option>
        <option>indore</option>
        <option>other</option>
      </select ></td>
    </tr>
    <tr>
      <td align="right">languages  </td>
      <td>: </td>
      <td> 
      hindi<input type="checkbox" name="laguage[]" value="hindi"/>
      english<input type="checkbox"  name="language[]" value="english"/>
      french<input type="checkbox"  name="language[]" value="french"/>
      others<input type="checkbox"  name="language[]" value="others"/> </td>
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
    	<input type="submit" value="submit" />
    </td>
</tr>
</table>
</form>
</body>
</html>