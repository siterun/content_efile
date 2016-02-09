<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$rec_limit = 5;

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('student');
/* Get total number of records */
$sql = "SELECT count(id) FROM register ";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval);
echo $rec_count = $row[0];

if(isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

echo $sql = "SELECT * ".
       "FROM register ".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval))
{
    echo "<br>USER ID :{$row['id']}  <br> ".
         "USER NAME : {$row['username']} <br> ".
         "USER PHOTO : {$row["pic"]} ".
         "--------------------------------<br>";
} 

if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"paging.php?page=$last\">Last 5 Records</a> |";
   echo "<a href=\"paging.php?page=$page\">Next 5 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"paging.php?page=$page\">Next 5 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"paging.php?page=$last\">Last 10 Records</a>";
}
mysql_close($conn);
?>
