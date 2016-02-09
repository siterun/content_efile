<?php
session_start();
$uid=$_SESSION["sid"];

if(!isset($_SESSION["sid"])){
	header("location:login.php");
}
mysql_connect("localhost","root","");
mysql_select_db("student");

 $sql ="SELECT * from register where id='$uid'";
$result =mysql_query($sql) or die(mysql_error());
$row =mysql_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
<title>Update_display_picture</title>
</head>

<body bgcolor="#FF9933">
<form action="update1.php" method="post" enctype="multipart/form-data">
<table align="center" width="250" height="300" >
<tr>
<th align="center" bgcolor="#999966">Your Display Picture</th>
<td>:</td>
<td><input type="file" name="dis_pic"/><img src="images/<?php echo $row["pic"];?>" width="100" height="100">
</td>
</tr>
<tr>
<td colspan="3" align="center">
                <input type="hidden" name="rowid" value="<?php echo $row["id"] ;?>">
                <input type="submit" name="update_dis" value="SET"></td>
</tr>
</table>
</form>
</body>
</html>