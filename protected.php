<?php
class Sample
{
    protected $value_1 = 100;
    protected $value_2 = 50;
    private $value_3 = 200;

    public function sum()
    {
        $sum = $this->value_1 + $this->value_2;
        echo $sum;
        echo $this->value_3;
    }

}
class sample2 extends Sample
{
    public function sub()
    {
        $sub = $this->value_1 - $this->value_2;
        echo $sub;
        // echo $this->value_3;
    }
}

$obj = new sample2();
$obj->sum();
$obj->sub();
