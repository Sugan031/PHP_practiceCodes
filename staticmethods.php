<?php
    class A{
        public static function welcome(){
            echo "hello World";
        }
        public function __construct()
        {
            self ::welcome();
        }
        public function sayMessage(){
            self :: welcome();
        }
    }
    class B{
        public function message() {
            A::welcome();
          }        
    }
     $obj = new A();
     $obj->sayMessage();
    A ::welcome();
    $obj1 =  new B;
    $obj1->message();
?>