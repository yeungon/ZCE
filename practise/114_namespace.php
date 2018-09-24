<?php

/*hai namespace cùng bọc, trong một file

không được dùng code ngoài namespace

https://3v4l.org/ag0Z8

*/

namespace GaiXinh{
    use TraiDep;
    
    class tretrau{
        
        public $me = "khoai lại ";
        
        public function __construct($arr){
            
            $this->me = $this->me.$arr;
            
        }
        
    }
    
    $a = new TraiDep\tretrau("tuấn tú, ");
    
    echo $a->me;
    
}

namespace TraiDep{
    
    use GaiXinh;
    
    class tretrau{
        
        public $me = "thanh niên cứng ";
        
        public function __construct($arr){
            
            $this->me = $this->me.$arr;
            
        }
        
    }
    
    $a = new Gaixinh\tretrau("to");

    echo $a->me;
    
}