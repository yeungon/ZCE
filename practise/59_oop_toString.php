<?php
/**
*@author by Vuong
*@category ZCE59 OOP
*/

abstract class hello{
    
    public function abcd(){
        
        return __CLASS__;
    }
}

class abc extends hello{
    public function __toString(){
        
        return __CLASS__;
    }
}

$a = new abc;

echo $a <> $a->abcd()? $a->abcd(): $a ;