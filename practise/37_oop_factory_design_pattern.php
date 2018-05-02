<?php

class abc{
    
    const VAR = ["hello", [[self::class]]];
    
    public function __construct(){
        
        echo SELF::VAR[1][0][0][2];
    } 

}

class cde {
    
    public function zce(){
        
        return new abc;
    }
    
}


$a = new cde;

$a->zce();

//xem: https://3v4l.org/7jHSf