<?php
    final class fcheck{
        final public function fun(){
            echo "I am in final function";
        }
    }
    // class doublefcheck extends fcheck{ cannot extend final class
    //     // public function fun(){
    //     //     echo "I am in normal function";
    //     // } cannot override final method
    // }

    // $obj = new doublefcheck();
    $obj = new fcheck();
    $obj-> fun();
?>