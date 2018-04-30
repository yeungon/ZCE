<?php

trait A{
    
    public function a(){
        
        echo "Ham A, trait A";
    }
    
    public function b(){
        
        echo "Ham b, trait A";
    }
}

trait B{
    
    public function a(){
        
        echo "Ham A, trait B";
    }
    
    public function b(){
        
        echo "Ham b, trait B";
    }
}

class abc {
    use A, B{
        B::a insteadof A;
        a::b insteadof B;
    }
    
}

$abc = new abc;

$abc->a(); //Ham A, trait B

$abc->b(); //Ham b, trait A