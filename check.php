<?php
class sample2
{
    public static function fun()
    {
        echo "Yessss!......";
    }
    public function fun1()
    {
        $this->fun();
    }
}
echo sample2::fun();
$obj = new sample2();
$obj->fun1();
$obj->fun();
