<?php


// echo $count ? $count : 10; // outputs 10

// //SHORT FORM
// echo $count ?: 10; // also outputs 10

//In PHP 7 we additionally get the ?? operator which rather than indicating extreme confusion which is how I would usually use two question marks together instead allows us to chain together a string of values. Reading from left to right, the first value which exists and is not null is the value that will be returned.

// $a is not set
$b = 16;
echo $a ?? 2; // outputs 2
echo $a ?? $b ?? 7; // outputs 16