<?php
/*
	https://3v4l.org/spvB5

	Note: $name trong closure chỉ sử dụng giá trị được khai báo TRƯỚC closure/lambda
*/

$name = [1 => "hello world", true => "xin chao", false => "gai dep", "me"];

$f = function($argument) use ($name){
    
    return count($name) ?? $argument*2; //$name sẽ được tuyền vào với giá trị được khai báo trước f()
};

$name = range(1, 10, 2);

echo $f(2) + count($name);