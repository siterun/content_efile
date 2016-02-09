<?php
include("dbclass.php");
$obj= new db;

$hostname = "localhost";
$username = "root";
$password = "";
$database = "student";
	
$obj->database($hostname,$username,$password,$database);
	
	$tablename ="register";
	$result=$obj->select($tablename);

?> 
<html>
<body style="background-color:lightgrey">

   
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
<?php }?>
</table>
</form>
</html>
</body>

 


