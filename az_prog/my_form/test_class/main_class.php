<?php
/* session_start();
$uid=$_SESSION["sid"]; */
//namespace database_connection;
class parent_data {
		protected $hostname;
		protected $database;
		protected $username;
		protected $password;
		
		function __construct (){
			$this->hostname = 'localhost';
			$this->database = 'student';
			$this->username = 'root';
			$this->password = '';
			mysql_connect($this->hostname,$this->username,$this->password);
			mysql_select_db($this->database) or die(mysql_error());
		}
		function select_full($tablename){
			$sql = "select * from ".$tablename ;
			$sql_result = mysql_query($sql) or die(mysql_error());
			return $sql_result;
		}
		function select_byid($tablename,$id){
			$sql = "select * from ".$tablename." where id=".$id ;
			$sql_result = mysql_query($sql) or die(mysql_error());
			return $sql_result;
		}
		function insert_data($tablename,$db_fname,$user_value){
			$sql ="insert into $tablename($db_fname)values($user_value)";
			mysql_query($sql) or die(mysql_error()); 	
		}
		function delete_byid($tablename,$id){
			$deletetable ="delete from ".$tablename." where id='$id'";
			mysql_query($deletetable) or die(mysql_error());
		}
		function update_database($tablename,$db_fname,$userid){
				$datas=array();
				foreach($db_fname as $data => $user_values)
				{  $datas[]="$data='$user_values'" ; }
				
				echo $sql= "update $tablename set ".join(",",$datas)." where id='$userid'";
				mysql_query($sql) or die(mysql_error());
				//header(“location:select.php”);
				}
		
}


?>