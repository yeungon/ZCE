<?php

function data() {
    $out['a'] = "abc";
    $out['b'] = "def";
    $out['c'] = "ghi";
    return $out;
}

$data = data();
echo $data['a'];
echo $data['b'];
echo $data['c'];

//

function a(){
    
    return $a = [1, 2, 3, [4, 5]];
    //return $a;
}

$b = a();

echo $b[1]; //2

echo $b[3][0]; //4, vì access vào element 3, voons la moojt array vị trí 1