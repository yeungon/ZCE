<?php

/**
* @category ZCE 118 - Annonymous class
* @author Vuong Nguyen
* @see https://3v4l.org/C5O3u
*/

@$a = new class{
    
    private static $value = ["hello", "world", [3, [true]]];
    
    public static function xuLy(){
        
        self::$value = array_reverse(self::$value);
        
        self::$value = self::$value[0][1][0];
        
        $a = $Value ?? strlen(__FUNCTION__);
        
        echo self::$value + (int)"10 cô gái xinh" + $a;
        
    }
    
};


$a::xuLy();