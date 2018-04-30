<?php

abstract class A {
   private static $mI = array();
   public function __construct() {
     $class = get_called_class();
     if (array_key_exists($class, self::$mI))
       trigger_error("Error in \"$class\"", E_USER_WARNING); }
   public static function getI() {
     $class = get_called_class();
     if (array_key_exists($class, self::$mI) === false)
       self::$mI[$class] = new $class();
     return self::$mI[$class]; } }
class B extends A {
   private static $mI = array();
   private function hello() {} }
class C extends A {
   private static $mI = array();
   private function byebye() {} }
$b1 = B::getI(); $b2 = B::getI();
$c1 = C::getI(); $c2 = clone($c1::getI());
if (get_class($b1) == "B" && get_class($b2) == "B" ) echo "B";
else echo "F";
if (get_class($c1) == "C" && get_class($c2) == "C" ) echo "C";
else echo "F";
if ($b1 === $b2 ) echo "b"; else echo "F";
if ($c1 === $c2) echo "c"; else echo "F";

/*
 * Output:
 * 
 * BCbF
 *
 */

