<?php

function swap($x, $y)
{
	
   //$temp = 'temp';
   echo 'parent x  - '.$temp = $x; // save the value at address x 
   echo '<br>';
   echo 'parent y  - '.$x = $y;    // put y into x
    echo '<br>';
   echo 'y have x - '.$y = $temp; // put x into y 
    echo '<br>';
  echo 'swap x - '.$x;
   echo '<br>';
  echo 'swap y - '.$y;
    
}

  
  
 
 /*   function neth()
   {
	echo  swap(5, 6);
      echo $x;
	  echo $y;
   }
   neth(); */
     swap(5, 6);
	 ?>
	 
 
<?php
	 echo '<br>';
	 $a = 'name';
$$a = "Paul";
echo $name; 
?>
<?php
echo '<br>';
function increment_value($y) {
    $y++;
    echo $y;
}

function increment_reference(&$y) {
    $y++;
    echo $y;
}

$x = 1;
increment_value($x); // prints '2'
echo '<br>';
echo $x; // prints '1'
echo '<br>';
increment_reference($x); // prints '2'
echo '<br>';
echo $x; // prints '2'


?>
<?php
echo '<br>';
 $new = 'this is new';
 $new_again = 'this is new again';
 unset($new);
 
/*  if(isset($new)){
	 echo 'this is first one ';
	 
 } 
 elseif (isset($new_again)){
	 echo 'this is new again elseif first not two';
	 
 }
else {
	echo 'this is the else condition of the if statement here it ends';
} */

//condition used in a new way 
if(isset($new)):
	 echo 'this is first one ';
	 
 
 elseif (isset($new_again)):
	 echo 'this is new again elseif first not two';
	 
 
else :
	echo 'this is the else condition of the if statement here it ends';
endif ;


?>