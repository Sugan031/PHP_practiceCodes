<?php
    trait myMessage{
        public function sayMessage(){
            echo "hello world ";
        }
    }
    trait myMessageOne{
        public function sayhello(){
            echo "Hello hello";
        }
        // public function sayMessage(){
        //     echo "hello Earth ";
        // }
    }

    class MyClass{
        use myMessage, myMessageOne;
    }
    $obj = new MyClass;
    $obj->sayMessage();
    $obj->sayhello();
    $obj->sayMessage()
?>