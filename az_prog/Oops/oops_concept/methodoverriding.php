<?php

class Foo {
   function myFoo() {
      return "i am foo";
   }
}

class Bar extends Foo {
   function myFoo() {
      return "i am overrride";
   }
}

$foo = new Foo;
$bar = new Bar;
echo($foo->myFoo()); 
echo($bar->myFoo()); 
?>