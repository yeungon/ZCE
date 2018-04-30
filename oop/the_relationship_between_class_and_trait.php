<?php

trait abc{
    
    public $a = "hello";
    
    public function a(){
        
        return "hello";
    }
}

class abcd { //tên class không thể trùng tên của trait trong một namespace
    
    use abc;
    
      public function a(){
        
        return "world";
    }
}

$a = new abcd;

echo $a->a(); //world

/**methods của class có thể override methods của traits
* methods của class có thể override methods của traits
* property của class KHÔNG THỂ override propery của trait
*/