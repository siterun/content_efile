<?php 
include('main_class.php');
$obj = new parent_data();

//$result = $obj->select_full('countries');
   //$country_result = mysql_fetch_assoc($result);
$user_all = $obj->select_full('register');
//$user_res = mysql_fetch_assoc($user_all);
$username = array();
//if we dont write this then also the below process will work as it suppose to be but if there is no data will come in $username during the loop then error will occur and here we r using  $username variable in the jquery process also and functionality of jquery will halt by giving error if the $username will blank and  so we define it as array in the starting to overcome all of these problems.  
while($user_res = mysql_fetch_assoc($user_all)){
 $username[] = $user_res['username']; 
}
$st_json = json_encode($username);//json_encode function convert php data into  json format,we can use this data in java or json if we want.
 
 
?>

<!DOCTYPE html >
<html>
<head>
<style>
.user_exist_cla{
	border-color:red;
	background-color:red;
}
.error {
	color: #D8000C;
	background-color: #FFBABA;
}
</style>
<title>A FORM </title>
<!--username existing checking -->

<script>
var st_jsparse = JSON.parse('<?php print_r($st_json); ?>');//JSON.parse-> resolve and parse the data into its component,so now we can use the json data.
function not_usernamesame(form) {
	errortext= "";
	 var username = document.forms["r_form"]["usrname"].value ;
	 //alert(st_jsparse);
	 //alert(st_jsparse.length);
	 
	 for(var i= 0; i <= st_jsparse.length;  i++){
		 var exist_user = st_jsparse[i];
		 if(username == exist_user){
			 alert('Username already exist,input other username');
			 document.r_form.usrname.focus() ;
			 return false;
		 }
		 
	 }
	 
}
</script>

</head>

<body style="background-color:lightgrey">

<marquee>This text will scroll from right to left</marquee>
<form action="form2_submit.php" method="post" name="r_form" enctype="multipart/form-data" onSubmit="return not_usernamesame()">

<table bgcolor="wheat" align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:blue; font-size:18px" ><b>Registration form of user</b></td> </tr>
    <tr>
      <td align="right">Full Name</td>
      <td>: </td>
      <td><input type="text" placeholder="full name" name="fullname" /></td>
    </tr>
	<tr>
      <td align="right">username</td>
      <td>: </td>
      <td><input type="text" placeholder="username" name="usrname" class="user_username"/>
	  <div class="error"></div></td>
    </tr>	
    <tr>
      <td align="right">Your profile</td>
      <td>: </td>
      <td><input type="file" placeholder="Profile picture" name="pic" /></td>
    </tr>
    <tr>
    <tr>
      <td align="right">password</td>
      <td>: </td>
      <td><input type="password" placeholder="password" name="pass"  /> </td>
      </tr>
      <tr>
      <td align="right">Email</td>
      <td>:</td>
      <td><input type="text" placeholder="email address" name="email"/> </td>
      </tr>
       <tr>
      <td align="right">Birthday</td>
      <td>:</td>
      <td><input type="text" placeholder="Your birthday" id="datepicker" name="b_day"/> </td>
      </tr>
      <tr>
      <td align="right">gender </td> 
      <td>: </td>
      <td> male
        <input type="radio" name="gender" value="male"  />
        female
        <input type="radio" name="gender"  value="female"  /></td>
    </tr>
    <tr>
      <td align="right">address</td>
      <td>: </td>
      <td><textarea   placeholder="address"  name="address"></textarea> </td>
    </tr>
    <!--from here country state city start-->
      <tr>
    <td width="75" align="right">Country</td>
     <td width="50">:</td>
    <td  width="150"><select name="country" onChange="getState(this.value)">
	<option value="">Select Country</option>
	<?php while ($country_result = mysql_fetch_assoc($result)) { ?>
	<option value=<?php echo $country_result['id']?>><?php echo $country_result['country']?></option>
	<?php } ?>
	</select></td>
  </tr>
  <tr style="">
    <td align="right">State</td>
    <td width="50">:</td>
    <td ><div id="statediv"><select name="state" >
	<option>Select State</option>
        </select></div></td>
  </tr>
  <tr style="">
    <td align="right">City</td>
    <td width="50">:</td>
    <td ><div id="citydiv"><select name="city">
	<option>Select City</option>
        </select></div></td>
  </tr>
<!--here country state city ends -->
    <tr>
      <td align="right">Your city </td>
      <td>: </td>
      <td>
        <select name="choice" >
         <option>Select ur City</option>
        <option>bangalore</option>
        <option>indore</option>
        <option>other</option>
      </select ></td>
    </tr>
    <tr>
      <td align="right">languages </td>
      <td>: </td>
      <td> 
      hindi<input type="checkbox"    name="laguage[]" value="hindi"/>
      english<input type="checkbox"  name="laguage[]" value="english"/>
      french<input type="checkbox"  name="laguage[]" value="french"/>
      others<input type="checkbox"  name="laguage[]" value="others"/> </td>
    </tr>
	<tr>
	  <td colspan="3" style="text-align:center;">
		<input type="submit" name="form2_submit" value="submit" />
	  </td>
	</tr>
</table>
</form>

</body>
</html>
