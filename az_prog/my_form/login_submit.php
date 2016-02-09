
<?php
if (isset($_POST["user_login"])) {

session_start();
mysql_connect("localhost","root","");
mysql_select_db("student");

$username=$_POST["usrlogin"];
$password=$_POST["passlogin"];

echo $sql="SELECT * from register where username='$username' and password='$password'";
$result =mysql_query($sql) or die(mysql_error());
$row =mysql_fetch_array($result);

$id =$row["id"];
$_SESSION["sid"]=$id;
 $check = mysql_num_rows($result);

if($check==1){
	header("location:home.php");
}
else {
	header("location:login.php?msg=Your entry is not valid");
}
}
else { 
    header("location:form2.php");
}

?>

