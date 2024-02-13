<?php
    //public
    class Modifiers{
        public $name = "Sanjeev";
        protected $number = 8976;
        private $address ="N0 7, Vivekanadar theru, Dubai";

        public function __construct()
        {
            echo "{$this->name} => {$this->number} => {$this->address}";
        }
    }
    class subModifiers extends Modifiers{
        public function __construct()
        {
            echo $this->name;
            echo $this->number;
            // echo $this->address; it is private so it will result in error
        }
    }
    $subObj = new subModifiers();
    $obj = new Modifiers();
    echo $obj->name;
    // echo $obj->number;
?>