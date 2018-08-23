<?php
/*by Vuong Nguyen
ZCE
https://3v4l.org/50rdR

*/

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