<?php
/*
	https://3v4l.org/2MJYR

	ZCE by Vuong

	
*/
trait vidu{
    
    public function __(): array{
    
        return $this->data = range(1, 20, strlen($this->count)%2);
    }
    
    public function handle(){
        
        return strlen(__FUNCTION__.__TRAIT__) + count($this->__());
    }
  
}

class GaiXinh{
    
    use vidu;
    
    public $data = [];
    
    public $count = __CLASS__;
  
}

class TraiDep extends GaiXinh{}

$a = new TraiDep;

echo $a->handle();

