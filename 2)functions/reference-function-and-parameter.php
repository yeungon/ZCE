<?php
function &incrementVariable(&$value) {
    $value= $value + 2 ;
    return $value;
}

$var = 0;
$ref = incrementVariable($var);
$ref++;
echo $var .PHP_EOL;

