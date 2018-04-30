<?php
 class A
 { var $variable;
 function display()
 {
 echo "I am inside the class.";
 }
 }
$obj=new A;
var_dump($obj instanceof A);

//The instanceof operator lets a programmer inspect all of the ancestor classes of the object, as well as any interfaces. It can also be used to decide whether or not an object of a class is inheriting property from another class. The following example explains the use of the instanceof operator:


// return boolean, ví dụ


interface B{
    
}


class A implements B{
    
    
}

$a = new A;

if($a instanceof B ){
    
    echo "hello";
}
 
        
var_dump($a instanceof B); //true


//https://3v4l.org/TaOJ0

//instanceof tính cả CLASS, INTERFACE
?> 