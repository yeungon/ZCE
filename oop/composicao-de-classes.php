<?php

class A {
    function f_A(){
        return 'this is f_A';
    }
}

class B {
    protected $a;

    function __construct() {
        $this->a = new A();
    }

    function f_B(){
        echo $this->a->f_A();
    }
}

$b = new B();
$b->f_B();

