<?php class GrandFather
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
	 echo "my father ".$this->fAge();
       echo "my ".$this->sAge();
     }
	
}


$son = new Son();

$son->myHistory();