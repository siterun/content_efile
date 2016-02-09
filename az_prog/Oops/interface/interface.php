<?php
//1)Whenever we will implement abc interface in our class then we have to create method with name xyz. If we will not create function xyz then it will throw error.2)we can only define method in interface with public accessibility. If we will use other than public visibility in interface then it will throw error.3)Also while defining method in your interface do not use abstract keyword in your methods.4)You can not implement 2 interfaces if both share function with same name. It will throw error.


interface abc
{
public function xyz($b);
//protected function xyz($b);//error- Access type for interface method abc::xyz() must be omitted 
//static function xyz($b);//error- Cannot make static method abc::xyz() non static in class test
}

class test implements abc
{
public function xyz($b)
{
echo $b.'<br>';
echo 'this is content of xyz in test';
}
}
$test = new test();
$test->xyz('hey');
?>