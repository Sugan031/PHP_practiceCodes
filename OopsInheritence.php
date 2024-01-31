<?php
class a
{
    public function fun1()
    {
        echo "javatpoint";
    }
}
class b extends a
{
    public function fun2()
    {
        echo "SSSIT";
    }
}
$obj = new b();
$obj->fun1();
$obj->fun2();

$obj1 = new a;
$obj1->fun1();
