<?php
mysql_connect("localhost","root","");
mysql_select_db("student");

if(isset($_POST["provider_name"]))
{
	$usercheck = $_POST["provider_name"];
	$sql ="SELECT * from register where username like '$usercheck%'";
	$result = mysql_query($sql) or die(mysql_error());
	}else{
	$sql ="SELECT * from register";
	$result =mysql_query($sql) or die(mysql_error());
}
 ?> 
<html>
<head><title>form2_select</title></head>
<body style="background-color:lightgrey">
 <form action="form2_select.php" method="post">
 
<h2 style="background-color:#6C9; text-align:center;">
<?php
if(isset($_GET["msg"])){ 
	 echo $_GET["msg"];
}  else  
        echo "Welcome! to ur previous data"
		
 ?></h2>

  <h3 align="left">Search by username
  <input type="text" name="provider_name"/>
  <input type="submit" name="searchuser" value="Search user"/></h3>
   <h2 align="right">
   <?php date_default_timezone_set("Asia/Calcutta"); echo date("d-m-y h:i:sa")?></h2>
   <style> h1:hover { backface-visibility:hidden ; background-color:white }
           a.ex1:hover, a.ex1:active {color: green;}
           a.ex2:hover, a.ex2:active {font-size: 150%;}
           a.ex3:hover, a.ex3:active {background: red;}
   
   </style>
   
<table bgcolor="#FFD9B3" width="100%"  align="center" >
  <tr>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red"><h1>Id</h1></th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Username</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Password</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Email</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Gender</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Address</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Choice</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Language</th>
   <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Display pic</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">View</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Delete</th>
  <th bgcolor="#333399" bordercolorlight="#003333" border="1" align="center" style="color:red">Edit
  </th>
  
</tr>

<?php
while ($row =mysql_fetch_array($result))
{ ?>
<tr>
<td align="center"><?php echo $row["id"];?></td>
<td align="center"><?php echo $row["username"]?></td>
<td align="center"><?php echo $row["password"]?></td>
<td align="center"><?php echo $row["email"]?><hr></hr></td>
<td align="center"><?php echo $row["gender"]?></td>
<td align="center"><?php echo $row["address"]?></td>
<td align="center"><?php echo $row["choice"]?></td>
<td align="center"><?php echo $row["language"]?></td>
<td align="center"><?php echo $row["pic"]?></td>

<td align="center"><a class="ex1" href="form2_view.php?id=<?php echo $row["id"]; ?>">View</a></td>
<td align="center"><a class="ex2" href="form2_delete.php?id=<?php echo $row["id"]; ?>" onClick="return confirm()" >Delete</a></td>
<td align="center"><a class="ex3" href="form2_edit_final.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
</tr>
<?php
}?>

</table>
</form>
</html>
</body>

 
