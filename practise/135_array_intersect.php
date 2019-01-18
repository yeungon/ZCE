<?php

$a = [1=> 1, 3=> 2, 5 =>3] + [4, 5, 6];

$b = array_merge([1=> 1, 3=> 2, 5 =>3], [4, 5, 6]);

$c = array_diff($b, $a);

echo array_keys($c)[0] + array_values($c)[0];


//https://3v4l.org/0RXFk