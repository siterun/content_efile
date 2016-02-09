<?php
/* Property cannot be declared abstract in abstract class and for abstract method-> class should be abstract */

abstract class test{
	public $vara = 'abstract_class_variable';
	abstract protected function abc();
}
class child extends test {
	
	public function abc(){
		echo $this->vara.'<br>';
		echo 'Inside the child class';
	}
}
$test =new child();
$test->abc();
?>