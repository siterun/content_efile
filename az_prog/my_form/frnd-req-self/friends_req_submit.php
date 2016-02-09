<?php

mysql_connect('localhost','root','');
mysql_select_db('student');

if(isset($_POST["frnd_req"])){
/*
$_0 = 'ADD FRIEND';
$_1 =  'SENT REQUEST';
$_2 =  'CANCEL REQUEST';//not show in database only the sender could see this on his profile to cancel the request
$_3 =  'CONFIRM REQUEST';
*/


echo $sender_id = $_POST["sender_id"];
echo $receiver_id = $_POST["receiver_id"];
echo $sender_name = $_POST["sender_name"];
echo $receiver_name = $_POST["receiver_name"];

echo $query = "insert into friend_requests (sender_id,sender_name,receiver_id,receiver_name,req_status)
values('$sender_id','$sender_name','$receiver_id','$receiver_name','1')";
$query_check = mysql_query($query) or die(mysql_error());

header("location:form2_view.php?id=$receiver_id");
}

?>
