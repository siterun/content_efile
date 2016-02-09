<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("myDiv").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("POST","form2_view.php?id="+str,true);
  xmlhttp.send();
}
</script>
<style>
.online_class{
	color:#00FF00;
}
.offline_class{
	color:red;
}
</style>
</head>


<?php
error_reporting(0);
session_start();
$uid=$_SESSION["sid"];
  
if(!isset($_SESSION["sid"])){
	header("location:login.php");
}
 include_once('main_class.php');
$obj = new parent_data();

$table_1 = 'online_user';
$table_2 = 'register';
$online_user_result = $obj->all_online_users($table_1, $table_2,$uid);
//$row_online = mysql_fetch_assoc($online_user_result);
$users_id = array();
	while($row_online = mysql_fetch_assoc($online_user_result)){
		$users_id[] = $row_online['user_id'];
		//$user_current_login_staus = $row_online['online_status'];
	}  

if(!in_array($uid,$users_id)){
	$db_fname = "user_id,login_status";
	$user_current_online_status = 13;
	$db_values = "'$uid','$user_current_online_status'";
	$obj->user_online_status('online_user',$db_fname, $db_values); 
}
else {
	$result_login = $obj->user_login_status('register', $uid);
	 $login_result = mysql_fetch_assoc($result_login); 	
}  
			
 

$page_query = $obj->page_creation('page_create', $uid);
//$page_query_result = mysql_fetch_array($page_query);

$result = $obj->select_byid('register',$uid);
$row = mysql_fetch_array($result);
$user_age = $row['b_day'];
//editting for user b_day begins
$server_date = date_create();
$userbirthday = date_create($user_age);
$diff = date_diff($server_date,$userbirthday);
$age = $diff->y;
//editting for user b_day ends

$register_result = $obj->register_data('register');
$usersname = $obj->register_data('register');

$addcategory= "SELECT * from add_category";
$catgrycheck =mysql_query($addcategory) or die(mysql_error());
$catresult =mysql_fetch_array($catgrycheck);

$addproduct= "SELECT * from add_product";
$prdtcheck =mysql_query($addproduct) or die(mysql_error());
$prdtresult =mysql_fetch_array($prdtcheck);
 


include_once("header.php");
?>
<div id="myDiv">
<body>

<form method="post" enctype="multipart/form-data"/>
<input type="submit" name="page_form" value="create your page" formaction="page_create.php"/>
<h3><?php if(isset($_GET["msg"])) { echo "ur msg sent" ; }?></h3>
<?php if(isset($_POST['update_dis'])) { echo "Your profile pic updated";} ?>
<table width="100%" border="0">
<tr>
<td colspan="3"><b>Search</b><select name="user_names" onChange="showUser(this.value)">
      <option>Select the name</option>
       <?php while($catuname = mysql_fetch_assoc($usersname)) { ?>

        <option><?php echo $catuname["id"].",".$catuname["fullname"] ;?></option>
        <?php } ?></select></td>  
     
</tr>
  <tr>
    <td width="28%">Your created pages are:<br><?php while($page_query_result =mysql_fetch_array($page_query)) { ?>
    <a href="page_page.php?page_name=<?php echo $page_query_result["page_name"];?>">
	<?php echo $page_query_result["page_name"];?></a><br>
    <?php } ?></td>
    <td width="41%" valign="top"><table align="center" style="border-radius:10px; background-color:#F99;">
  
  <tr>
  <th width="136" align="center" style="color:blue">Your Profile</th>
  <td width="20">&nbsp;</td>
  <td style="color:blue"><img width="100" height="100" src="images/<?php echo $row["pic"];?>" /></td>
  </tr>
  <tr>
  <th >&nbsp;</th>
  <td width="20">&nbsp;</td>
  <td ><?php  if($login_result['login_status']==11){echo '<div class="online_class">online</div>';}
  else {echo '<div class="offline_class">offline</div>';} ?></td>
  </tr>
   <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td ><span style="color:blue"><a href="update_dp.php?id=<?php echo $row["pic"]?>">Update DP</a></span></td>
  </tr>
   <tr>
    <td align="right">Age</td>
    <td>&nbsp;</td>
    <td ><?php echo $age;?> years</td>
  </tr>
  <tr>
  <td align="right"><strong>Id</strong></td>
  <td width="20">:</td>
  <td width="193" ><?php echo $row["id"];?></td>
  </tr>
   <tr>
  <td align="right"><strong>Full Name</strong></td>
  <td>:</td>
  <td ><?php echo $row["fullname"];?></td>
  </tr>
   <tr>
  <td align="right"><strong>Password</strong></td>
  <td>:</td>
  <td ><?php echo $row["password"];?></td>
  </tr>
   <tr>
  <td align="right"><strong>Address</strong></td>
  <td>:</td>
  <td ><?php echo $row["address"];?></td>
  </tr>
   <tr>
  <td align="right"><strong>Gender</strong></td>
  <td>:</td>
  <td ><?php echo $row["gender"];?></td>
  </tr> <tr>
  <td align="right"><strong>Language</strong></td>
  <td>:</td>
  <td ><?php echo $row["language"];?></td>
  </tr> <tr>
  <td align="right"><strong>City</strong></td>
  <td>:</td>
  <td ><?php echo $row["choice"];?></td>
  </tr>
 
    </table></td>
    <td width="31%" valign="top"><table align="center" bgcolor="#33FFFF" >
<tr>
  <th colspan="2" align="center" bordercolorlight="#003333" bgcolor="#333399" style="color:red" border="0">Users</th>
   </tr>
 <?php
while ($bring = mysql_fetch_array($register_result))
	{ 
				if($bring["id"]==$uid) 
				{    continue;  }
?>
<tr>
<th align="center"><a href="message.php?id=<?php echo $bring["id"];?>"><img src="images/<?php echo $bring["pic"];?>" width="42" height="53"></a>
</th>
<td align="left"><a href="form2_view.php?id=<?php echo $bring["id"];?>" style="text-decoration:none"><?php  echo $bring["fullname"];?></a></td>
</tr>
   
<?php
}?>
     
</table></td>
  </tr>
  <tr>
    <td colspan="3">copyright&#169; 2015</td>
    </tr>
</table>

</form>
</body>
</html>
</div>