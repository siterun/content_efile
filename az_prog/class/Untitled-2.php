<?php 
$val="this HERE is php coding <br>";
$val =ucwords(strtolower($val));
echo $val;

?>
<?php 
$val="tHIS HERE is php coding<br> ";
$val =ucwords($val);
echo $val;

?>
<?php 
$val="this HERE is php coding <br>";
$val =strtolower($val);
echo $val;

?>
<?php 
$val="this HERE is php coding <br>";
$val =ucfirst($val);
echo $val;
?>
<?php 
$val="this HERE is php coding <br>";
$val =ucfirst(strtolower($val));
echo $val;
?>
 <?php
setcookie("test_cookie", "test", time() - 3600);
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?><br>
<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
     echo("Integer is valid");
} else {
     echo("Integer is not valid");
}
?>
<?php
//the above one of this both r same ,only written style is different
$int = "100";

if (filter_var($int, FILTER_VALIDATE_INT) == true) {
     echo("Integer is valid");
} else {
     echo("Integer is not valid");
}
?>




</body>
</html>
