<?php

/*zce by Vuong*/
//https://3v4l.org/oSlC2



class HeThong{
    
    public $dulieu;
    
    public function __construct(array $array){
        
        return $this->dulieu = new \ArrayObject($array);
    }
    
    public function xemClass(){
        
        return __CLASS__;
    }
    
}


$a = new HeThong([1, 2, 3]);

$a->dulieu->append(strlen($a->xemClass()));

echo ($a->dulieu->offsetGet($a->dulieu->count() - 1));
