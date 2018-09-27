<?php
/*

Ví dụ khác về Dependency Injection dùng __construct
https://3v4l.org/uQbLs

*/
class A{
    
    function xinChao(){
        
        return "xin chào";
    }
    
}

class B{
    
    function xinChao(){
        
        return "hello world";
    }
    
}

class C{
    
    public $c;
    
    public function __construct($object){
        
        $this->c = $object;    
        
    }
    
    public function xinChao(){
        
        return $this->c->xinChao();
    }
    
}

$c = new c(new A);

echo $c->xinChao();

echo PHP_EOL;

$newc = new c(new B);

echo $newc->xinChao();