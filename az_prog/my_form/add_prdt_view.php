<?php 

	mysql_connect("localhost","root","");
	mysql_select_db("student");

/*     $sql = "SELECT * from add_category ";
     $result = mysql_query($sql) or die(mysql_error());
*/
    $id=$_GET["id"];
   $prdtable = "SELECT * from add_product where id='$id'";
   $check = mysql_query($prdtable) or die(mysql_error());


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
<table width="100" border="0" align="center" bgcolor="#FF6666" style="border-radius:10%">
<?php while($bring = mysql_fetch_array($check)) {?>
  <tr>
    <td width="66">category</td>
    <td width="4">&nbsp;</td>
    <td width="365"><?php echo $bring["prdtcatgry"]."<br>" ;?></td>
  </tr>
   <tr>
    <td>Product name</td>
    <td>&nbsp;</td>
    <td><?php echo $bring["prdtname"]."<br>" ;?></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td>&nbsp;</td>
    <td><?php echo $bring["prdtprice"]."<br>" ;?></td>
  </tr>
  <tr>
    <td>Product description</td>
    <td>&nbsp;</td>
    <td><?php echo $bring["productdescptn"]."<br>" ;?></td>
  </tr>
   <tr>
    <td>Quantity of product</td>
    <td>&nbsp;</td>
    <td><?php echo $bring["prdtquantity"]."<br>" ;?></td>
  </tr>
   <tr>
    <td>Product photo</td>
    <td>&nbsp;</td>
    <td><img width="100" height="100" src="prdtimages/<?php echo $bring["prdtphoto"];?>" /><hr></hr><hr></hr></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>