<?php
/**
 * ZCE material 
 * @category   static keyword in function
 * @author     me@vuongnguyen.net
 * @note : Từ khóa static trước variable trong hàm => phạm vi biến trong hàm nhưng giá trị của biến được giữ lại
 * @copyright  2018 Vuong
 */

  function test($b){
    static $a = 10;
    $a+=$b;
    return $a;
}

for($i = 0; $i<3; ++$i){
   test($i);
   
}

echo test($i+$i)+$i;
