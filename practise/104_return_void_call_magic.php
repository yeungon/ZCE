<?php

/*__call($method, $argument) là magic method trả về tên hàm $method và số lượng argument khi gọi tới hàm không có trong class

:void là kiểu return có từ php 7.1, hàm không được return, kể cả return null, nhưng có thể echo.

*/

class NgayThang{
    
    public function __call($name, $argument){
        
        return count($argument);
    }
    
    function thuHai(int $argument):void{
        
         if($argument!= null){
             
             echo func_get_arg(0)*func_num_args()*count(func_get_args());
             
         }else{
             
             echo $argument*$argument;
         }
         
    }

}

$test = new NgayThang();

echo $test->thuHai(2, 3, 5, 0), $test->thuBa(2, 3, 5, 0);


//https://3v4l.org/ivFST