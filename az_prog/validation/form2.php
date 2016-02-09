<!DOCTYPE html >
<html>
<head>
<title>A FORM </title>
</head>

<body style="background-color:lightgrey">
<!-- some restrictions on input field or input field attributes had mentioned in login_front_trial1.php" so u can go wid to that too see wht r the somethng else-->

<!-- An example of that how we can also use form is---<form action="action_page.php" id="form1">
First name: <input type="text" name="fname"><br>
<input type="submit" value="Submit">
</form>

<p>The "Last name" field below is outside the form element, but still part of the form.</p>
Last name: <input type="text" name="lname" form="form1">
 ,this means that form or formaction can be different by just giving the different form or the different formaction for that input field --> 
<form action="form2_submit.php" method="post" enctype="multipart/form-data" >

<table bgcolor="#FF9966"  align="center" >
    <tr>
    <td colspan="3" align="center"  style="color:red" >Registration form of user</td> </tr>
    <tr>
      <td align="right">username</td>
      <td>: </td>
      <td><input type="text" placeholder="username" name="usrname" autofocus /></td>
      <!-- this attribute is - The autofocus attribute is a boolean attribute,When present, it specifies that an <input> element should automatically get focus when the page loads which just simply only give much focus to that field-->
    </tr>
    <tr>
      <td align="right">Your profile</td>
      <td>: </td>
      <td><input type="file" placeholder="Profile picture" name="pic" multiple/></td>
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
