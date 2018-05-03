<?php

$a = range(2, 10, 2);

$b = implode ("", $a);

echo count($a)<=>strlen($b)?count($a)**strlen($b):count($a)*strlen($b);

//https://3v4l.org/uZttv