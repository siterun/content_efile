<?php 
/* PHP support single and multilevel inheritance and hybrid or hierarchical but not multiple inheritance.
Inheritance is -- 
first class - parentclass{} then Single Inheritance begins if we inherited this to another class i.e.
class childclass extends parentclass and then Multilevel Inheritance begins if we inherited this to one new class i.e. 
class subchildclass extends childclass(here class subchildclass possess property of parentclass and childclass)
and Hierarchy Inheritance means that subchildclass and childclass both possessing property of parentclass i.e. two different class inheriting the property of one same class
and Hybrid Inheritance means inheritance of that one class from different classes which is already inheriting the property of any class.
 detail of hierarchy and hybrid inheritance is in hierarchy.php and hybrid.php respectively*/

class parentclass{
	
	public    $parentVar1  	=  'parent_public_variable_not_initialized';
	private   $parentVar2 	=  'parent_private_variable_not_initialized';
	protected $parentVar3  	=  'parent_protected_variable_not_initialized';	 
	
	
	function __construct(){
			$this->parentVar1  	=  'parent_public_variable_initialized';
			$this->parentVar2 	=  'parent_private_variable_initialized';
			$this->parentVar3  	=  'parent_protected_variable_initialized';					
		}
		/* Hybrid or hierarchical type of inheritance example begins  */
	public function combine_parent(){
		return  'This is parent content';
		//if we do 'echo' instead of 'return' then the value of here comes first during its calling in the child .
		}
		/* Hybrid or hierarchical type of inheritance example end */
	public function parentpublic(){
			$this->parentVar1  ;   
			$this->parentVar2 ;
			$this->parentVar3  ;
	   echo $this->parentprivate();
	   /* if 'return' is written inside the calling function i.e. parentprivate() here, then we have to write 'echo' when we want to echo the data of this function i.e. parentprivate() 
	   and if 'echo' is written inside the calling function i.e. parentprivate() here, then we dont need to write 'echo' because it will echo that data itself which is echo in that function i.e. parentprivate */
		}
	private function parentprivate(){
			return $this->parentVar1 = 'new change ' ;
			function display(){
				 
				 'this changed';
			}
			 display();
			$this->parentVar2  ;
			$this->parentVar3  ;
			/* here we use 'return' due to this rest of content which 'echo' will not execute because after the 'return' command compiler go back from the method  */
		}
	protected function parentprotected(){
	   echo	$this->parentVar1  ;
			$this->parentVar2  ;
			$this->parentVar3  ;
		}
}


/* private class privateclass{
	
	public    $privateclass1  	=  'parent_public_variable_not_initialized';
	private   $privateclass2 	=  'parent_private_variable_not_initialized';
	protected $privateclass3  	=  'parent_protected_variable_not_initialized';	 
	
	
	function __construct(){
			$this->privateclass1  	=  'parent_public_variable_initialized';
			$this->privateclass2 	=  'parent_private_variable_initialized';
			$this->privateclass3  	=  'parent_protected_variable_initialized';		
	}
}
$objprivateclass = new privateclass();
echo $objprivateclass->$privateclass1;
echo $objprivateclass->$privateclass2;
echo $objprivateclass->$privateclass3; */
?>