<?php 
include('parent.php');
class childclass extends parentclass {
	// We can redeclare the public and protected method, but not private
	
	public $childVar1  		= 'child_public_variable_not_initialized';
	private $childVar2 		= 'child_private_variable_not_initialized';
	protected $childVar3  	= 'child_protected_variable_not_initialized';
	protected $parentVar3    = 'this is parent protected in child'; 

			function __construct(){		
			$this->childVar1  	=  'child_public_object_initialized';
			$this->childVar2 	=  'child_private_variable_initialized';
			$this->childVar3  	=  'child_protected_variable_initialized';	
			//$this->parentVar3  = 'constructor this is parent protected in child constructor';
			} 
			/* example of hybrid or hierarchical type of inheritance begins */
			public function combine_child(){
				echo 'Child begin-> '.parent::combine_parent().' <-Child end. ';
			}
			/* example of hybrid or hierarchical type of inheritance end */
			public function childpublic(){
					$this->childVar1  ;   
					$this->childVar2 ;
					$this->childVar3  ;
			echo	$this->parentVar3  ; //if we echo this which is parentclass variable,then 'parent_protected_variable_not_initialized' this will echo as we know outside constructor values executed because without of object initialize of class of this variable i.e. parentclass and if we assigned any value to this variable here or above then that value will executed.
					$this->childprivate();
			}

			private function childprivate(){
				$this->childVar1 ;
				$this->childVar2  ;
				$this->childVar3  ;
			}
			protected function childprotected(){
			echo	$this->childVar1  ;
				$this->childVar2  ;
				$this->childVar3  ;
			}

}
/* Only for public combine function,beginning */

	//$objCombinechild = new childclass();
	 //$objCombinechild->combine_child();
	
/* Ending of public combine function */

/* function calling begins */

			//$objParentfunction = new parentclass();
			//echo $objParentfunction->parentpublic(); //parentVar1 and parentVar2 and parentVar3 of contructor called(execute)
			//echo $objParentfunction->parentprivate(); //fatal error: Call to private method in all var		
			//echo $objParentfunction->parentprotected(); //Fatal error: Call to protected method in all var	

	// $objChildfunction = new childclass();
	//echo $objChildfunction->childpublic(); //childVar1 and childVar1 and childVar1 of contructor called(execute)
	//echo $objChildfunction->childprivate();  //fatal error: Call to private method in all var	 
	//echo $objChildfunction->childprotected(); //Fatal error: Call to protected method in all var	
	// echo $objChildfunction->parentpublic(); //parentVar1 and parentVar2 and parentVar3 called(execute) not of constructor
	//echo $objChildfunction->parentprivate(); //Fatal error: Call to private method in all var 
	//echo $objChildfunction->parentprotected(); //Fatal error: Call to protected method in all var

/* function calling ends */

/* variable calling begins */

			 //$objChild = new childclass();
			//echo $objChild->parentVar1; //parent_public_object_not_initialized
			//echo $objChild->parentVar2; // Undefined private without class method error
			//echo $objChild->parentVar3; // Cant access protected without class method error
			//echo $objChild->childVar1; //child_public_object_initialized
			//echo $objChild->childVar2; //Cant access private without class method error
			//echo $objChild->childVar3; //Cant access protected without class method error
			//echo $objChild->parentVar3; //Cant access protected without class method error

		//$objParent = new parentclass();
		//echo $objParent->parentVar1; //parent_public_object_initialized
		//echo $objParent->parentVar2; //Undefined private without class method error
		//echo $objParent->parentVar3; //Cant access protected without class method error

/*variable calling ends  */
?>