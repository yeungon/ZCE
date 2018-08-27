<?php

$a = new class (){
   
   
};

$b = function (){
     
};

if(gettype($a) == gettype($b)){
    
    echo strlen(get_class($b));    
    
}else{
    
    echo strlen(get_class($a));    
}