<div id="myDiv">
<!DOCTYPE html>
<html>
<head>
<title>Outbox</title>
</head>

<?php 
session_start();
$uid=$_SESSION["sid"];
    
mysql_connect("localhost","root","");
mysql_select_db("student");

//$id=$_GET["id"];
$sql ="SELECT * FROM messages where senderid='$uid' AND trash='0'";
$result =mysql_query($sql) or die(mysql_error());
		
?>
<body bgcolor="#CCCC33">
<?php include("header.php");?>

<table align="center" border="5" bordercolordark="#330033" width="100" height="100" cellpadding="1" cellspacing="3">
<?php while($row = mysql_fetch_array($result)){ ?>
<tr><pre>
<th align="left"><h3 style="color:blue"><?php echo $row["receivername"]."<br>";?></h3>
                                     <hr><?php echo $row["msgmatter"];?></hr>
  </th></pre>
   <td>
  
  <a href="trash_msge.php?rowid=<?php echo $row["id"];?>&action=outbox">del</a>
   
</td>
</tr>
<?php }?>

</table>
</body>
</html>
</div>