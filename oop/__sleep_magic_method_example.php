<?php 
 
class VehicleA { 
    
    protected $abc = "đây là protected property";
    private $cde = "đây là private property";
    
    public function goWhat() { 
        echo "In my automobile"; 
    } 
    
    public function __sleep(){
        
        return ['abc','cde']; //phải return array
    }
} 

$a = new VehicleA;

print_r(serialize($a)); //    O:8:"VehicleA":2:{s:6:"*abc";s:28:"đây là protected property";s:13:"VehicleAcde";s:26:"đây là private property";}