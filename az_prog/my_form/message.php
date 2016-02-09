<?php
/*session_start();
$uid=$_SESSION["sid"];
*/

session_start();
$uid=$_SESSION["sid"];

require_once('main_class.php'); 
$obj = new parent_data();

$msg_res = $obj->for_msg('register',$uid);
$bring =mysql_fetch_array($msg_res);



$get_id=$_GET["id"];
$result =$obj->for_msg('register',$get_id);
$row =mysql_fetch_array($result);

//echo $lan[0];
//print_r($lan);
 ?> 
 

<!DOCTYPE html>
<html>
<head>
<title>message</title>
</head>

<body bgcolor="#FF9933">
<?php include("header.php");?>
<form action="form2_submit.php" method="post" />
<table align="center" bgcolor="#FFCC33">
<tr>
     <th align="right" style="color:#369">From</th>
  <td>:</td>
  <td><?php echo $bring["fullname"];?></td>
</tr>
<tr>
  <th align="right" style="color:#369">To</th>
  <td>:</td>
  <td><input type="text" name="receiver_name" value="<?php echo $row["fullname"];?>"\></td>
  </tr>
  <tr>
  <th align="center">Your message</th>
  <td>:</td>
  <td><textarea rows="8" cols="20" name="msg_matter"></textarea></td>
  </tr>
  <tr>
  <td colspan="3" align="right">
    <input type="submit" name="msg_submit" value="Send"/>
    <input type="hidden" name="sender_name" value="<?php echo $bring["fullname"];?>"\>
    <input type="hidden" name="sender_id" value="<?php echo $bring["id"];?>"/>
     <input type="hidden" name="receiver_id" value="<?php echo $row["id"];?>"/>

  </td>
  </tr>
  
</table>
</form>
</body>
</html>