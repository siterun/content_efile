<?php
class test {
	public $name = 'localhost';
	final public function abc(){
		return 'Inside the class test into abc';
	}
}
class child extends test {
	
	public function xyz(){
		echo 'child class->'.test::abc();
	}
	/* public function abc(){
		echo 'child class->'.test::abc();
	} //this will cause fatal error becaz we cant override 'final' access modifier
	*/
}
 
 $child = new child();
 echo $child->abc().'<br>';
  $child->xyz();
?>