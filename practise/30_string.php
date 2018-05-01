<?php


$a = (object)"hello";
$b = $a->scalar;
$c = $b[0] <=> substr($b, 1, 1);
echo strlen($b) % $c;

//giải thích https://3v4l.org/7Nhdu