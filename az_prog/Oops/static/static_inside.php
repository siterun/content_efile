<?php
/* In static method ,we dont need to make the object of the class ,we can directly call that variable which is static and we cant call the variable by arrow sign like '$foo->my_static' ; as we call variable in other class earlier.
 */

class test
{
 static $a;//Static variable
}
test::$a = 5;
echo test::$a;
echo '<br>';

/* second example */
class testParent
{
	public static $var1;
}
class testChild extends testParent
{
		public static $var2;
		public $abc =2;
		function testFunction() 
			{
			echo self::$var2 = 3;
			echo parent::$var1 = 5;
			
			}
 
}

/* static calling ways begins */
//echo testChild::$var2 = '$var2';
//echo '<br>';
echo testChild::testFunction();//we can access but warning will also generate 
echo '<br>';
//echo testChild::$abc; //throw fatal error
/* static calling ways end */

/* non-static calling ways begins*/
	//non-static method is same here as static method and we use non-static method only when there is only non-static method in the class
/* non-static calling ways end */
?>


