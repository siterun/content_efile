<?php 
session_start();
$uid =$_SESSION["sid"];

/*
$_0 = 'ADD FRIEND';
$_1 =  'SENT REQUEST';
$_2 =  'CANCEL REQUEST';//not show in database only the sender could see this on his profile to cancel the request
$_3 =  'CONFIRM REQUEST';
*/

mysql_connect('localhost','root','');
mysql_select_db('student');

 $sender_id = $uid;
$receiver_id = intval($_GET["id"]);
	 "<br>" ;
	 $query = "DELETE from friend_requests where sender_id='$sender_id' AND receiver_id='$receiver_id' And req_status='1'";
$query_check = mysql_query($query) or die(mysql_error());

//header("location:form2_frnd+req.php");


?>
<button type="button" name="cancel_req" value="'.$id.'" onClick="cancelreq(this.value)" >
       Add As Friend</button>