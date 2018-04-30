<?php


// type hinting

// In PHP 5, type hinting is a feature due to which functions can specify what type of parameters must be provided to the functions. If that parameter is not of the correct type, the PHP script will give an error. Type hinting is not supported for strings and integers. Type hinting can also help in code completion in an IDE. For example, consider the following PHP script:


function foo(string $foo) {
}

foo('somestring'); 


// Catchable fatal error: Argument 1 passed to foo() must be an instance of string, string given, called in . ..

// Answer options C and B are incorrect. Object and array datatypes are supported by type hinting.
//http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration


class C {}
class D extends C {}

// This doesn't extend C.
class E {}

function f(C $c) { //===============> class
    echo get_class($c)."\n";
}

f(new C);
f(new D);
f(new E);

/*ouput
C
D

Fatal error: Uncaught TypeError: Argument 1 passed to f() must be an instance of C, instance of E given, called in C:\xampp\htdocs\www\ZCE\oop\type_hinting_OOP_dont_accept_NULL.php on line 33 and defined in C:\xampp\htdocs\www\ZCE\oop\type_hinting_OOP_dont_accept_NULL.php:27 Stack trace: #0 C:\xampp\htdocs\www\ZCE\oop\type_hinting_OOP_dont_accept_NULL.php(33): f(Object(E)) #1 {main} thrown in C:\xampp\htdocs\www\ZCE\oop\type_hinting_OOP_dont_accept_NULL.php on line 27
*/