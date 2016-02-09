<?php 

 
 class Addition {
  function compute($first, $second) {
    return $first+$second;
  }

  function compute($first, $second, $third) {
    return $first+$second+$third;
  }
}

/*	********************************************************************************************* *** ******************************************************** 
In the example above, the function compute is overloaded with two different parameter signatures. *This is not yet supported in PHP. An alternative is to use optional arguments:
*/
class Addition1 {
  function compute($first, $second, $third = 0) {
    return $first+$second+$third;
  }
}
/* ***************************************************************************************************************************************** */
$Addition =  new Addition();
echo $Addition->compute(2,3);
//$Addition->compute(2,3,4);
?>