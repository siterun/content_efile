<?php
     abstract class Car {
	 protected $tankVolume;
	 public function setTankVolume($volume)
	  {
		$this -> tankVolume = $volume;
	  }
	  abstract public function calcNumMilesOnFullTank();
	 }
	

	class Honda extends Car {
		 public function calcNumMilesOnFullTank()
		  {
			$miles = $this -> tankVolume*30;
			return $miles;
		  }
}
     
	 class Toyota extends Car {
		  public function calcNumMilesOnFullTank()
  {
    return $miles = $this -> tankVolume*33;
  }
 
  public function getColor()
  {
    return "beige";
  }
}


    $toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank();//330
echo $toyota1 -> getColor();//beige
