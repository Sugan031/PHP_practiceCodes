<?php
class Books
{
    public $price;
    public $title;
    public $author;

    public function set_price($price)
    {
        $this->price = $price;
    }

    public function set_title($title)
    {
        $this->title = $title;
    }

    public function set_author($author)
    {
        $this->author = $author;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function get_title()
    {
        return $this->title;
    }

    public function get_author()
    {
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
