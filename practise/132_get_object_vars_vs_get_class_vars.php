<?php
/*
by Vuong

https://3v4l.org/DerO6
*/
$myClass = new class{
    
    public $me = "hello world";
    public static $her = 30;
    private $test = false;
    
    public function getVars(){
        
        return get_class_vars(get_class($this));
    }
};


$a = $myClass->getVars();

$b = get_object_vars($myClass);

$c = $a + $b;

$d = array_merge_recursive($a, $b);


echo ($d <=> $c).print(2) + 2;
