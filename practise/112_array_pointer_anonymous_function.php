<?php
/*
https://3v4l.org/gfhjC

@author: Vuong Nguyen at vuongnguyen.net

Noted: arraypointer includes: current, next, prev, last, reset


*/
$gaixinh = function(array $traixau = [])
{
    $flag = count($traixau);
    
    if($traixau[false] === true){
        
        $flag++;
        
        next($traixau);
        
        $traingheo = [current($traixau) => $flag + strlen(current($traixau))];
        
        return array_flip($traingheo);
    }else{
        
        $flag--;
        
        end($traixau);
        
        $traingheo = [prev ($traixau) => $flag + strlen(reset($traixau))];
        
        return array_flip($traingheo);
        
    };
    
};

print_r(($gaixinh(["bongda", "thethao", "chemgio", "hochanh"])));

