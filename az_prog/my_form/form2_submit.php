<!DOCTYPE html>
<html>
<body bgcolor="lightgrey">
<?php
if(isset($_POST["form2_submit"])) {
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("student");
?>
<h2 align="center" style="color:green">
<?php
 echo "CONGRATULATION!....Your account is created";?></h2>
 <?php
 
 if ( isset( $_POST['fullname'] ) )
  $fullname = htmlentities ( trim ( $_POST['fullname'] ) , ENT_NOQUOTES );
 
 echo "Welcome ".$username =$_POST["usrname"];
 $finalusername = ucfirst(strtolower($username));// ram singh or RAM SINGH== Ram singh
  $finalusernamedone = ucwords(strtolower($username)); // ram singh OR RAM SINGH== Ram Singh
  $usernameinlower = strtolower($finalusernamedone);
  echo "<br>";
echo "You set your password is ".$pass =$_POST["pass"];
echo "<br>";
echo "Your email id is ".$email =$_POST["email"];
echo "<br>";
echo "Your address is ".$address =$_POST["address"];
echo "<br>";
echo "You select your gender as ".$gender =$_POST["gender"];
echo "<br>";
echo "Your city is ".$choice =$_POST["choice"];
echo "<br>";
$language =$_POST["laguage"];
/*echo $language[0];
echo $language[1];
echo $language[2];
echo $language[3];*/
echo "Your spoken and understandable language: ".$lan = implode(",",$language);
echo "<br>";

echo $img =$_FILES["pic"]["name"];
move_uploaded_file($_FILES["pic"]["tmp_name"],"images/$img");

$birthday = $_POST["b_day"];

 $sql ="insert into register(username,fullname,password,email,address,gender,choice,language,b_day,age,pic)values('$usernameinlower','$fullname','$pass','$email','$address','$gender','$choice','$lan','$birthday','$img')";
mysql_query($sql) or die(mysql_error());

	 header("location:login.php");

}
else {
	if(isset($_POST["msg_submit"])) {
	
	mysql_connect("localhost","root","");
    mysql_select_db("student");
	    $senderid =$_POST["sender_id"];

 $sendername =$_POST["sender_name"];
    $receiverid =$_POST["receiver_id"];

    $receivername =$_POST["receiver_name"];
    $msgmatter =$_POST["msg_matter"];



 $newtable ="insert into messages(senderid,sendername,receiverid,receivername,msgmatter)values('$senderid','$sendername','$receiverid','$receivername','$msgmatter')";
mysql_query($newtable) or die(mysql_error());
     
	 header("location:home.php?msg=your msg sent");
}
	
	
}
?>


</body>
</html>