<?php
session_start();
$id=10;
$_SESSION["id"]=$id;
echo $_SESSION["id"];

?>