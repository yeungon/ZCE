<?php

/*vuong nguyen

Noted: 

+ Nếu ở class cha private thì ở class con không ghi đè được, do đó property trong class cha sẽ được dùng.

+ 0 == false, nhưng 0 === false không đúng (không bằng nhau, vì khác kiểu, một cái là integer, một cái là boolean.

https://3v4l.org/E7ASZ

*/

class a{
    
    private $vidu = "xin chao";
    
    public $flag = null;
    
    public function vietnam(){
        
        return $this->vidu;
    }
    
    public function vodich(){
        
        $count = count(str_split($this->vietnam($this->vidu)));
        
        $this->flag++;
        
        if(($count <=> 8) === false){ //chỗ này không đúng, nên ra else, vì mặc dù count <=> 8 trả về 0, hai giá trị bằng nhau.
        
            return $count + $this->flag;
            
        } else {
            
            return $count * 2 + $this->flag;
        
        }
        
    }
    
}
   
class b extends a{
    
    public $vidu = "xin chao cac ban";
    
}

$huychuongdong = new b();

echo $huychuongdong->vodich();