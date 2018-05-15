<?php
/**
*@category ZCE74 Array
*@author Vuong Nguyen
*/



$std = new \stdclass();

$std->a = ["hello", "world", [3, 4, [5, 6]]];

array_push($std->a, 7);

next($std->a);
next($std->a);

echo count(current($std->a));







?>