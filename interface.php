<?php
    interface SampleClass{
        public function sampleMethod();
    }
    interface SampleClassOne {
        public function sampleMethodOne();
    }
    class extendClass implements SampleClass, SampleClassOne{
         public function sampleMethod()
         {
            echo "Hello world";
         }
         public function sampleMethodOne()
         {
            echo "Hi World";
         }
    }

    $obj = new extendClass();
    $obj->sampleMethod();
    $obj-> sampleMethodOne();
?>