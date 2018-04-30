<?php

class User {
 public $first_name, $last_name;
 public function setData($first_name, $last_name) {
 $this->first_name = $first_name;
 $this->last_name = $last_name;
 }
 public function printData() {
 echo $this->first_name . " : " . $this->last_name;
 }
} 
$u1 = new User();
$u2 = new User();

/* $u1 and $u2 are two objects of the User class. Both these objects are allocated different blocks in the memory.
An object is always passed by reference (in reality, it is passed by handle) rather than by value. An object is a living instance of a class. Hence, an object is created from the definition of the class and is loaded in memory. If you want to create an object of a PHP5 class, you can use the keyword new. Below is the syntax style of how to create objects in PHP5:


*/