<?php

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