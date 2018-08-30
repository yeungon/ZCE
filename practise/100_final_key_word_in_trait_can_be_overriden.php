<?php

/*written by vuong

NOTED: Methods in traits are overwritten by methods defined in a class, even if the trait method is final:

final keyword trong trait vẫn bị ghi đè

+ nếu là final trước class 		==> class đó không thể được extends
+ nếu là final trước function 	==> function đó không thể bị ghi đề override/overwriten


*/

trait vietnam{
    
    public final static function xinchao(){
        
       return __TRAIT__;
        
    }
}

class vodich{
    
    use vietnam;
    
    public static function xinchao(){
        
        return __CLASS__;
    }
    
}

echo vodich::xinchao().PHP_EOL;
