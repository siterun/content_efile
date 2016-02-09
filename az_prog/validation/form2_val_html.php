<!DOCTYPE html >
<html>
<head>
<title>A FORM </title>
</head>

<body style="background-color:lightgrey">
<!-- EMAIL - here we used <input type="email"/>> for to make sure that email given by user should be valid email format......this is html validation type
PASSWORD - we here also used <input type="password"/> so that the password typed by user will show either as asteriks or as circle to the user during type,if we use text then password will simply shows as username during typing,
NUMBER - we can also used <input type="number" name="quantity" min="1" max="5"> to give user the no.typing facility but he can only use those words which r between the condition of min and max.,
now here we r using the  <input type="number" name="points" min="0" max="100" step="10" value="30"> step to give the proper gap between the number user type.
here we used "REQUIRED" which is for--The required attribute is a boolean attribute.When present, it specifies that an input field must be filled out before submitting the form.The required attribute works with the following input types: text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.
we also have more input fiels that are "RANGE" and "STEP",we can use these during the music web to set the volume n the gap between the volume button acoording to which they raise or dowm the volume,
The step attribute specifies the legal number intervals for an <input> element.Example: if step="3", legal numbers could be -3, 0, 3, 6, etc.Tip: The step attribute can be used together with the max and min attributes to create a range of legal values.The step attribute works with the following input types: number, range, date, datetime, datetime-local, month, time and week.-->


<form action="form2_submit.php" method="post" enctype="multipart/form-data" >
<!-- The novalidate attribute is a <form > attribute and by using this all the validation which puts in the form will be insensitive or useless,this used as by typing novalidate in form tag simply <form novalidate>,,,,The novalidate attribute is a boolean attribute.When present, it specifies that the <input> element should not be validated when submitted.The formnovalidate attribute overrides the novalidate attribute of the <form> element.The formnovalidate attribute can be used with type="submit".,,,,The formtarget attribute specifies a name or a keyword that indicates where to display the response that is received after submitting the formThe formtarget attribute overrides the target attribute of the <form> element.
The formtarget attribute can be used with type="submit" and type="image".-->

<table bgcolor="linen"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:red" >Registration form of user</td> </tr>
    <tr>
      <td align="right">username</td>
      <td>: </td>
      <td><input type="text" placeholder="username" name="usrname" maxlength="35" required/></td>
      <!-- maxlength used to control the characters limit and cant replace it wid max bcaz it supports the number type not text type-->  
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
      <td><input type="email" placeholder="email address" name="email"/>
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
    	<input type="submit" name="form2_submit" value="submit" />
    </td>
</tr>
</table>
</form>
