<?php 

	mysql_connect("localhost","root","");
	mysql_select_db("student");

/*     $sql = "SELECT * from add_category ";
     $result = mysql_query($sql) or die(mysql_error());
*/
    $id=$_GET["id"];
   $prdtable = "SELECT * from add_product where id='$id'";
   $check = mysql_query($prdtable) or die(mysql_error());
	$bring =mysql_fetch_array($check);

?>
<!DOCTYPE html>
<html>
<head><title>add prdt view</title>
<style>
body{background-clip:border-box; background-color:#CC0}
h2 {drop-initial-after-align:hanging}
.category {text-align:center}
h3 {text-align:left;
     color:#33F;
	 font-size:36px 
	 }

</style>
</head>
<body>
<form action="ad_prdt_edit_update.php" method="post" enctype="multipart/form-data">
<table width="100%" border="0">
  <tr>
    <td"colspan="3"><?php include("header.php");?></td>
  </tr>
  <tr>
    <td></td>
    <td valign="top" align="center"><table align="center" border="0" bgcolor="#FF9933">
  <tr>
    <td>Product category</td>
    <td>:-</td>
    <td><input type="text" name="prdt_catgry" value="<?php echo $bring["prdtcatgry"] ;?>"/></td>
  </tr>

  <tr>
    <td>Product name</td>
    <td>:-</td>
    <td><input type="text" name="prdt_name" value="<?php echo $bring["prdtname"] ;?>"/></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td>:-</td>
    <td><input type="text" name="prdt_price" value="<?php echo $bring["prdtprice"];?>"/></td>
  </tr> 
   <tr>
    <td>Product description</td>
    <td>:-</td>
    <td><textarea name="prdt_descrton"><?php echo $bring["productdescptn"] ;?></textarea></td>
  </tr> 
  <tr>
    <td>Product Quantity</td>
    <td>:-</td>
    <td><input type="text" value="<?php echo $bring["prdtquantity"] ;?>" name="prdt_quantity"/></td>
  </tr>
  <tr>
    <td>Product Photo</td>
    <td>:-</td>
    <td><input type="file" name="prdt_photo"/><img width="100" height="100" src="prdtimages/<?php echo $bring["prdtphoto"];?>" /></td>
  </tr>
  <tr>
  <td></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="hidden" name="pr_id" value="<?php echo $bring["id"];?>"/>
    <input type="submit" name="add_prdt_edit" value="Editting Done"/></td>
  </tr>
</table></td>
    <td></td>
  </tr>
  <tr>
    <td align="center" colspan="3">Editting in product</td>
  </tr>
</table>


</form>
</body>
</html>