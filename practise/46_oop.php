<?php
/**
 * vietzce
 * @category   oop
 * @author     me@vuongnguyen.net
 * @copyright  2018 Vuong
 */

interface phuongtien{
    
    public function method();
    
}

trait xe {
    
    public function xeco(){}
}

class xeA implements phuongtien{ 
    
    use xe;
    
    public function method(){}
    
    public function __construct(){}
    
    public function goWhat() {}
} 

$reflection = new \ReflectionClass(new xeA());

echo count(get_class_methods(new xeA())) <=> count($reflection->getMethods());

//https://3v4l.org/GpT1c