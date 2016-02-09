<?php
// Array with names
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("student");

$mysql = "select username from register";
$check = mysql_query($mysql) or die(mysql_error());
while($result = mysql_fetch_array($check)) {
 $a[] = $result["username"];
}
 

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>