<?php
    class Books{
        var $price;
        var $title;
        var $author;

        function set_price($price){
            $this->price = $price;
        }

        function set_title($title){
            $this->title=$title;
        }

        function set_author($author){
            $this->author=$author;
        }

        function get_price(){
            return $this->price;
        }

        function get_title(){
            return $this->title;
        }

        function get_author(){
            return $this->author;
        }

    }

    $adventureBook = new Books();
    $TamilBook = new Books();

    $adventureBook->set_title("The Alchemist");
    $adventureBook->set_author("paulo Coehlo");
    $adventureBook->set_price(350);

    $TamilBook->set_title("Ponniyin Selvan");
    $TamilBook->set_author("Kalki");
    $TamilBook->set_price("600");

    echo "{$adventureBook->get_title()} is written by {$adventureBook->get_author()} costs around {$adventureBook->get_price()} rupees<br>";
    echo "{$TamilBook->get_title()} is written by {$TamilBook->get_author()} costs around {$TamilBook->get_price()} rupees<br>";


?>