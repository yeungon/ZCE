<?php
//cả closure và lambda đều có gettype() là object
//Closure Example
$f = function($x) {
    return function($y) use ($x) {
        return str_repeat($x, $y);
    };
};

$a = $f(2);
$b = $f(3);
$c = $a(2) . $b(3);
echo ($c). PHP_EOL;

// What's the output?
// 22333


$message = "hello";
$greet = function ($name) use ($message) {
echo $message . ' ' . $name;
};
$greet('Daisy'); // hello Daisy



//lambda example

$f = function () {

	return "hello"; 
	}; ///chú ý dấu chấm phẩy

echo gettype($f); //object

//chú ý: type của hàm ẩn danh là object

//


$vuong = function(){
    
    echo "lambda"; 
}; // chú ý dấu chấm phẩy

$vuong(); //ouput: lambda

//

$message = "hello";
$greet = function ($name) use ($message) {
echo $message . ' ' . $name;
};
$message = "hey";
$greet('Daisy'); // hello Daisy