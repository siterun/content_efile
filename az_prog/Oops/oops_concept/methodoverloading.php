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