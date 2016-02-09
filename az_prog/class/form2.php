<!DOCTYPE html >
<html>
<head>
<title>A FORM </title>
<script src="../my_form/js/jquery.min.js"></script>
<script>
var jq = $.noConflict();
jq(document).ready(function($){
  $("tr:even").css("background-color","blue");
	   $("tr:odd").css("background-color","rgb(90,80,53)");
	        $("select").css("background-color","green");
            $(":selected").css("background-color", "red");
			//this is to highlight or mark the selected one
	               $(":text").css("background-color" ,"yellow");
	                      $(":file").css("background-color","blue");
	                             $(":password").css("background-color","lightgreen");	
                                          $(":radio").wrap("<span style='background-color:red'>");
	//we use jQuery wrap here becaz firefox does not background-color on radio button
	        $("textarea").css("background-color","pink");
	   $(":submit").css("background-color","lightpink");
  $(":checkbox").wrap("<span style='background-color:brown'>");
	//$(":input").css("background-color","blue");
<!-- This jQuery input selector is used when we dont alloted different ".css" to everyone and if we still use then it overrides the others.So here ,this is useless -->

});
</script>
</head>

<body style="background-color:lightgrey">


<form action="form2_submit.php" method="post" enctype="multipart/form-data">

<table bgcolor="linen"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:red" >Registration form of user</td> 
    </tr>
    <tr>
      <td align="right">Username</td>
      <td>: </td>
      <td><input type="text" placeholder="Your Name" name="usrname" /></td>
    </tr>
    <tr>
      <td align="right">Your Profile</td>
      <td>: </td>
      <td><input type="file" placeholder="Profile picture" name="pic" /></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td>: </td>
      <td><input type="password" placeholder="Password" name="pass"  /> </td>
      </tr>
      <tr>
      <td align="right">Email</td>
      <td>:</td>
      <td><input type="text" placeholder="Email Address" name="email"/></td>
      </tr>
      <tr>
      <td align="right">Gender </td> 
      <td>: </td>
      <td> male
        <input type="radio" name="gender" value="male"  />
        female
        <input type="radio" name="gender"  value="female"  /></td>
    </tr>
    <tr>
      <td align="right">Address</td>
      <td>: </td>
      <td><textarea   placeholder="Address"  name="address"></textarea> </td>
    </tr>
    <tr>
      <td align="right">City </td>
      <td>: </td>
      <td>
        <select name="choice" >
         <option></option>
        <option>Bangalore</option>
        <option selected>Indore </option>
        <option>Other</option>
      </select ></td>
    </tr>
    <tr>
      <td align="right">Languages </td>
      <td>: </td>
      <td> 
      hindi<input type="checkbox"    name="laguage[]" value="hindi"/>
      english<input type="checkbox"  name="laguage[]" value="english"/>
      french<input type="checkbox"  name="laguage[]" value="french"/>
      others<input type="checkbox"  name="laguage[]" value="others"/> </td>
    </tr>
    <!--
    <tr>
      <td>final mode </td>
      <td> : </td>
      <td><select >
        <option>
          <input type="submit"  />
          </option>
        <option>
          <input type="submit" value=" save" />
          </option>
      </select>
    </td>
</tr>-->
<tr>
	<td colspan="3" style="text-align:center;">
    	<input type="submit" name="form2_submit" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>