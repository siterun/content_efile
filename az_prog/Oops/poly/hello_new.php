<?php

/* copy('call_by_value.php','hello_new.php');//this will copy call_by_value.php file into hello_new.php and if hello_new.php not exist then it will create new file as hello_new.php and if exist then it remove the earlier content of hello_new.php file and insert the copy content of call_by_value.php file into it. */

/* unlink('call_by_value.php');//this will permanently delete call_by_value.php file 

Warning: unlink(D:/test_folder/hello.txt): Permission denied in ...
To suppress this warning notice displayed to the browser, we can use the unlink() function with the prefix @ symbol. */


	function entered_val(){
		
		 if (func_num_args() != 2) {
        trigger_error('Expecting two arguments', E_USER_ERROR);
    }
		$args = func_get_args();
		//$args = 0;
		$arg1= $args[0];
		$arg2 =$args[1];
		
	if( is_int($arg1) && is_int($arg2)){
		//first way
		//return $arg1 + $arg2 ; 
		   //second way
		$sum = 0;
		foreach($args as $arg){
			$sum += $arg;
		}
		return $sum;
	}	
		
	if(is_string($arg1) && is_string($arg2)){
		return $arg1 .  ' ' . $arg2;
		
	}	
		trigger_error('Incorrect parameters passed', E_USER_ERROR);
	}
	echo entered_val(10, 15), '<br />'; //outputs 25
echo entered_val("Hello", "World"), '<br />'; //outputs Hello World


?>