<?php
    class calculation{
        public $value1;
        protected $value2;
        private $value3;

        function __construct($value1,$value2,$value3)
        {
            $this->value1=$value1;
            $this->value2=$value2;
            $this->value3=$value3;

        }

        function getvalue1(){
            return $this->value1;
        }
        function getvalue2(){
            return $this->value2;
        }
        function getvalue3(){
            return $this->value3;
        }
        // private function add(){
        //     echo $this->value1+$this->value2+$this->value3."<br>";
        // }
        // public function addpublic(){
        //     $this->add();
        // }


      protected  function add(){
            echo $this->value1+$this->value2+$this->value3."<br>";
        }

        function __destruct()
        {
            echo "Object is destroyed";
        }
    }

    class calci extends calculation{
        function sub(){
            echo $this->value1-$this->value2."<br>";
            echo $this->add();
        }
    }
    $obj = new calci(100,20,10);
    $obj->sub();
    $obj = new calci(100,20,10);
    $obj->sub();


    // $obj1 = new calculation(100,20,10);
    // $obj1->addpublic();

?>