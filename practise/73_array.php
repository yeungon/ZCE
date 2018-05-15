<?php
/**
*@category ZCE73 Array
*@author Vuong Nguyen
*/

$std = new \stdclass();

$std->a = ["hello", "world", [3, 4]];

foreach ($std->a as $value){
    
    print_r($value);
    
    die();
}

//https://3v4l.org/jUfCg