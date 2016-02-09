<?php 
include('main_class.php');
$obj = new parent_data();

//$result = $obj->select_full('countries');
   //$country_result = mysql_fetch_assoc($result);
$user_all = $obj->select_full('register');
//$user_res = mysql_fetch_assoc($user_all);
$username = array();
while($user_res = mysql_fetch_assoc($user_all)){
      $username[] = $user_res['username']; 
}
 
 $st = json_encode($username);
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
var st =  JSON.parse(st);
console.log(st);
var jq = $.noConflict();
jq(document).ready(function($){
	$(".user_username").change(function(){
		var user_fName = $('.user_username').val().toLowerCase();
		alert(user_fName);
		var php_define = '<?php echo $username_val;?>';
		
		$('.error').removeClass('error').empty();
		$('.user_username').removeClass('user_exist_cla');
			
		for(var i=0; i<=st; i++){
			php_define = $st[i].username;
			if(user_fName == php_define){
			   $('.user_username').addClass('user_exist_cla');
			   $('.user_username').next('.error').html('username exist,give other!!');
		     } 
		   	
		 }
		
		//alert(php_define);
		/*if(user_fName == php_define){
			//alert('Name already exist,please give any other username');
			$('.user_username').addClass('user_exist_cla');
			$('.user_username').next('.error').html('username exist,give other!!');
		} else{
			alert('not same name');
			$('.error').removeClass('error').empty();
			$('.user_username').removeClass('user_exist_cla');
			} */
		});
	});
</script>
<!-- birthday calender -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	
	function getState(countryId) {		
		
		var strURL="findState_1.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;
						document.getElementById('citydiv').innerHTML='<select name="city">'+
						'<option>Select City</option>'+
				        '</select>';						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
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

<body style="background-color:lightgrey">

<marquee>This text will scroll from right to left</marquee>
<form action="form2.php" method="post" enctype="multipart/form-data">

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
