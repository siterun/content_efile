<?php
  class Test
  {
	  public function sum($x,$y)
	  {
	  return $x=$y;
	  }
	 public function sum($x,$y,$z)
     {
	 return $x+$y+$z;
	 }	 
  }
  $s=new Test();
  echo $s1->sum(1,2,3);
  echo $s1->sum(2,3,4);
  