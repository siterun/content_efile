<?php 
session_start();
$uid=$_SESSION["sid"];

  
mysql_connect("localhost","root","");
mysql_select_db("student");
	
	//$id=$_GET["id"];

//for inbox messages begins 
    $sql = "SELECT * from messages  where trash='1' AND receiverid='$uid'";
	$result =mysql_query($sql) or die(mysql_error());
   // $row =mysql_fetch_array($result);
//for inbox messages end 
     
//for outbox messages begins
   $sendout = "SELECT * from messages where trash='1' AND senderid='$uid'";
   $outboxresult =mysql_query($sendout) or die(mysql-error());
   // $outcheck =mysql_fetch_array($outboxresult);
//for outbox messages end

?>
		

<html>
<head>
<title>Trash</title>
</head>
<body bgcolor="#FF6666">
<?php include("header.php");?>

<table align="left" border="5" bordercolordark="#330033" width="100" height="100" cellpadding="1" cellspacing="3">
<?php //if(isset($_GET["id"]) == $uid){ ?>
<caption>Your inbox msges</caption>
<?php while($row = mysql_fetch_array($result)){ ?>
<form action="trash_msge.php" method="post">

<tr>
<pre>
	<th align="left" >
	<h3 style="color:blue"><?php echo $row["sendername"]."<br>";?></h3>
    <hr><?php echo $row["msgmatter"];?></hr>
	</th>
</pre>
	<td><input type="submit" name="restor_inmsg" value="RESTORE"/>
<!--       <input type="hidden" name="receiver_id" value="<?php //echo $row["receiverid"];?>" />
-->      
	<input type="hidden" name="inmsg_row_id" value="<?php echo $row["id"];?>" />
    </td>

  </tr>
  </form>
  <?php }?>
</table>


  

<table align="center" border="5" bordercolordark="#330033" width="100" height="100" cellpadding="1" cellspacing="3">


 <caption>Your outbox msges</caption>
 
<?php while($outcheck =mysql_fetch_array($outboxresult)){ ?>
<form action="trash_msge.php" method="post">

<tr><pre>
<th align="left" ><h3 style="color:blue"><?php echo $outcheck["receivername"]."<br>";?></h3>
                                     <hr><?php echo $outcheck["msgmatter"];?></hr>
  </th></pre>
   <td><input type="submit" name="restor_outmsg" value="RESTORE"/>
        <input type="hidden" name="outmsg_row_id" value="<?php echo $outcheck["id"];?>" />
<!--       <input type="hidden" name="sender_id" value="<?php //echo $outcheck["senderid"];?>" />
-->      </td>

  </tr>
   </form>
  <?php }?>
  </table>
 
  
  
  
  </body>
  </html>
  