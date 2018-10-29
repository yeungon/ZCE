<?php

/*https://3v4l.org/ClqRY
by Vuong

static property sẽ giữ lại giá trị mỗi lần tăng.
*/

class ChuNhat{
    
    public static $name = false;
    
    public function __construct(){
        
        return self::$name = strlen(__CLASS__);
    }
    
    public function tinhToan(){
        
        return self::$name++;
    }
    
    public function gaiXinh(){
        
        $flag = true;
        
        for($i = 0; $i < strlen(__FUNCTION__); $i++){
            
            $this->tinhToan();
            
            $flag++;
        }
        
        return $flag;
    }
    
}

$a = new ChuNhat;

echo $a->gaiXinh() + $a->tinhToan();