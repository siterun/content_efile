<?php
/* Multilevel inheritance -> means we can access the properties , methods of different classes i.e. GrandFather class and Father class from one class only i.e. Son class .....Son class possess all the properties(variables) and methods of GrandFather class and Father class and of itself too which means that we can call or use the properties and methods of both above classes in the Son class but calling depends on the access modifiers i.e. on private, protected, public   ..........
AND multilevel upto the Father i.e. inheritance of one class is known as Single level inheritance */ 

class GrandFather
{
	public function gfAge()
	{
		return  ' age is 80';
	}

}

class Father extends GrandFather
{
		
	public function fAge()
	{
		return  ' age is 50';
	}

}

class Son extends Father
{
	public function sAge()
	{
		return  'age is 20';
	}

     public function myHistory()
     {
	 echo "my grand father ".parent::gfAge();
	 echo "my father ".parent::fAge();//we can also use the name of class instead of 'parent'
       echo "my ".$this->sAge();
     }
	
}


$son = new Son();

$son->myHistory();

// output is

//my grand father age is 80
//my father age is 50
//my age is 20


?>