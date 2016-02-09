<?php 
if(isset($_POST["edit_catgry"])) {
	
	mysql_connect("localhost","root","");
	mysql_select_db("student");

	 $id=$_POST["catgryid"];
	$catgrychnge=$_POST["catgry_chnge"];
	
	 $sql ="UPDATE add_category SET namecategory='$catgrychnge' where id='$id'";
	mysql_query($sql) or die(mysql_error());
	header("location:add_category.php");
	
}
?>