<?php 
class control  
{
	private $hostname ="localhost";
	private $username ="root";
	private $password ="";
	private $database ="student";
	
     function database($hostname,$username,$password,$database)
	{
	   mysql_connect("$hostname","$username","$password");
       mysql_select_db("$database") or die(mysql_error());	
	}
	
	function select($query_name,$code) 
	{
	 
	 $check =mysql_query($query_name) or die(mysql_error());
	 return $check;
	}
		
}
?>
<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "student";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		mysql_select_db($this->database,$conn);
	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>