<?php
session_start();
$uid = $_SESSION["sid"];
mysql_connect('localhost','root','');
mysql_select_db('student');

//if(isset($_POST["frnd_req"])){
/*
$_0 = 'ADD FRIEND';
$_1 =  'SENT REQUEST';
$_2 =  'CANCEL REQUEST';//not show in database only the sender could see this on his profile to cancel the request
$_3 =  'CONFIRM REQUEST';
*/

$sessionquery = "select *from register where id='$uid'";
$sessionquery_check = mysql_query($sessionquery) or die(mysql_error());
$sessionquery_result =mysql_fetch_array($sessionquery_check);

 $id =intval($_GET["id"]);
 $receivequery = "select *from register where id='$id'";
$receivequery_check = mysql_query($receivequery) or die(mysql_error());
$receivequery_result =mysql_fetch_array($receivequery_check);


 $sender_id = $sessionquery_result["id"];
 $receiver_id = $receivequery_result["id"];
$sender_name = $sessionquery_result["username"];
 $receiver_name = $receivequery_result["username"];

 $query = "insert into friend_requests (sender_id,sender_name,receiver_id,receiver_name,req_status)
values('$sender_id','$sender_name','$receiver_id','$receiver_name','1')";
$query_check = mysql_query($query) or die(mysql_error());

//header("location:form2_view.php?id=$receiver_id");
//}

?>
<button type="button" name="cancel_req" value="'.$id.'" onClick="cancelreq(this.value)" >
       Cancel Request</button>