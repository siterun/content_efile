<?php

class human {
public $gender;

public function __construct($gender)
{
$this->gender = $gender;
}
public function set_gender($gen){
	$this->gender=$gen;
}

public function get_gender()
{
return $this->gender;
}
}
$Johnny = new human('male');
$Johnny->set_gender('female');
echo $Johnny->get_gender();