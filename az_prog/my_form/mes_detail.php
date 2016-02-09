<?php 

session_start();
$uid=$_SESSION["sid"];
 
include_once('main_class.php');

$obj = new parent_data();

//for update unread status to read status begins
$seid = $_GET['seid'];
//$reid = $_GET['reid'];
$trash = 4;
$db_fname = array('read_status'=>5);
  $obj->update_unread('messages',$db_fname,$uid,$seid,$trash);   
 
$result = $obj->get_content('messages',$db_fname,$uid,$seid,$trash);   
//$row = mysql_fetch_assoc($result);  
 ?>
  
<!DOCTYPE html>
<html>
<head><title>Chat page</title>
<style>
body {
	background-color:#FCC}
.chater_name {
	 color: #06F;
	 font-size:18px;
	 font-family:"Lucida Console", Monaco, monospace;
	}
.msg_in { 
	width:400px;
	height:20px;
	text-align:left;	
	}
.msg_out { 
	width:400px;
	height:20px;
	text-align:right;
	}

.chat_table {
	width:500;
	height:100;
	border:2;
	border-color:whiten ;
	padding:1 1 1 1;
	margin:1 1 1 1;
	
}
.textarea_class {
	width:394px;
	height: 86px;
}
.btn_sub_class {
	text-align:right;
	width:20;
	font-family:"Lucida Console", Monaco, monospace;
	
}
	
</style>
</head>
<body>
</body>


<?php require_once('header.php');?>
<table class="chat_table" align="center" border="5" >
<?php 
$i = 1;
while($row= mysql_fetch_assoc($result)) { 
if($i==1 && $row['senderid']==$uid) {echo '<tr><td class="chater_name" align="center" style="color:blue;"><strong>'.$row["receivername"].'</strong></td></tr>'; }
elseif($i==1 && $row['receiverid']==$uid) {echo '<tr><td class="chater_name" align="center" style="color:blue;"><strong>'.$row["sendername"].'</strong></td></tr>'; }
 if($uid==$row['receiverid']){ 
echo '<tr><td class="msg_in">'.$row["msgmatter"].'</td></tr>'; } 
else {echo '<tr><td class="msg_out">'.$row["msgmatter"].'</td></tr>'; } 
 
$i++ ;

} ?>
<tr><td><textarea class="textarea_class" ></textarea></td></tr>
<tr><td class="btn_sub_class"><input type="button" name="send_msg" value="Say" /></td></tr>

<!--<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on left">Tooltip on left</button>-->
</table>
</html>
