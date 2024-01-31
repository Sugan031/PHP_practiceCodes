<?php
class Movies
{
    public $title;
    public $actor;

    public function __construct($title, $actor)
    {
        $this->title = $title;
        $this->actor = $actor;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getactor()
    {
        return $this->actor;
    }

    public function __destruct()
    {
        echo "Object destroyed";
    }
}

$actionmovie = new Movies("John wick", "Keanu reeves");
echo $actionmovie->getTitle();
echo $actionmovie->getactor();
