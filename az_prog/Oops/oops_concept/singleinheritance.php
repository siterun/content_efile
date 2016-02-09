<?php
		class Animal
		{
			public $name;
			
			public function Greet()
			{
				return  "Hello, I'm some sort of animal and my name is " . $this->name;
			}
		}
		class Dog extends Animal
		{
			
		}
		//$animal = new Animal();
		//echo $animal->Greet();
		$dog = new Dog();
		$dog->name = "Bob";
		echo $dog->Greet();