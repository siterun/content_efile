
<?php
mysql_connect("localhost","root","");
mysql_select_db("student");

$id=$_GET["id"];

$sql = "UPDATE add_category SET trash='1' WHERE id=".$id;
$result = mysql_query($sql) or die(mysql_error());
//$row = mysql_fetch_array($result);

header("location:add_category.php?msg= deleted");


 ?> 
