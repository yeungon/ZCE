<?php 
trait RoadVehicle { 
    public function goWhere(){ 
        echo "Driving down the road"; 
    } 
}   
class VehicleA { 
    use RoadVehicle; 
    public function goWhat() { 
        echo "In my automobile"; 
    } 
} 
class VehicleB { 
    use RoadVehicle; 
        public function goWhat() { 
            echo "In my motorcycle"; 
        } 
} 

$vehicle = new VehicleA(); 
$vehicle->goWhere(); 
$vehicle->goWhat(); 


interface B{
   //không thể dùng trait trong interface
}

trait C{
    
    public function hello(){
        
        echo "hello world. Đây là hàm của trait <br>";
    }
}

class A implements B{
    
    use C;
    
    
}

$a = new A;

$a->hello(); //hello world. Đây là hàm của trait <br>";