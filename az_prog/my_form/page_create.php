<?php
session_start();
$uid=$_SESSION["sid"];
mysql_connect("localhost","root","");
mysql_select_db("student");

$query_check =mysql_query("select *from register where id='$uid'") or die(mysql_error());
$query_check_result = mysql_fetch_array($query_check);
?>
<html>
<body style="background-color:green;">
<form action="page_done.php" method="post" enctype="multipart/form-data">
<?php //include("header.php") ;?>
<table width="525" border="1" align="center">
  <tr>
    <td width="144">&nbsp;</td>
    <td width="195"></td>
    <td width="164">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table>
    <tr> 
      <td width="35">Your Page name: </td>
      <td width="266"><input type="text" name="page_name" maxlength="100" /> </td>
     </tr>
     <tr>
     <td>About Page :</td>
     <td><textarea cols="8" name="about_page" rows="4"></textarea></td>
     </tr>
     <tr>
      <td>Your Page Profile Pic:</td>
      <td><input type="file" name="page_photo" /></td>
     </tr>
     <tr>
      <td align="center" colspan="2"><input type="text" name="user_id" value="<?php echo $query_check_result["id"];?>" />
      <input type="submit" name="page_done" value="Create My Page"/></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>
</body>
</html>