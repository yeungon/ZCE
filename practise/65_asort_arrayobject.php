<?php

/**
*@author by Vuong
*@category ZCE65 ArrayObject asort: sort theo value nhưng key vẫn giữ nguyên theo tương ứng value
*/


$array = ['world', 'thi','zce'];
               
$abc = function (array $array){
    
    $a = new ArrayObject($array);
    $a->asort();
    return $a;
    
};

print_r($abc($array)[0]);

//https://3v4l.org/lUu66