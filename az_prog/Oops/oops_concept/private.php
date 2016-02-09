<?php
class User
	{
		private $name;
		public function SetName($recievename)
		{
			$this->name=$recievename;
			
		}
		public function Displayname()
		{
			echo $this->name;
			echo '<br>';
		}
	}
	$q=new User();
	$q->SetName("shahbaj");
	$q->Displayname();
	