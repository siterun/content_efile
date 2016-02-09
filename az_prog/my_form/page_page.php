<?php 
session_start();
$uid =$_SESSION["sid"];

mysql_connect('localhost','root','');
mysql_select_db('student');

$page_name = $_GET["page_name"];
$query_check= mysql_query("select *from page_create where page_name='$page_name' And user_id='$uid'") or die(mysql_error());
$fetch_querycheck_result =mysql_fetch_array($query_check);

?>

<html>
<body>
<?php include("header.php");?>
<table align="center" border="1" width="540" >
<tr>
    <td width="150" height="76"></td>
    <td width="194"></td>
    <td width="174"></td>
</tr>

<tr>
    <td height="151"><img src="pages photo/<?php echo $fetch_querycheck_result["page_photo"];?>" width="100px" height="100px"/></td>
    <td><?php echo $fetch_querycheck_result["page_name"];?></td>
    <td><?php echo $fetch_querycheck_result["about_page"];?></td>
</tr>

<tr>
    <td height="87"></td>
    <td></td>
    <td></td>
</tr>
</table>
</body>
</html>