<?php

$start = microtime(true);

$array = range(1, 1000000);

foreach ($array as $key=> $value){
    
    $array[$key] += 1;
}

$end = microtime(true);

$time = $end - $start;

echo $time;

echo "<br>";

$startb = microtime(true);

$array = range(1, 1000000);

for($a = 0; $a< count($array); $a++){
    
    $array[$a] += 1;
}

$endb = microtime(true);

$timeb = $endb - $startb;

echo $timeb;