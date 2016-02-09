<?php
class Father
{
	public function pocketMoney()
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
				 $elder = new Elder();

			$elder->myEarning();  

			$younger = new Younger();

			$younger->myEarning();  



