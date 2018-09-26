<?php

/*hàm array_map vs array_walk

https://3v4l.org/UmhdZ
*/
$callback1 = function($n){
    return $n."thêm đuôi";
};

$a = array(1, 2, 3, 4, 5);

$b = array_map($callback1, $a);
print_r($b);

/**
* @ hàm array_walk return BOOLEAN nên trong hàm callback phải echo ngay. Nếu echo array_walk sẽ ra 1/0
* @ hàm array_walk có $array nằm phía trái, callback nằm phía phải.
*/
$callback2 = function($n){
   global $abc;
   return $abc[] = "thêm đầu".$n;
};

array_walk($a, $callback2);

print_r($abc);



/*hàm array_map

https://3v4l.org/gRl0i
*/
$callback1 = function($n){
    return($n * $n);
};

$a = array(1, 2, 3, 4, 5);

$b = array_map($callback1, $a);
print_r($b);

/**
* @ hàm array_walk return BOOLEAN nên trong hàm callback phải echo ngay. Nếu echo array_walk sẽ ra 1/0
* @ hàm array_walk có $array nằm phía trái, callback nằm phía phải.
*/
$callback2 = function($n){
   global $abc;
   return $abc[] = $n * $n;
};

array_walk($a, $callback2);

print_r($abc);







?>