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
				
				$sql= "update $tablename set ".join(",",$datas)." where id='$userid'";
				mysql_query($sql) or die(mysql_error());
				//header(“location:select.php”);
				}
		function for_msg($tablename,$id){
		$sql ="select fullname,id from $tablename where id=$id" ;
		$sql_result = mysql_query($sql) or die(mysql_error());
			return $sql_result;
		}
		function select_msgs($tablename,$uid,$trash,$unread_mes_status){
		 $sql = "SELECT X.senderid, X.msgmatter, X.send_date, X.sendername, X.read_status, U.unread_count
						FROM ( 
							SELECT senderid, msgmatter, sendername, send_date, read_status 
							FROM $tablename 
							WHERE receiverid=$uid AND trash=$trash 
							ORDER BY senderid DESC, send_date DESC 
						) AS X 
						LEFT JOIN (
							SELECT COUNT(*) AS unread_count, senderid
							FROM $tablename 
							WHERE receiverid = $uid 
							AND trash = $trash 
							AND read_status = $unread_mes_status
							GROUP BY senderid
						) AS U ON X.senderid = U.senderid
						GROUP BY X.senderid";
		$result = mysql_query($sql) or die(mysql_error());
		return $result;
		}
		 /* function count_unread($tablename,$uid,$unread_mes_status){
			$sql = "SELECT senderid, count(read_status) FROM $tablename where receiverid=$uid AND read_status=$unread_mes_status GROUP BY senderid ";
			$sql_result= mysql_query($sql) or die(mysql_error());
			return $sql_result;
		} */ 
		function update_unread($tablename,$db_fname,$uid,$seid,$trash){
				$datas=array();
				foreach($db_fname as $data => $user_values)
				{  $datas[]="$data='$user_values'" ; }
				
				$sql= " update $tablename 
						set ".join(",",$datas)." 
						where receiverid=$uid AND senderid=$seid ";
				$sql_result = mysql_query($sql) or die(mysql_error());
				//return $sql_result;
				//header(“location:select.php”);
				}		
		function get_content($tablename,$db_fname,$uid,$seid,$trash){
				$sql= "	SELECT X.senderid, X.receiverid, X.sendername, X.receivername, X.trash, X.msgmatter
							FROM (
								  select senderid, sendername, receiverid, receivername, msgmatter,trash      
								  FROM $tablename        
								  where receiverid = $uid AND senderid = $seid AND trash = $trash          
								  OR receiverid = $seid  AND senderid = $uid AND trash = $trash 
						   ) AS X ";
				$sql_result = mysql_query($sql) or die(mysql_error());
				return $sql_result;
				//header(“location:select.php”);
				}
		 function user_online_status($tablename,$db_fname, $db_values){
			$sql = "insert into $tablename($db_fname)values($db_values)";
			$sql_result = mysql_query($sql) or die(mysql_error());
		}	
		
		function all_online_users($table_1, $table_2,$uid){
			$sql = "select login_status, user_id from $table_1 ";
			$sql_result = mysql_query($sql) or die(mysql_error());
			return $sql_result;
		} 
		 function user_login_status($tablename,$uid){
			$sql = "select login_status from $tablename where id=$uid" ;
			$sql_result = mysql_query($sql) or die(mysql_error());
			return $sql_result;
		} 
		function page_creation($tablename, $uid){
			$sql="select page_name from $tablename where user_id=$uid ";
			$sql_result = mysql_query($sql) or die(mysql_error());
			return $sql_result;
		}
		function register_data($tablename){
			$sql = "select id, fullname, pic from register ";
			$result =mysql_query($sql) or die(mysql_error());
			return $result;
		}
}

?>