<?php 

	mysql_connect("localhost","root","");
	mysql_select_db("student");

     $sql = "SELECT * from add_category ";
     $result = mysql_query($sql) or die(mysql_error());


   $prdtable = "SELECT * from add_product ";
   $check = mysql_query($prdtable) or die(mysql_error());


?>
<!DOCTYPE html>
<html>
<head><title>add product</title>
<style>
body{background-clip:border-box; background-color:#CC0}
h2 {drop-initial-after-align:hanging}
.category {text-align:center}
h3 {text-align:left;
     color:#33F;
	 font-size:36px 
	 }

</style>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("tr:even").css("background-color", "wheat");
});
</script>
</head>
<body>
<h4><?php if(isset($_GET["msg"])) {
	   echo $_GET["msg"];   }  ?></h4>

<form action="add_product_submit.php" method="post" enctype="multipart/form-data">
<?php include("header.php");?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
     <td width="87" height="328" align="right" valign="bottom"></td>
    <td width="823" align="center" valign="top"><table width="308" border="0" bordercolordark="#000000" align="center" bgcolor="#FF9966">
  <tr>
      <td width="70">Select Category</td>
      <td width="9">:-</td>
      <td width="218"><select name="category" >
      <?php while($row = mysql_fetch_array($result)) { ?>
       <option><?php echo $row["namecategory"]."<br>" ;?></option>
       <?php   }  ?> </select></td>
  </tr>
  <tr>
    <td>Product name</td>
    <td>:-</td>
    <td><input type="text" name="prdt_name" placeholder="Product name"/></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td>:-</td>
    <td><input type="text" name="prdt_price" placeholder="Product price" value="Rs."/></td>
  </tr> 
   <tr>
    <td>Product description</td>
    <td>:-</td>
    <td><textarea cols="5" rows="5" placeholder="About the product" name="prdt_descrton"></textarea></td>
  </tr> 
  <tr>
    <td>Product Quantity</td>
    <td>:-</td>
    <td><input type="text" placeholder="Quantity of product" name="prdt_quantity"/></td>
  </tr>
  <tr>
    <td>Product Photo</td>
    <td>:-</td>
    <td><input type="file" placeholder="Product photo" name="prdt_photo"/></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="add_product" value="Add Product"/></td>
  </tr>
</table></td>
    <td width="1"></td>
  </tr>
  <tr> 
    <td></td>
     <td width="823" align="center" valign="top"><table cellspacing="5" bgcolor="#CC9900" width="50%"  align="center" >
  <tr>
  <th border="1" align="center" style="color:red">Id</th>
     <th border="1" align="center" style="color:red">Display pic</th>
  <th  border="1" align="center" style="color:red">prdtcatgry</th>
  <th  border="1" align="center" style="color:red">prdtname</th>
  <th  border="1" align="center" style="color:red">prdtprice</th>
  <th  border="1" align="center" style="color:red">productdescptn</th>
  <th border="1" align="center" style="color:red">prdtquantity</th>
  <th  border="1" align="center" style="color:red">View</th>
  <th  border="1" align="center" style="color:red">Delete</th>
  <th  border="1" align="center" style="color:red">Edit
  </th>
  
</tr>

<?php
while ($bring =mysql_fetch_array($check))
{ ?>
<tr>
<td align="center"><?php echo $bring["id"];?></td>
<td align="center"><img width="100" height="100" src="prdtimages/<?php echo $bring["prdtphoto"];?>" /></td>
<td align="center"><?php echo $bring["prdtcatgry"] ;?></td>
<td align="center"><?php echo $bring["prdtname"]?></td>
<td align="center"><?php echo $bring["prdtprice"]?></td>
<td align="center"><?php echo $bring["productdescptn"]?></td>
<td align="center"><?php echo $bring["prdtquantity"]?></td>

<td align="center"><a class="ex1" href="add_prdt_view.php?id=<?php echo $bring["id"];?>">View</a></td>
<td align="center"><a class="ex2" href="add_prdt_delete.php?id=<?php echo $bring["id"]; ?>" onClick="return confirm()" >Delete</a></td>
<td align="center"><a class="ex3" href="add_prdt_edit.php?id=<?php echo $bring["id"]; ?>">Edit</a></td>
</tr>
<?php }?>
</table></td>
  <td></td>
  </tr>
 </table>


</form>
</body>
</html>

