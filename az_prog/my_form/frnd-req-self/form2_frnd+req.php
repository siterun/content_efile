<?php 
session_start();
$uid = $_SESSION['sid'];

mysql_connect('localhost','root','');
mysql_select_db('student');

$logged_user = "select *from register where id='$uid'";
$logged_user_check = mysql_query($logged_user) or die(mysql_error());
$logged_user_data = mysql_fetch_array($logged_user_check);

$sentquery = "SELECT *from friend_requests where sender_id='$uid' AND req_status='1'";
$sentquery_check = mysql_query($sentquery) or die(mysql_error());
   //$sentfetch_all = mysql_fetch_array($sentquery_check);

$receivequery = "SELECT *from friend_requests where receiver_id='$uid' AND req_status='1'";
$receivequery_check = mysql_query($receivequery) or die(mysql_error());
   //$receivefetch_all = mysql_fetch_array($receivequery_check);

$frndquery = "SELECT *from friend_requests where receiver_id='$uid' AND req_status='2' or sender_id='$uid' And req_status='2'";
$frndquery_check = mysql_query($frndquery) or die(mysql_error());
   //$frndfetch_all = mysql_fetch_array($frndquery_check);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap.css" rel="stylesheet" >
<script src="bootstrap_javascript.js" ></script>
<script src="gogle_apis_ajax.js"></script>
</head>

<body style="background-color:wheat;">
<?php include("header.php");?>
<div class="container">
  <div class="row">
     <div class="col-sm-4">
        <table style="background-color:#F96; border-radius:10px;">
        <tr>
        <td style="color:#36F;">Sent Requests</td>
        </tr>
        <?php while($sentfetch_all = mysql_fetch_array($sentquery_check)) { ?>
        <tr>
        <td style="font-size:16px; font-family:'Comic Sans MS', cursive;"><?php echo $sentfetch_all['receiver_name']; ?><br>
        <a href="frnd_req_cancel.php?id=<?php echo $sentfetch_all['receiver_id']; ?>">Cancel Request</a>
        </tr>
        <?php } ?>
        </table>
        </div>
        <div class="col-sm-4">
         <table style="background-color:#F96; border-radius:10px;">
        <tr>
        <td style="color:#36F;">Receive Requests</td>
        </tr>
        <?php while($receivefetch_all = mysql_fetch_array($receivequery_check)) { ?>
        <tr>
        <td style="font-size:16px; font-family:'Comic Sans MS', cursive;"><?php echo $receivefetch_all['sender_name']; ?><br>
        <a href="frnd_req_confirm.php?id=<?php echo $receivefetch_all['sender_id']; ?>">Confirm Request</a>
        </tr>
        <?php } ?>
        </table>
        </div>
           <div class="col-sm-4">
            <table style="background-color:#F96; border-radius:10px;">
        <tr>
        <td style="color:#36F;">Friends</td>
        </tr>
        <?php while($frndfetch_all = mysql_fetch_array($frndquery_check)) { ?>
        <tr>
        <td style="font-size:16px; font-family:'Comic Sans MS', cursive;">
		<?php if($logged_user_data["username"]==$frndfetch_all["sender_name"])
		 {  echo $frndfetch_all["receiver_name"].'<br><a href="form2_view.php?id='.$frndfetch_all['receiver_id'].'">Visit Profile</a>'; ; }
		else {
		     echo $frndfetch_all["sender_name"].'<br><a href="form2_view.php?id='.$frndfetch_all['sender_id'].'">Visit Profile</a>'; }?>
        </tr>
        <?php } ?>
        </table>
           </div>
      </div>
    </div>
</body>
</html>
