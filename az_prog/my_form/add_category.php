<?php 

	mysql_connect("localhost","root","");
	mysql_select_db("student");

   $sql = "SELECT * from add_category where trash='0'";
   $check = mysql_query($sql) or die(mysql_error());
  

   $trshtable = "SELECT * from add_category where trash='1'";
   $result = mysql_query($trshtable) or die(mysql_error());
   


?>
<!DOCTYPE >
<html>
<head>
<title>Add category</title>
<style>
body{background-clip:border-box; background-color:#CC0}
h2 {drop-initial-after-align:hanging}
.category {text-align:center}
h3 {font-size:24px; 
      text-align:left}
h4 {font-size:24px; 
      text-align:center;
	  color:blue }

     
        
</style>
</head>
<body>
<iframe src="add_product.php" style="border:5px dotted red" width="50%" height="50%"></iframe>

<?php include("header.php");?>


<h4>
<?php if(isset($_GET["msg"])) {
 echo $_GET["msg"];   }  ?>
 </h4>
 <div class="category">
<form action="add_category_submit.php" method="post">
<pre><h2>Category name</h2><input type="text" name="catgry_name"/>
                 <input type="submit" name="category_name"  value="Add category"></pre>
 </div>
<table width="907" border="0">
  <tr>
    <td width="39%"></td>
    <td width="51%" align="center" valign="top"><table align="left" bgcolor="#FF9933" width="300">
<caption><h3>Your Category list</h3></caption>
<?php while($bring = mysql_fetch_array($check)) {?>
<tr>
  <td>Category name</td>
  <td>:</td>
  <td><?php echo $bring["namecategory"];?></td>
  <td><a href="ad_catgry_trash.php?id=<?php echo $bring["id"];?>">Delete n Trash</a></td>
  <td><a href="ad_catgry_edit.php?id=<?php echo $bring["id"];?>"style="text-decoration:none">Edit</a></td>
</tr>
  <?php  }?>
</table></td>
    <td width="10%" ></td>
  </tr>
</table>
<table width="355" border="0" align="center" bgcolor="#FF9933">
<caption><h3>Trash Of Deleted Category</h3></caption>
<tr>
   <td colspan="2"></td>
</tr>
  <?php while($fetch = mysql_fetch_array($result))  { ?>
  <tr>
    <td width="41"><?php echo $fetch["namecategory"];?></td>
   <td width="304"><input type="submit" name="rstor_catgry" value="RESTORE"/>
        <input type="text" name="trasher_id" value="<?php echo $fetch["id"];?>"/></td>
  </tr>
  <?php } ?>
</table>







</form>
</body>
</html>

