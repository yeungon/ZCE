<?php

/*https://3v4l.org/G0EYV*/
$string = "I think I love YOU";

echo strtr($string, substr($string, strpos($string, $string[-8]), 4), "hate");


