<?php
/*
ZCE by Vuong

Ref: https://3v4l.org/UNTBV
*/

class CuoiTuan{

    private static $data = "Xin chào";
    
    public static function handleData(int $i): array {
        
        return [$i**$i, $i*$i, mb_strlen(self::$data)];
    }

}

[$x, $y, $z] = CuoiTuan::handleData(3);

echo $x + $y - $z;

