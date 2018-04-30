<?php

class myClass {
        public $mine;
            private $xpto;
            static protected $test;

                static function test() {
                            var_dump(property_exists('myClass', 'xpto')); //true
                                }
}

var_dump(property_exists('myClass', 'mine'));   //true
var_dump(property_exists(new myClass, 'mine')); //true
var_dump(property_exists('myClass', 'xpto'));   //true, as of PHP 5.3.0
var_dump(property_exists('myClass', 'bar'));    //false
var_dump(property_exists('myClass', 'test'));   //true, as of PHP 5.3.0
myClass::test();
