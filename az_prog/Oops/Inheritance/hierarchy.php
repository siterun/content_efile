<?php
/* Hierarchy inheritance means we can access the same class i.e. Father class from the different classes i.e. Younger class and Elder class which means that now Elder class and Younger class possesses power of calling or use of all the properties and methods of the Father class but depends on the access modifiers i.e. private, protected, public */


class Father
{
	protected function pocketMoney()
	{
		return  'Take this 500 $';
	}

}

class Elder extends Father
{
		
	public function myEarning()
	{
		echo "Father told me ".parent::pocketMoney();

	}

}

class Younger extends Father
{
	public function myEarning()
	{
		echo "Father told me ".parent::pocketMoney();

	}
}	

class son extends Younger
{
	public function mysonclass()
	{
		echo 'this is son class->'.parent::pocketMoney().'<-son class end';
	}
	
}

$son = new son();
$son->mysonclass();

//$elder = new Elder();

//$elder->myEarning();  // output Father told me Take this 500 $

//$younger = new Younger();

//$younger->myEarning();  // output Father told me Take this 500 $

?>