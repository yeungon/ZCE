<?php

interface ThietKe{
    
    public function xinchao();
}

class CuThe implements ThietKe{

        public $a = [];
        
        //bao nhiêu argument dều okey, và khi return $a là array
        function xinchao(...$a){
            
            $this->a = $a;
            
            /*Trả về tổng argument truyền vào*/

            $this->a[] = func_num_args();
            
            return $this->a;
            
        }

}


$vidu = new CuThe();

$a = $vidu->xinchao(5, 6, 7, 8);


echo current($a) + end($a) + current($a);


//Current ban đầu là index 0; Khi chạy tới end($a) thì current là vị trí end luôn, 
//https://3v4l.org/1TBan