<?php
 class par{
	public $vara="";
	function abc($a){echo 'content';}
}
class child extends par{
	 $this->vara = 'this is variable';
	function aa(){echo $this->vara = 'this is variable';}
	function abc($a){
		echo $a ;
		
	}
}
child
$obj = new child();
//$obj->abc('hello');
//$obj->aa();
$obj->vara; //cant use variable like this becaz not in any fucntion
?>