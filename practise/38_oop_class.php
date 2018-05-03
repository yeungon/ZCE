<?php


class abc{
    
    const ABC = "hello";
    public $abc = "world";
    
    public function __construct(){
        
       echo $this->ABC??strlen($this->abc)/(static::class<=>static::ABC)??NULL;
    }
}

$a = new abc;

//online https://3v4l.org/XYFXI