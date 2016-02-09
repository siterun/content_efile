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
//editting for user age begins 
$user_bday = $row['b_day'];
$server_date = date_create();
$user_bday_date = date_create($user_bday);
$diff = date_diff($server_date, $user_bday_date);
$age = $diff->y; 
//editting for user age end 

$sentquery = "SELECT *from friend_requests where sender_id='$uid' AND req_status='1' and receiver_id='$id'";
$sentquery_check = mysql_query($sentquery) or die(mysql_error());
$sentfetch_all = mysql_fetch_array($sentquery_check);

$receivequery = "SELECT *from friend_requests where receiver_id='$uid' AND req_status='1' and sender_id='$id'";
$receivequery_check = mysql_query($receivequery) or die(mysql_error());
$receivefetch_all = mysql_fetch_array($receivequery_check);

$frndquery = "SELECT *from friend_requests where sender_id='$uid' AND req_status='2' And receiver_id='$id' or 
sender_id='$id' AND req_status='2' And receiver_id='$uid'";
$frndquery_check = mysql_query($frndquery) or die(mysql_error());
   $frndfetch_all = mysql_fetch_array($frndquery_check);

?> 
<!DOCTYPE >
<html>
<head>
<title>form_view</title>
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function sentreq(id) {		
		
		var strURL="friends_req_submit.php?id="+id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('myfr_req').innerHTML=req.responseText;	
										
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function cancelreq(id) {		
		
		var strURL="frnd_req_cancel.php?id="+id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('myfr_req').innerHTML=req.responseText;	
										
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function confirmreq(id) {		
		
		var strURL="frnd_req_confirm.php?id="+id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('myfr_req').innerHTML=req.responseText;	
										
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	</script>
</head>


<body bgcolor="#CCCC33" >
<!--<form action="friends_req_submit.php" method="post" />-->
<?php include("header.php") ?>
<table border="0" align="center" width="50%">
    <tr>
       <th align="right" style="color:#63F">Profile:</th>
       <td ><img width="100" height="100" src="images/<?php echo $row["pic"];?>" /></td>
       <td>	
       <div id="myfr_req" ><?php if($sessionrow["username"]==$sentfetch_all["sender_name"]
	    and $row["username"]==$sentfetch_all["receiver_name"] and $sentfetch_all["req_status"]=='1' ) {
		 echo '<button type="button" name="cancel_req" value="'.$id.'" onClick="cancelreq(this.value)" >
       Cancel Request</button>'; }
	   elseif($sessionrow["username"]==$receivefetch_all["receiver_name"]
	    and $row["username"]==$receivefetch_all["sender_name"] and $receivefetch_all["req_status"]=='1' ) {
		 echo '<button type="button" name="confirm_req" value="'.$id.'" onClick="confirmreq(this.value)" >
       Confirm Request</button>'; }
	    elseif($sessionrow["username"]==$frndfetch_all["receiver_name"] 
	    and $row["username"]==$frndfetch_all["sender_name"] and $frndfetch_all["req_status"]=='2' or $sessionrow["username"]==$frndfetch_all["sender_name"] 
	    and $row["username"]==$frndfetch_all["receiver_name"] and $frndfetch_all["req_status"]=='2' )
		   { echo '<button type="button" name="frnd_req" value="'.$id.'" onClick="sentreq(this.value)" >
       friend</button>'; }
		 else{ echo '<button type="button" name="frnd_req" value="'.$id.'" onClick="sentreq(this.value)" >
       Add As Friend</button>';}?></div>
	   <!--<input type="submit" name="frnd_req" value="Add As Friend"/>--></td>
                                              
    </tr>
    <tr>
    <th width="40%" align="right" style="color:#63F">Age:</th>
    <td ><?php echo $age ;?> years</td>
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
<!--</form>-->
</body>
</html>

<?php /*?> <?php if($sessionrow["username"]==$sentfetch_all["sender_name"]
	    and $row["username"]==$sentfetch_all["receiver_name"]
		 and $sentfetch_all["req_status"]=='1' ) { echo "<input type='submit' value='Request Sent' />"; } 
		  elseif($sessionrow["username"]==$sentfetch_all["receiver_name"] 
	    and $row["username"]==$sentfetch_all["sender_name"]
		 and $sentfetch_all["req_status"]=='2' ) { echo "<input type='submit' value='Friend' />"; }
		 else { echo "<input type='submit' name='frnd_req' value='Add As Friend'/>";} ?><?php */?>