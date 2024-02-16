<?php
include("Namespace1.php");
use exp1 as e;
    class Table{
        function addValues(){
            echo 1+9;
        }
    }
    class Row extends Table{
        function addValues(){
            echo 1+11;
        }
    }    
    
    $obj = new Table();
    $obj->addValues();
    $obj1 = new Row();
    $obj1->addValues();

    $obj2 = new e\Table("Nooooo....");
?>