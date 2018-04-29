<?php

trait abc{
    
    public $a = "hello"; //the property cannot be overridden.
    
    public function a(){ //this method will be overridden in the class used this trait.
        
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
* property của class KHÔNG THỂ override propery của trait ==> lỗi ngay https://3v4l.org/L5HN7
*/
