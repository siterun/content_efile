<?php

class test
{
public function __construct()
{
//Your logic for constructor
}
public function __call($method_name , $parameter)
{
if($method_name == "overlodedFunction") //Function overloading logic for function name overlodedFunction
{
$count = count($parameter);
switch($count)
{
case "1":
//Business log in case of overlodedFunction function has 1 argument
echo "You are passing 1 argument";
break;
case "2": //Incase of 2 parameter
echo "You are passing 2 parameter";
break;
default:
throw new exception("Bad argument");
}
}
else
{
throw new exception("Function $method_name does not exists ");
}
}
}
$a = new test();
$a->overlodedFunction("ankur");
$a->overlodedFunction("techflirt" , "ankur");

?>