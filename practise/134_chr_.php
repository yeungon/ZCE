<?php

//https://3v4l.org/Sc0ub

$a = "em oi lay anh nhe, anh ngon giai lam";

$b = substr(strstr($a, substr($a, -19, 1)), 2, 3);

echo str_replace(chr(98).chr(111), chr(98).chr(111)." ".$b, strtr($a, [$b => chr(98).chr(111)]));