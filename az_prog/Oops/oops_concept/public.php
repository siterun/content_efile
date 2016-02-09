<?php
 class User
 {
	 public $name;
	 public function Displayname()
	 {
	 echo $this->name;
	 echo "<br />";
     }
 } 
 
 $a=new User();
 $a->name="shahbaj";
 echo $a->name;
  echo "<br />";
  echo $a->DisplayName();