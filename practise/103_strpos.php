<?php
/*

by Vuong ZCE
__CLASS__ trả về cả namespace
strpos ($haystac, $needle)

[-1] tính từ phải vào
*/

namespace thiennhien;

    class DongVat
    {
        public function __toString(){
            
            return __CLASS__;
        }
        
    }
    
    class ConMeoBonChan extends DongVat
    {
         
    }
    
    $a = new ConMeoBonChan();
    
    $b = explode("\\", $a)[1][-1];
    
    $c = strpos(explode("\\", $a)[0], $b);
    
    echo $c;
