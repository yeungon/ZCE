<?php

/**
*@author by Vuong
*@category ZCE70 Lambda && Closure (hàm ẩn danh dùng thêm hàm ẩ dang)
*/

$a = ["hello", "world", "vietnam"];

$f = function(string $arg):string {
    
    return strtoupper($arg);
}; 

$abc = function(array $array) use ($f):string{
    
    global $a;
    
    return $f($a[0]).$f($array[0]);
    
};

echo $abc(["vietnam", "hello"]);



//https://3v4l.org/mEVYP
?>