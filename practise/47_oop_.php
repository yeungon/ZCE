
<?php
session_start();

interface phuongtien{
    
    const A = "du lịch";
    
    public function method();
    
}
trait xe {
    
    public $A ="du lịch";
    
    public static $B = "du lịch";
    
    public function goWhere(){ 
        if(self::A === static::$B){return static::$B;}else{self::A;}
    } 
}   
class xeA implements phuongtien{ 
    use xe;
    public $nguoi;
    
    public function method(){}
    
    public function __construct(){
        $this->nguoi = strlen(session_id());
    }
    public function goWhat() { 
        return "ô tô"; 
    } 
} 
class xeB { 
    use xe; 
        public function goWhat() { 
            return "xe máy"; 
        } 
} 

$vehicle = new xeA();

echo $vehicle::$B;

echo $vehicle::A=== $vehicle->A?"cool":"upps";

print_r(get_class_methods($vehicle));