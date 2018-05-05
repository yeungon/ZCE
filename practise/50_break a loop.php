<?php

/**
 * ZCE material 
 * @category   iterate an array
 * @author     me@vuongnguyen.net
 * @content : break a loop
 * @copyright  2018 Vuong
 */
$a = ['one', 'two', 'three', 'four', 'stop', 'five'];

for($i =0; $i<count($a); $i++){
    
    if($a[$i] == 'stop'){break;}
    
    $b[] =$a[$i];
    
}

echo $a[$i].count($b);

//https://3v4l.org/qn9lq