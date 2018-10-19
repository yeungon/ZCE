<?php

/*  Note: constant và biến static có thể gọi ở class khác mà không cần extends
*   Note: property hay constant trong class không thể khai báo ở dạng expression (ví dụ với một hàm nào đó, mà phải gán giá trị nào đó), chẳng hạn const =  *range(); là không được
*   Written by Vuong Nguyen
*/

class Hello{
    
    public const TAODEP = [0, 0, 0, 0];
    
    public static function taodep(){
     
     return self::TAODEP;
        
    }
}

class abcd{
    
    public static $gaixinh;
    
    public static $somevalue;
    
    public static function getSomething(){
        
        self::$somevalue = self::class;
        
        self::$somevalue = str_split(self::$somevalue);
        
        return self::$somevalue;
    }
    
    public static function getValue(){
        
        self::$gaixinh = array_combine(Hello::taodep(), self::getSomething());
        
        return self::$gaixinh;
    }
    
    
}


print_r(count(abcd::getValue()) + count(abcd::getSomething()));