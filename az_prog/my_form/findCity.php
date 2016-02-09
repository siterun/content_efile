<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.blogspot.com             ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->

<?php $countryId=intval($_GET['country']);
$stateId=intval($_GET['state']);
mysql_connect("localhost","root","");
mysql_select_db('student');

$query="SELECT id,city FROM city WHERE countryid='$countryId' AND stateid='$stateId'";
$result=mysql_query($query);

?>
<select name="city">
<option>Select City</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value><?php echo $row['city']?></option>
<?php } ?>
</select>
