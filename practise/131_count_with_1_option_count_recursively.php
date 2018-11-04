<?php
/*https://3v4l.org/CLJ9Z*/

function getMe($range, array $array){
    
    $array1 = range("z", "a", $range);
    
    $array1[][] = $array;
    
    return count($array1, 1);
}

echo getMe(012, [1, 2, 3]);
