<?php
class a
{
    public function fun1()
    {
        echo " I am in class A";
    }
}
class b extends a
{
    public function fun2()
    {
        echo " i am in class B";
    }
}
class c extends b{
    public function fun3(){
        echo "I am in class c";
    }
}

$obj = new c();
$obj->fun3();
$obj->fun2();
$obj->fun1();
$obj1 = new b();
$obj1->fun1();
$obj1->fun2();
// $obj1->fun3(); error

$obj2 = new a;
$obj2->fun1();
// $obj2->fun3(); error
// $obj2->fun2(); error
