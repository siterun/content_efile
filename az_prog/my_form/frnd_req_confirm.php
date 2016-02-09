<?php 
session_start();
$uid =$_SESSION["sid"];

/*
$_0 = 'ADD FRIEND';
$_1 =  'SENT REQUEST';
$_delete =  'CANCEL REQUEST';//not show in database only the sender could see this on his profile to cancel the request
$_2 =  'CONFIRM REQUEST';
*/

mysql_connect('localhost','root','');
mysql_select_db('student');

echo $sender_id = intval($_GET["id"]);
echo $receiver_id = $uid;
	echo "<br>" ;
	echo $query = "update friend_requests set req_status='2' where sender_id='$sender_id' AND receiver_id='$receiver_id'";
$query_check = mysql_query($query) or die(mysql_error());

//header("location:form2_frnd+req.php");


?>


