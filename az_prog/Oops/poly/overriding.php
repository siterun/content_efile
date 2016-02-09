<?php 
require('int_or_string.php');
//namespace database;//if namespace then function with same class name will not be a constructor ,we have to used the php magic function __construct to make constructor.
class testParent
{
public function f1()
{
echo 1;
}
public function f2()
{
echo 2;
}
}
class testChild extends testParent
{
function f2() //overriding function f2
{
echo "this is f2 of testChild";
}
}
//$a = new \database\testChild(); //calling by using 'namespace value' here works same as normal access
//$a = new namespace\testChild(); //calling by using 'namespace' here works same as normal access
//$a->f2();//it will print ankur

$input_string = " String Extract";
echo rtrim($input_string)."<br/>";
echo substr($input_string,2)."<br/>";
echo substr($input_string,2,2)."<br/>";
echo substr($input_string,-2)."<br/>";
echo substr($input_string,-2,4)."<br/>";
echo substr($input_string,2,-4)."<br/>";
echo substr($input_string,-4,-3)."<br/>";
require_once('int_or_string.php');
?>
