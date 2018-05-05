<?php

/**
 * ZCE material 
 * @category   global keyword $GLOBALS
 * @author     me@vuongnguyen.net
 * @copyright  2018 Vuong
 */

$a = 10;
$b = 5;

function vidu($b){
    $a = 7;
    $a-=$b;
    
    global $a;
    
    return $a + $GLOBALS['a'];
    
}

echo vidu(5);