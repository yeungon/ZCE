<?php

/**
 * ZCE material 
 * @category   str_repalce($a, $b, $c): thay $a bằng $b trong $c
 * @author     me@vuongnguyen.net
 * @copyright  2018 Vuong
 */

namespace vidu;

class helloworld{
    
    public function __construct(){
        
        echo strpos(str_replace("\\", "/", __CLASS__), "/");
    }
  
}

$a = new helloworld;

//check online https://3v4l.org/7q996