<?php 
 mysql_connect("localhost","root","");
 mysql_select_db("student");
 
 $prdtable='SELECT * from add_product';
 $result=mysql_query($prdtable) or die(mysql_error());
// $catch =mysql_fetch_array($result);
 
?>

<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>

<body bgcolor="#99CC33">
<form action="login_submit.php" method="post" >
<table bgcolor="#FFD9B3" width="32%"  align="center" >
<tr>
  <td colspan="3" align="center" style="color:#C00"><h2> <?php
                            if(isset($_GET["msg"])){
	                             echo $_GET["msg"];
                                     }
                                  ?></h2></td>
   </tr>
  <tr>   
  <th height="50" align="right" bordercolorlight="#003333" style="color:blue" border="1">Username</th>
   <td>: </td>
      <td><input type="text" placeholder="ur username" name="usrlogin" /></td>
      </tr>
      <tr>
      <th height="51" align="right" bordercolorlight="#003333" style="color:blue" border="1">Password</th>
   <td>: </td>
      <td><input type="password" placeholder="ur password" name="passlogin"  /> </td>
</tr>
<tr>
  <td align="center" colspan="3"><input type="submit" name="user_login" value="Log in"></td>
  </tr>
  </table>
<table bgcolor="#FFD9B3" width="32%"  align="center" >
  <tr>
  <td colspan="3"></td>
  </tr>
  <tr>
  <td align="center" colspan="3"><input type="submit" name="create_account" value="Create account"></td>
  </tr>

</table>

<table width="148" border="0" align="left">
<?php while($catch=mysql_fetch_array($result)) { ?>
  <tr>
    <td width="60"><a href="prdt_display.php?id=<?php echo $catch["id"]; ?>"><img src="prdtimages/<?php echo $catch["prdtphoto"];?>" alt="product photo" width="58" height="53"></a></td>
    <td width="124"><a href="prdt_display.php?id=<?php echo $catch["id"]; ?>" style="text-decoration:none"><?php echo $catch["prdtname"] ;?></a></td>
  </tr>
  <?php } ?>
  
</table>

 

</form>
</body>
</html>