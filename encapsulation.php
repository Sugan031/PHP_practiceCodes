<?php
    class student{
        public $name;
        public $group;
        public function __construct($name, $group)
        {
            $this->name=$name;
            $this->group=$group;
        }
        public function setGroup($grup){
            $this->group=$grup;
        }
        public function display(){
            echo "Welcom $this->name <br>";
            return $this->group.$this->group;
        }
    }
    $student = new student("Vijay","Bio");
    $student->setGroup("-Maths");
    echo "your {$student->display()} group";

?>