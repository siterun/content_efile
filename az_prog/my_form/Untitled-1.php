<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function sum($x, $y) {
      $z=$x+$y;
     return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<button type="submit" name="camper" formaction="formindb_hoh_1.php">Camper</button>
  
  <input type="submit" name="camper" onclick="submitForm('formindb_hoh_1.php')" value="camp" class="submit_button" />
  
    <input type="text" name="camper" onclick="submitForm('formindb_hoh_1.php')" value="camper" class="submit_button" />


 <a href="form2.php"><input type="submit" value="send"/></a>
 <input type="" src="images/Koala.jpg" value="send"/>
 
 
 <style>
ol#menu  {
    padding: 0;
}

ol#menu li {
    display: inline;
}

ol#menu li a {
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 10px 10px 0 0 ;
	margin:4px;
}

ol#menu li a:hover {
    background-color: orange;
}<!--"ol"which used near the 'id' name is just to make a remember that this 'id' is for "ol" and if u make space between "ol" and 'id name' then that 'id' will not act or execute which means that it will become useless except the 1st 'id name'(#menu),and if u give space in "ol" and 1st 'id name' then that will create a space from the boundary where it had written(or programmed) but that space should only be at the 1st id name time not at everywhere-->
</style>
</head>
<body>

<h2>Horizontal List</h2>

<ol id="menu" dir="rtl">
  <li><a href="/html/default.asp">HTML</a></li>
  <li><a href="/css/default.asp">CSS</a></li>
  <li><a href="/js/default.asp">JavaScript</a></li>
  <li><a href="/php/default.asp">PHP</a></li>
</ol>  
 
