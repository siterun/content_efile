<?php
interface template1
{
public function f1($a=1);
//public function f5($a);
}
interface template2
{
public function f2($a);
}
/* interface template3 extends template1, template2
{
public function f3();
} */
/* interface template4 
{
public function f1();
} */
class test implements template1, template2
{
public function f1($a='name')
{
echo $a;
}
 public function f2($f2)
{
echo $f2;
}
/* cant override this 
public function f5($a,$b)
{
echo $a;echo $b;
} */
/*public function f3()
{
//your function body
} */

/* public function f4()
{
//your function body
} */

}

$test = new test();
//$test->f5('hello',2);//cant override ,error is--- Declaration of test::f5() must be compatible with template1::f5($a)
echo '<br>';
//$test->f1();
?>