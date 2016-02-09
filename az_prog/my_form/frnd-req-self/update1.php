<?php
error_reporting();

mysql_connect("localhost","root","");
mysql_select_db("student");

session_start();
$uid=$_SESSION["sid"];

if(isset($_POST['update'])) {
	

	$id=$_POST["rowid"];
	$username =$_POST["usrname"];
	$pass =$_POST["pass"];
	$email =$_POST["email"];
	$address =$_POST["address"];
	$gender =$_POST["gender"];
	$choice =$_POST["choice"];
	$language =$_POST["language"];
	$lan = implode(",",$language);

	$sql ="UPDATE register SET 
				password='$pass',
				username='$username',
				email='$email',
				address='$address',
				gender='$gender',
				choice='$choice',
				language='$lan'
				WHERE id='$id'";
	echo mysql_query($sql) or die(mysql_error());
	header("location:form2_select.php?msg=Data Updated succesfully");
}
else {
	if(isset($_POST['update_dis'])) {
		
     $img =$_FILES["dis_pic"]["name"];
	
    move_uploaded_file($_FILES["dis_pic"]["tmp_name"],"images/$img");
	
 $sql ="UPDATE register SET 
				pic='$img'
				WHERE id='$uid'";
				
				echo mysql_query($sql) or die(mysql_error());
	header("location:home.php?msg=Updated DP successfully");

}
}
?>








