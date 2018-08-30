<?php
/*by vuong
Online code: https://3v4l.org/lmT8B

Noted: với boolean thì ++ và -- không có tác dụng :-)

*/

class vodich{
    
    public $khoitao;
    protected $a = false;
    
    public static function xinchao($argument){
        
        return strlen($argument);
    }
    
    public function cacban(){
        
        $this->khoitao = self::xinchao($this->khoitao);
        
        if($this->khoitao !== false){
            
            $this->a = true;
        }
        
        for($i = 0; $i < strlen(get_class(new self)); $i++){
            
            $this->a++;
            
        }
        
        return $this->khoitao + $this->a;
        
    }

}


$vietnam = new vodich();

$vietnam->khoitao = "huy chuong dong";

echo $vietnam->cacban();