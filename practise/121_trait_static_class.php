<?php
/*https://3v4l.org/nDLLE*/

trait GaiDep{
    
     public static function getData(){
        
       return self::$a = range(1, 30, strlen(get_class(new self)));
    }
}

final class GaiXinh{
    
    use GaiDep;
    
    private static $a;
    
    public static function transferData(){
        
        for($i = 0; $i < count(self::getData()); $i++){
        
            $gaixau[] = self::getData()[$i];
            
        }
        
        return (int)(max($gaixau)/2) + $i;
        
    }
}


echo GaiXinh::transferData();