<?php
include('main_class.php');
$obj = new parent_data();



$result = $obj->select_full('register');
//$row = mysql_fetch_assoc($result);
/* while($row= mysql_fetch_assoc($result)){
	echo '<pre>';
print_r($row);
	echo '</pre>';
} */
/* $username = 'bella';
$password = 'bella';
$tablename = 'register';
$id = 4;
$dbfname = array('username'=>$username,'password'=>$password);
  
  $obj->update_database($tablename,$dbfname,$id); */
/* $res = mysql_fetch_array($result);
print_r($res);
 */
 $str= 'This is THE name';
echo  $str_ch = strtolower($str);
?>