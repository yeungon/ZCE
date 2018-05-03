<?php
session_start();


trait xe {
    
    
    public function goWhere(){ 
        return "đi chơi"; 
    } 
}   
class xeA { 
    use xe;
    public $nguoi;
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

printf("Lái xe %s bằng %s, trên xe có %d người.", $vehicle->goWhere(), $vehicle->goWhat(), $vehicle->nguoi);

//https://3v4l.org/CEDUo