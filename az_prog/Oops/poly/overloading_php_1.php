<?php

class A {
 
    public function __call($method_name,$arguments) {
 
        $methodArray = array('func','func1','func2');
 
        if (in_array($method_name,$methodArray) === false) {
            die("\n Method does not exist");
        }
 
        if (count($arguments) === 2) {
            $this->func($arguments[0],$arguments[1]);
        }
        elseif (count($arguments) === 1) {
            $this->func($arguments[0]);
        }
        elseif (count($arguments) === 0) {
            $this->func();
        }
        else {
            echo "\n unknown method";
            return false;
        }
    }
    function func($a = null,$b = null) {
        echo "\n <br/> from function func, arguments = $a $b";
    }
 
    function func1($a = null) {
        echo "\n <br/> from function func1";
    }
 
    function func2($a = null,$b = null) {
        echo "\n <br/> from function func2";
    }
 
} //
 
$objA = new A;
$objA->func('a');
$objA->func('a','b');
$objA->func('c');
$objA->func();

__call() function is triggered when invoking inaccessible methods in an object context. The syntax for __call() is mixed __call(string $name,array $arguments).

The $name parameter is the name of the method being called. The $arguments parameter is an enumerated array containing parameters passed to the $name method.
?>