<?php
/**
* @category ZCE 82 - Array
* @author Vuong Nguyen
*/

$people = array(5, 10, 15, 20);
$people[] = count($people);

list($mot, $hai, $ba, $bon) = $people;
next($people); //10
next($people);
next($people);
next($people);
prev($people);
next($people);

echo current($people) + $bon;

//https://3v4l.org/s0fce