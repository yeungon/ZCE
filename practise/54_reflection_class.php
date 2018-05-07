<?php

/**
 * ZCE material 
 * @category   str_repalce($a, $b, $c): thay $a bằng $b trong $c
 * @author     me@vuongnguyen.net
 * @copyright  2018 Vuong
 */

namespace hello;

class world{
    
    public function a(){
        
        $this->a = new \ReflectionClass(new self());
        $this->a = $this->a->getName();
        return $this;
        
    }
    public function abc(){
        
        echo strpos(str_replace("\\", "/", $this->a), "/");
    }
  
}

$a = new world;

$a->a()->abc();

//https://3v4l.org/PbkRv