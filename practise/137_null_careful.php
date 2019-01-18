<?php
//https://3v4l.org/W0pk3

trait x{
    public $hi   = "0.000000000";
    
    public $vuong   = null;
    
    private function getter(){
        
        return $this->hi;
    }
    
    private function type(){
        return gettype($this->getter());
    }
    
    public function convert(){
        if($this->hi == true){
            
            $this->vuong = "0";
            
            if($this->vuong == true){
                
                return strlen($this->vuong);    
            }else{
                return strlen($this->hi);    
            }
            
        }else{
            return strlen($this->type());
        }
    }
}

class y {
    
    use x;
    
}

$a = new y;

echo $a->convert();