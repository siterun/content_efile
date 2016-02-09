<?php

class Foo {

    public function __call($method, $args) {

        if ($method === 'findSum') {
            echo 'Sum is calculated to ' . $this->getSum($args);
        } else {
            echo "Called method $method";
        }
    }

    private function getSum($args) {
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }
        return $sum;
    }

}
$foo = new Foo;
$foo->bar1(); // Called method bar1
echo '<br>';
$foo->bar2(); // Called method bar2
echo '<br>';
$foo->findSum(10, 50, 30); //Sum is calculated to 90
echo '<br>';
$foo->findSum(10.75, 101); //Sum is calculated to 111.75
?>