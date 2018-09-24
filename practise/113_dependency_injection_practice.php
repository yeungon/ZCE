<?php

/*https://3v4l.org/pEDZR
strstr($haystack, $needle, false) (mặc định là false, nếu true trả lại yeungon, còn false là mặc định trả @gmail.com, nếu $needle là "@")

substr($haystack, $start, $length), cả start và length có thể số âm và dương, nếu số âm thì bắt đầu từ trái, ví trí -1

*/

interface ThietKe{
    
    public function tinhToan(string $argument);
    
}

class GaiXinh implements ThietKe{
    
    public function tinhToan(string $argument){
        
        return substr($argument, false, true);
        
    }
}

class TraiDep implements ThietKe{
    
    public function tinhToan(string $argument){
        
        return strstr ($argument, (string)(int)false, true);
        
    }
}

class YeuDuong {
    
    public $yeuduong;
    
    public function __construct(ThietKe $yeuduong){
        
        $this->yeuduong = $yeuduong;
    }
    
    public function tinhToan(string $argument){
        
        return $this->yeuduong->tinhToan($argument);
    }
    
}

$tinhyeu1 = new YeuDuong(new GaiXinh);

echo $tinhyeu1->tinhToan("có 10 cái hun");

echo PHP_EOL;

$tinhyeu2 = new YeuDuong(new TraiDep);

echo $tinhyeu2->tinhToan("có 10 cái hun");