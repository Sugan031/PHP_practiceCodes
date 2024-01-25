<?php
    class Movies{
        public $title;
        public $actor;

        function __construct($title,$actor)
        {
            $this->title=$title;
            $this->actor=$actor;
        }

        function getTitle(){
            return $this->title;
        }
        function getactor(){
            return $this->actor;
        }

        function __destruct()
        {
            echo "Object destroyed";
    }
}

    $actionmovie = new Movies("John wick","Keanu reeves");;
    echo $actionmovie->getTitle();
    echo $actionmovie->getactor();
  
?>