<?php
session_start();
 $uid  = $_SESSION["sid"]  ;
$id = intval($_GET["id"]);
if(!isset($_SESSION["sid"])){
	header("location:login.php");
}
mysql_connect("localhost","root","");
mysql_select_db("student");

//$username=$_GET["username"];

 $sessionsql ="select * from register where id='$uid'";   
$sessionresult =mysql_query($sessionsql) or die(mysql_error());
$sessionrow =mysql_fetch_array($sessionresult);

 $sql ="select * from register where id='$id'";   
                         //or we can write this as $sql ="select * from register where id=".$id;
						 //or we can write this as $sql ="select * from register where id='$id'";
$result =mysql_query($sql) or die(mysql_error());
$row =mysql_fetch_array($result);

$sentquery = "SELECT *from friend_requests where sender_id='$uid' AND req_status='1' And receiver_id='$id'";
$sentquery_check = mysql_query($sentquery) or die(mysql_error());
   $sentfetch_all = mysql_fetch_array($sentquery_check);

$frndquery = "SELECT *from friend_requests where sender_id='$uid' AND req_status='2' And receiver_id='$id' or 
sender_id='$id' AND req_status='2' And receiver_id='$uid'";
$frndquery_check = mysql_query($frndquery) or die(mysql_error());
   $frndfetch_all = mysql_fetch_array($frndquery_check);
?> 
<!DOCTYPE >
<html>
<head>
<title>form_view</title>
</head>


<body bgcolor="#CCCC33" >
<form action="friends_req_submit.php" method="post" />
<?php include("header.php") ?>
<table border="0" align="center" width="50%">
    <tr>
       <th align="right" style="color:#63F">Profile:</th>
       <td ><img width="100" height="100" src="images/<?php echo $row["pic"];?>" /></td>
       <td >
	   <?php 
		  if($sessionrow["username"]==$frndfetch_all["receiver_name"] 
	    and $row["username"]==$frndfetch_all["sender_name"] and $frndfetch_all["req_status"]=='2' or $sessionrow["username"]==$frndfetch_all["sender_name"] 
	    and $row["username"]==$frndfetch_all["receiver_name"] and $frndfetch_all["req_status"]=='2' )
		   { echo "<input type='submit' value='Friend' />"; }
		 elseif($sessionrow["username"]==$sentfetch_all["sender_name"] 
	    and $row["username"]==$sentfetch_all["receiver_name"] and $sentfetch_all["req_status"]=='1' )
		{echo "<input type='submit' value='Cancel Request' />";}  
		 else { echo "<input type='submit' name='frnd_req' value='Add As Friend'/>";} ?>
	   <!--<input type="submit" name="frnd_req" value="Add As Friend"/>-->
                                              <input type="hidden" name="sender_name" value="<?php echo $sessionrow["username"];?>"/>
                                              <input type="hidden" name="sender_id" value="<?php echo $sessionrow["id"];?>"/>
                                              <input type="hidden" name="receiver_name" value="<?php echo $row["username"];?>"/>
                                              <input type="hidden" name="receiver_id" value="<?php echo $row["id"];?>"/></td>
    </tr>
    <tr>
    <th width="40%" align="right" style="color:#63F">Age:</th>
    <td ><?php echo $row["age"] ;?> years</td>
  </tr>
    <tr>      
       <th width="40%" align="right" style="color:#63F">Id:</th>
       <td width="60%" ><?php echo $row["id"];?></td>
    </tr>
    <tr>
      <th align="right" style="color:#63F">Username:</th>
      <td ><?php echo $row["username"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">password:</th>
       <td ><?php echo $row["password"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">email:</th>
       <td ><?php echo $row["email"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">address:</th>
       <td ><?php echo $row["address"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">gender:</th>
       <td ><?php echo $row["gender"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">city:</th>
       <td ><?php echo $row["choice"]?></td>
    </tr>
    <tr>
       <th align="right" style="color:#63F">language:</th>
       <td ><?php echo $row["language"]?></td>
    </tr>
</table>
</form>
</body>
</html>

<?php /*?> <?php if($sessionrow["username"]==$sentfetch_all["sender_name"]
	    and $row["username"]==$sentfetch_all["receiver_name"]
		 and $sentfetch_all["req_status"]=='1' ) { echo "<input type='submit' value='Request Sent' />"; } 
		  elseif($sessionrow["username"]==$sentfetch_all["receiver_name"] 
	    and $row["username"]==$sentfetch_all["sender_name"]
		 and $sentfetch_all["req_status"]=='2' ) { echo "<input type='submit' value='Friend' />"; }
		 else { echo "<input type='submit' name='frnd_req' value='Add As Friend'/>";} ?><?php */?>