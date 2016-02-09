<?php
mysql_connect("localhost","root","");
mysql_select_db("student");

$id=$_GET["id"];
$prdtable ="SELECT * from add_product  where id=".$id;
$result=mysql_query($prdtable) or die(mysql_error());
//$bring =mysql_fetch_array($result);

?>

<html>
<body>
<form action="add_product_submit.php" method="post">
<table width="100" border="0">
<?php while($bring = mysql_fetch_array($result)) {?>
  <tr>
    <td width="66">category</td>
    <td width="4">&nbsp;</td>
    <td width="365"><?php echo $bring["prdtcatgry"];?></td>
  </tr>
   <tr>
    <td>Product name</td>
    <td>&nbsp;</td>
    <td><?php echo $bring["prdtname"];?></td>
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
  <tr>
    <td colspan="3" align="center"><input type="submit" name="prdt_buy" value="Add to cart"/></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>