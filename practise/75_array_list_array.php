<?php
/**
*@category ZCE75 Array
*@author Vuong Nguyen
*/


$std = new \stdclass();

$std->a = ["hello", "world", [3, 4, [5, 6]]];

[$a, $b, $c] = $std->a;

echo count($c) == count(end($std->a))? "ngon": "không ngon";

//https://3v4l.org/r1cvK

?>