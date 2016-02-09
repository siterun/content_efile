<?php
    class dog {
        public $Name;
        protected function getName() {
            return $this->Name;
        }
    }

    class poodle extends dog {
        public function bark() {
            print "'Woof', says " . $this->getName();
        }
    }
    
    $poppy = new poodle;
    $poppy->Name = "Poppy";
    $poppy->bark();
?>