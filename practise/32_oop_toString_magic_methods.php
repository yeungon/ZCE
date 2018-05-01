<?php
namespace zce;

class abc{
    protected $var = "zce";
    
    public function __toString(){
        
        return __CLASS__.abc::class.$this->var;
    }
}

$a = new abc;

echo strlen($a);