<?php
mysql_connect("localhost","root","");
mysql_select_db("student");

$id=$_GET["id"];

$sql = "DELETE from add_product where id=".$id;
$result = mysql_query($sql) or die(mysql_error());
//$row = mysql_fetch_array($result);

header("location:ad_all_prdt_view.php?msg=data deleted");


 ?> 
