<?php
    class dog {
        static $Name;
        protected function getName() {
            return $this->Name;
        }
    }

    class Poodle extends dog {
        static function bark() {
            print "'Woof', says " . $this->getName();
        }
    }
    
    
    dog::$Name ='puppy';
    echo dog::$Name;
	
?>