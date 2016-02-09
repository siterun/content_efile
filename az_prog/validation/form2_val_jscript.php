<!DOCTYPE html >
<html>
<head>
<title>A FORM </title>
<script>
function valid(form) {
	errortext= "";
	 var username = document.forms["r_form"]["usrname"].value ;
	   var pass = document.forms["r_form"]["pass"].value ;
	      var email = document.forms["r_form"]["email"].value ;
		           atpos = email.indexOf("@");
                   dotpos = email.lastIndexOf(".");
		        //var gender = document.forms["r_form"]["gender"].value ;
				    var address = document.forms["r_form"]["address"].value;
					     var choice = document.forms["r_form"]["choice"].value;

					   
	 if(username == null || username == "") {
	 alert("Insert the username");
	 		document.r_form.usrname.focus() ;
	 return false;
	 }
				 if(pass == null || pass == "") {
				 alert("Insert the password");
						document.r_form.pass.focus() ;
				 return false;
				 }
						  if(atpos < 1 || ( dotpos - atpos < 2 )) 
							 {
								alert("Please enter correct email address")
								document.r_form.email.focus() ;
								return false;
							 }
							 
				chosen =""			 
				len = document.r_form.gender.length
				for (i=0;i<len;i++) {
				 if(document.r_form.gender[i].checked) {
					   chosen =document.r_form.gender[i].value
				 }
				}
				if (chosen == "") {
					alert("No gender Chosen");
					return false;
					}
					else {
					alert(chosen)
					}
							 
				/* This is also right n executing as we want 
				if ( ( r_form.gender[0].checked == false ) && ( r_form.gender[1].checked == false ) )
				{
				alert ( "Please choose your Gender: Male or Female" );
				return false;
				}*/
						             if(address == null || address == "") {
										 alert("Give your address");
												document.r_form.address.focus() ;
										 return false;
										 }
																	
					  if(choice == null || choice == "") {
					 alert("Select your city");
							document.r_form.choice.focus() ;
					 return false;
					 } 
					
					    /*checkbox
							 txt = ""
							 boxes = document.r_form.laguage.length
										for (i=0;i<boxes;i++) {
										if(document.r_form.laguage[i].checked) {
										     txt =txt + document.r_form.laguage[i].value + "" 
										}
									  }
								if (txt == "") {
										alert("No language selected");
										return false ;
										}
										else {
										alert(txt);
										}*/
                          boxes = document.r_form.laguage.length
txt = ""
for (i = 0; i < boxes; i++) {
if (document.r_form.laguage[i].checked) {
txt = txt + document.r_form.laguage[i].value + " "
}
}


if (txt == "") {
Message = "No Boxes ticked"
}
else {
Message = ""
}

return Message

}
</script>
</head>
<body style="background-color:lightgrey">


<form name="r_form" action="form2_submit.php" method="post" enctype="multipart/form-data" onSubmit="return valid()">

<table bgcolor="#FF9966"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:red" >Registration form of user</td> </tr>
    <tr>
      <td align="right">username</td>
      <td>: </td>
      <td><input type="text" placeholder="username" name="usrname"  /></td>
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
      <td><input type="text" placeholder="email address" name="email"/>
      </td>
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
    <tr>
      <td align="right">city </td>
      <td>: </td>
      <td>
        <select name="choice" >
         <option></option>
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
    	<input type="submit" name="form2_submit" value="Submit" />
        <input type="reset" value="Refresh"/>
    </td>
</tr>
</table>
</form>
