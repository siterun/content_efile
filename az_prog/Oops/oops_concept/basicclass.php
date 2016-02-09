<?php
class Customer
{
	public $firstname;
	public $lastname;
	private $outstanding_amount = 0;
	public function setdata($firstname,$lastname)
	{
		$this->firstname=$firstname;
		$this->lastname=$lastname;
	}
	public function printdata()
	{
		echo $this->firstname;
		echo $this->lastname;
	}
}
   $c1=new Customer();
   $c2=new Customer();
   $c1->setdata('shahbaj','shah');
   echo $c1->printdata();

?>