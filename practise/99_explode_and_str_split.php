<?php
//https://3v4l.org/YZkDW
//by Vuong Nguyen

class vietnamvodich{
    public function __construct(){
        
        return __CLASS__;
    }
}

$a = new class extends vietnamvodich{
    
    public function __toString(){
        
        return parent::__construct();
    }
};

try{

    $a = count(explode(" ", $a)) + count(str_split($a));
    
    echo $a;
    
    }catch(\Exception $e){
    
    echo $e->getMessage();
}
