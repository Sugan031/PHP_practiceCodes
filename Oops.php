<?php
class Fruits1
{
    public $name;
    public $color;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }
}

$fruit_one = new Fruits1();
$Fruit_Two = new Fruits1();

$fruit_one->set_name("Apple");
$Fruit_Two->set_name("Banana");
$fruit_one->set_color("red");
$Fruit_Two->set_color("yellow");

echo "Name " . $fruit_one->get_name() . " Color {$fruit_one->get_color()}<br>";
echo "Name " . $Fruit_Two->get_name() . " Color {$Fruit_Two->get_color()}";
