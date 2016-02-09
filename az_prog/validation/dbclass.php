<?php
class db
{
/*  	function db($hostname,$username,$password,$database)
*/
     function database($hostname,$username,$password,$database)

	{
	   mysql_connect("$hostname","$username","$password");
       mysql_select_db("$database") or die(mysql_error());	
	}
	function insert($tablename,$database_f,$user_value)
	{
	  echo  $sql ="insert into $tablename($database_f)values($user_value)";
       mysql_query($sql) or die(mysql_error()); 	
	}
	
	  function select($tablename)
	  {  
	   $selecttable ="select * from $tablename";
       $value = mysql_query($selecttable) or die(mysql_error());
	   return $value;
	  }
	   function select_view($tablename,$id)
	  {
		  $viewtable ="select * from register where id='$id' ";
		  $viewval =mysql_query($viewtable) or die(mysql_error());
		  return $viewval;
	  }
	function delete($tablename,$id)
	  {
		 echo $deletetable ="delete from register where id='$id'";
		echo mysql_query($deletetable) or die(mysql_error());
	  }
	  function select_edit($tablename,$id)
	  {
		  $edittable ="select * from register where id='$id' ";
		  $editvalue =mysql_query($edittable) or die(mysql_error());
		  return $editvalue;
	  }
	        function update($tableName,$dbFieldName,$userid)
				{
				$datas=array();
				foreach($dbFieldName as $data => $user_values)
				{  $datas[]="$data='$user_values'" ; }
				
				echo $sql= "update $tableName set ".join(",",$datas)." where id='$userid'";
				mysql_query($sql) or die(mysql_error());
				//header(“location:select.php”);
				}
}


?>
