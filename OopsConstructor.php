<?php
class fruits
{
    public $Kilograms;
    public $price;

    public function __construct($Kilograms, $price)
    {
        $this->Kilograms = $Kilograms;
        $this->price = $price;
    }
    public function getkgs()
    {
        return $this->Kilograms;
    }
    public function getprice()
    {
        return $this->price;
    }
}

$apple = new fruits(20, 2000);
$banana = new fruits(2, 120);
$guava = new fruits(1, 60);

echo "{$apple->getkgs()} kgs of apple costs {$apple->getprice()}<br>";
echo "{$banana->getkgs()} kgs of banana costs {$banana->getprice()}<br>";
echo "{$guava->getkgs()} kgs of guava costs {$guava->getprice()}<br>";
