<?php

$gaixinh = 1;

$traixau = 4;

function xuLy(){

    $traixau = 3;
    
    global $gaixinh;
    
    $gaixinh = $GLOBALS['gaixinh'] << $traixau;
    
    return $gaixinh;
    
}


for($i = 0; $i < 3; $i ++){
    
    xuLy();
}

echo $gaixinh;
