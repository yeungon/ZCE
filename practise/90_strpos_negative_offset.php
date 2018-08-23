<?php

/*strpos
by me@vuongnguyen.net
strpos($haystack, $needle, $offset)
strpos() nếu có offset thì tính từ vị trí offset sang phải, nếu là số âm thì tính là -1 ở vị trí cuối cùng, mặc định là 0
strrpos() lấy needle ở phía phải ngoài cùng
*/

$vidu = "challenge!";

$a = strpos($vidu, "e", -4); 

$e =  $b ?? $c ?? $d ?? $a;

$count = strrpos($vidu, "e", 4);

for($i = 0; $i < $e; $i ++){
    
    $count++;
    
}

echo $count;


?>