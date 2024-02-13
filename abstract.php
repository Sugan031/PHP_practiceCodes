<?php
//parent class
abstract class Cars {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro(): string;
    public function extro(){
        
    }
}

//child class
class Audi extends Cars {
    public function intro(): string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Cars {
    public function intro(): string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";
?>
