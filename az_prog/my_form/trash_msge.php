<?php 
if(isset($_GET['action'])&& $_GET['action']=='outbox' && $_GET["rowid"]!='') {
mysql_connect("localhost","root","");
mysql_select_db("student");
$rowid= $_GET["rowid"];

$sql = "UPDATE messages SET trash='1' where id=".$rowid;
$result = mysql_query($sql) or die(mysql_error());
  header("location:outbox.php?msg=ur outbox msg deleted");
}
if(isset($_GET['action'])&& $_GET['action']=='inbox' && $_GET["rowid"]!='') {
mysql_connect("localhost","root","");
mysql_select_db("student");
$rowid=$_GET["rowid"];

$sql = "UPDATE messages SET trash='1' where id=".$rowid;
$result = mysql_query($sql) or die(mysql_error());

header("location:inbox.php?msg=ur inbox msg deleted");
}
if(isset($_POST['restor_inmsg'])) {
mysql_connect("localhost","root","");
mysql_select_db("student");
$row_id=$_POST["inmsg_row_id"];

 $sql = "UPDATE messages SET trash='0' where id=".$row_id;
$result = mysql_query($sql) or die(mysql_error());
  header("location:trash.php?msg=ur msg restore");
}
if(isset($_POST['restor_outmsg'])) {
mysql_connect("localhost","root","");
mysql_select_db("student");
$row_id=$_POST["outmsg_row_id"];

$sql = "UPDATE messages SET trash='0' where id=".$row_id;
$result = mysql_query($sql) or die(mysql_error());
  header("location:trash.php?msg=ur msg restore");
}

?>