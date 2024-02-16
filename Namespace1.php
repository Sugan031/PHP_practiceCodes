<?php
namespace exp1;
    class Table{
        function __construct($word)
        {
            echo " i am in Table 1 constructor"." ".$word;
        }
        function addValues(){
            echo 1+9;
        }
    }
    class Row extends Table{
        function addValues(){
            echo 1+9;
        }
    }  
    $table = new Table("YESSSs!!!!");
    


?>