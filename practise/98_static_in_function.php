<?php

/*static function
by Vuong
*/
function test($b){
    static $a = 10;

    $a += $b;
    
    return $a;
}

for($i = 0; $i<3; ++$i){
   
   test($i); // mỗi lần chạy là giá trị static sẽ giữ lại.
   
   $a[] = $i;
   
}


echo test(1) + count($a);

// https://3v4l.org/8uP0k kết quả 17