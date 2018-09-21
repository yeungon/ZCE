<?php
/*nếu có 2 trait thì khai báo

traitA::ham insteadof traitB để dùng trait ở B.

hai trait không được khai báo thuộc tính giống tên nhau, không sẽ lỗi

trait không được dùng constant.

https://3v4l.org/v0V0Y

ZCE material prepared by Vuong

*/


trait BongDa{
    
    public $a = ["xinchao", "cacban"];
    
    public function tinhToan(){
        
        return $this->a;
    }
    
}

trait BongChuyen{
    
    public $b = ["hello", "world"];
    
    public function tinhToan(){
        
        return $this->b;
    }
    
}

class TheThao{
    use BongDa, BongChuyen{
        BongDa::tinhToan insteadof BongChuyen;
    }
    
    public function vanDongVien(){
        
        return $this->tinhToan();
    }
}


$ronaldo = new TheThao;

echo $ronaldo->vanDongVien()[0][0] <=> $ronaldo->vanDongVien()[1][0] ?? "hi" ?? "hello" ?? "hihihiiih";