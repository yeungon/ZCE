<?php

/*
	https://3v4l.org/iilRB
	by Vuong Nguyen at me@vuongnguyen.net
*/



$a = new class{
    
    public $data = 15;
    
    public function xuLy($y){
        
        return range(1, $this->data, $y);
        
        
    }
    
    public function tinhToan($y){
        
        return $this->xuLy($y);
        
        
    }
    
};


$a->data = $a->data << true + true;

echo count($a->tinhToan(3));
