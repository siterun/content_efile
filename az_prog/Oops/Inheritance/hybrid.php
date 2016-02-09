<?php 
/* Hybrid inheritance means we can access the inherited class i.e. father class(inherited from GrandFather class) from the other class i.e. younger class and elder class which means that younger class and elder class possesses the power of calling and using of the properties and methods of the Father class and Father class is inheriting to GrandFather class then this means that both the class i.e. younger class and elder class also can access the properties and methods of the GrandFather class but calling or accessing power depends on the access modifiers i.e. private, protected, public. */


class GrandFather
{
	public function pocketMoney()
	{
		return  'Take this 1000 $';
	}

}


class Father extends GrandFather
{
	public function myIncome()
	{
		echo "My father told ".parent::pocketMoney();
	}
	
	public function myExpense()
	{
		return 'Take this 400 $
';
	}
}

class Elder extends Father
{
		
	public function myEarning()
	{
		echo "Father told me ".parent::myExpense();

	}

}

class Younger extends Father
{
	public function myEarning()
	{
		echo "Father told me ".parent::myExpense();

	}

	
}


$elder = new Elder();

$elder->myEarning();  // output Father told me Take this 500 $

$younger = new Younger();

$younger->myEarning();  // output Father told me Take this 500 $

?>