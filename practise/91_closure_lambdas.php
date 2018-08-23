<?php

$hello = ["hello", "bro"];

$world = function(string $x = "xoi") use ($hello){
    
    $a = strlen($hello[1]); 
    $b = strlen($x);
    
    if($a > $b){
        return $a % $b;
    }else{
        
    return $a**$b;
        
    }
};

echo $world();