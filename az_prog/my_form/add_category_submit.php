<?php 

if(isset($_POST["category_name"])) {	
	mysql_connect("localhost","root","");
	mysql_select_db("student");

	 $catgryname =$_POST["catgry_name"];



  $sql ="insert into add_category(namecategory)values('$catgryname')";
 mysql_query($sql) or die(mysql_error());
 
 header("location:add_category.php?msg=Entry of category is added");
}
if(isset($_POST["rstor_catgry"])) {
	mysql_connect("localhost","root","");
	mysql_select_db("student");
	
	echo $trasherid=$_POST["trasher_id"];

echo $sql = "UPDATE add_category SET trash='0' WHERE id=".$trasherid;
$result = mysql_query($sql) or die(mysql_error());
//$row = mysql_fetch_array($result);

//header("location:add_category.php?msg= deleted");
}
?>









