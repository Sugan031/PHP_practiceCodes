<?php
class constant_sample
{
    const Mymessage = "Hello, welcome to Jurassic Park<br>";

    public function sayhello()
    {
        echo self::Mymessage;
    }
}

echo constant_sample::Mymessage;
$obj = new constant_sample;
$obj->sayhello();
