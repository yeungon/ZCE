<?php
/*
	https://3v4l.org/spvB5

	Note: $name trong closure chỉ sử dụng giá trị được khai báo TRƯỚC closure/lambda

	Nếu muốn dùng $name sau khi đã khai báo closure, dùng tham chiếu (reference - &$name) thay vì tham trị (value) khi gọi biến $name;
*/

$name = [1 => "hello world", true => "xin chao", false => "gai dep", "me"];

$f = function($argument) use ($name){ // &$name if you want to update the value of variable automatically
    
    return count($name) ?? $argument*2; //$name sẽ được tuyền vào với giá trị được khai báo trước f()
};

$name = range(1, 10, 2);

echo $f(2) + count($name);