<?php

$a = 10;
unset($a);
$b = empty($a)?"hello":"world";
$c = $b[0];
echo --$c.++$c;

//https://3v4l.org/ujLMa