<?php

/*by vuongnguyen*/
/*

trait không dùng hằng được.
property của trait không thể được khai báo lại.
hàm array_flip không đ

*/
trait vidu{
    
    public static $hello = ["false" => 1, "true" => 0];
        
}

trait cuoituan{
    
    public function xinchao(array $a){
        
        return array_flip($a);
    }

}

class abc{
    
    use vidu, cuoituan;
    
}

$a = new abc;

echo gettype($a->xinchao($a::$hello)[1]) ?? "xin chào";

//https://3v4l.org/WKe0R