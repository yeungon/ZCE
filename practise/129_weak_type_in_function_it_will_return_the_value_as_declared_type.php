<?php
/*https://3v4l.org/b0imC

Trong hàm goodGirl khai báo int và float, khi truyền vào nếu không đúng là int, ví dụ là float như 2.5, sẽ convert sang 2

*/
trait Weekend{
    
    public static function goodGirl(int $int, float $float){
        
        return floor(static::badGirl($int, $float)) << strlen(self::class);
    }
}

class Hello{
    use Weekend;
    
    public static function badGirl(int $int, float $float){
        
        return $int + $float;
    }
}


echo Hello::goodGirl(2.5, 4.5);