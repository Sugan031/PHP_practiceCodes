<?php
    class Veggies{
        public function __construct()
        {
            echo "I am default constructor or Zero param constructor";
        }
    }
    class foods{
        public function __construct($word)
        {
            echo "Hi $word";
        }
    }

    $vegObj = new Veggies();
    $foodObj = new foods("World!");
?>