<?php

class A {
    public function method_a() {
        return "This is the method_a from the class A";
    }
}

class B extends A {
    public function method_b() {
        return "This is method_b from the class B";
    }
}

$object = new B();

echo $object->method_b(); // We can call method_b from 
echo $object->method_a(); // We can call method_a using class 'B' 
                     // because class B extends from class A

