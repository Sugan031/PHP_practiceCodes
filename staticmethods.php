<?php
    class A{
        public static function welcome(){
            echo "hello World<br>";
        }
        public function __construct()
        {
            self ::welcome();
        }
        public function sayMessage(){
            self :: welcome();
        }
        protected static function gudBye(){
            echo "Good Bye<br>";
        }
    }
    class B extends A{
        public function message() {
            A::welcome();
          } 
          function lastWords(){
            parent :: gudBye();
          }       
    }
    class C extends B{
        function tellMessage(){
            A::welcome();

            B::gudBye();
        }
    }
     $obj = new A();
     $obj->sayMessage();
     $obj->welcome();
    A ::welcome();
    $obj1 =  new B();
    $obj1->message();
    $obj1->lastWords();
    $obj2 = new C();
    $obj2->tellMessage();
?>