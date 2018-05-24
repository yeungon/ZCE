<?php
/**
* ZCE 81 by Vuong Nguyen
*/
$a = 50;;
$b = 60;
$c = &$b;

$d = compact("a", "c");

$array = ["abc" => TRUE, "zyz" => 80];

$e = extract($array); //trả về tổng số element convert thành công, ở đây là 2.

echo $abc + $e + next($d);




?>