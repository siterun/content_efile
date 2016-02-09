<?php

class human {
public $gender;

public function __construct($gender)
{
$this->gender = $gender;

echo self::get_gender();
}

public function get_gender()
{
return $this->gender;
}
}
$Johnny = new human('male');
