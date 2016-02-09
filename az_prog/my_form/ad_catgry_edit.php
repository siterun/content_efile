<?php
mysql_connect("localhost","root","");
	mysql_select_db("student");
	
   $id=$_GET["id"];
   $sql = "SELECT * from add_category where id=".$id;
   $check = mysql_query($sql) or die(mysql_error());
 	$bring =mysql_fetch_array($check);
?>


<!DOCTYPE html>
<html>
<head><title>ad_catgry_edit</title>
</head>
<body bgcolor="#FF9933">
<form action="ad_cat_edit_submit.php" method="post">
<table width="917" border="0">
 <tr>
    <td colspan="3"><?php include("header.php");?></td>
    </tr>
  <tr>
    <td width="99">&nbsp;</td>
    <td width="276"><table>
<tr>
   <td><input type="text" name="catgry_chnge" value="<?php echo $bring["namecategory"];?>" /></td>
</tr>
<tr>
   <td><input type="hidden" name="catgryid" value="<?php echo $bring["id"] ;?>"/></td>
 </tr>
 <tr>
  <td><input type="submit" name="edit_catgry" value="Update category"/></td>
</tr>
</table></td>
    <td width="520">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="3">Edit category</td>
  </tr>
</table>



</form>
</body>
</html>

   
