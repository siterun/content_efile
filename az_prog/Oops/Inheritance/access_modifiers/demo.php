<?php
include('child.php');
//$objChild = new childclass();
//echo $objChild->parentVar1; //parent_public_object_not_initialized
//echo $objChild->parentVar2; // Undefined private without class method error
//echo $objChild->parentVar3; // Cant access protected without class method error
//echo $objChild->childVar1; //child_public_object_initialized
//echo $objChild->childVar2; //Cant access private without class method error
//echo $objChild->childVar3; //Cant access protected without class method error

//$objParent = new parentclass();
//echo $objParent->parentVar1; //parent_public_object_initialized
//echo $objParent->parentVar2; //fatal private without class method error
//echo $objParent->parentVar3; //Cant access protected without class method error

/* function calling begins */
//$objChildfunction = new childclass();
//echo $objChildfunction->childpublic(); //childVar1 and childVar1 and childVar1 of contructor called(execute)
//echo $objChildfunction->childprivate(); //fatal error: Call to private method in all var	
//echo $objChildfunction->childprotected(); //fatal error: Call to protected method in all var	
//echo $objChildfunction->parentpublic(); //parentVar1 and parentVar2 and parentVar3 called(execute) not of constructor
//echo $objChildfunction->parentprivate(); //Fatal error: Call to private method in all var 
//echo $objChildfunction->parentprotected(); //Fatal error: Call to protected method in all var



//$objParentfunction = new parentclass();
// echo $objParentfunction->parentpublic(); //parentVar1 and parentVar2 and parentVar3 of contructor called(execute)
//echo $objParentfunction->parentprivate();   //Fatal error: Call to private method in all var  
//echo $objParentfunction->parentprotected(); //Fatal error: Call to protected method in all var

/* function calling ends */

?>