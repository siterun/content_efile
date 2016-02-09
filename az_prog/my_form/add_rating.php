How to add total from database or we use this for rating 
<br>
<?php
// You have to try by using the for loop...

 mysql_connect("localhost","root","");
mysql_select_db('student');

$sql = "select *from register";
$val = mysql_query($sql) or die(mysql_error());
//$bring = mysql_fetch_array($val);
$x = 0;
while($bring = mysql_fetch_array($val)) {


echo $y = $bring['id'];
echo".......";


    echo $z = $x + $y;echo "<br>";
    ($z."<br />");
	//$x = $y;
	//$y = $z;
    $x = $z;

}
echo "the final calculation is ".$z;   //or $x  ,, both are equal becaz in last $z value assigned to $x
echo "<br>";
$divide = $z/5;
echo $divide;
echo "<br>";
// if result will be in points then,....
$r=0;
echo $di = 20/5;

if($di<=0){
	echo "no rating yet";
	echo "<br>";
	}
if($di>=5){echo "5 star<br>";}
if($di>=4.5 AND $di<=5){echo "4.5 star<br>";}
if($di>=3.5 AND $di<4){echo "3.5 star<br>";}

?>
