<?php
/**
*@author by Vuong
*@category ZCE60 OOP ArrayIterator
*/
$a = count(new ArrayIterator(range(1, 9, 2)));
$b = &$a;

function a($b){
    global $b;
    echo $b;
    return $GLOBALS['a']*$b;
}

echo a(5);

//https://3v4l.org/pBs2b