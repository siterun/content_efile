<?php
//Abstract classes in php are only for inheriting in other class.Once you will make any class abstract in php you can not create object of that class.If you have an abstract method in your abstract class then once you inherit your abstract class then it is necessary to declare your abstract method. If you will not declare your abstract method then PHP will throw error in that case.

 abstract class testParent
{
	//public abstract $name = 'abstract_variable'; //error-Properties cannot be declared abstract
	public $name = 'abstract_variable';
	protected abstract function abc(); //error if have body bcaz this is abstract function -Abstract function testParent::abc() cannot contain body 
	//public function efg(){return 'This content of efg in abstract class';}		
	//public abstract function lmn($a);
}
class testChild extends testParent
{    //$this->name='tsdfsdfsdfs';
	public function abc(){return 'this is content of abc in testChild';}
	public function xyz()
	{
		echo $this->name.'<br>';
		echo 'this is testChild->'.self::abc().'<br>';
		echo 'this is testchid->'.parent::efg();
	}
	/*this is not allow which means that override not allow
	public function lmn($a,$b)
	{
		echo $a;echo $b;
	} */
}
$a = new testChild();
//$a->xyz();
//$a->efg();
//$a->lmn(2,1);//in short-override not allow ->Declaration of testChild::efg() must be compatible with testParent::efg($a)



//echo $a->abc();//this is content of abc
 

/* $a = new testParent();//error- Cannot instantiate abstract class testParent 
$a->abc(); */ 
?>