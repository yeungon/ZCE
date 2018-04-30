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
    use A, B{ //gộp 2 trait có method cùng tên.
        B::a insteadof A; //dùng method của B, thay vì A
        A::b insteadof B; //dùng method của A, thay vì B
    }
    
}

$abc = new abc;

$abc->a(); //Ham A, trait B

$abc->b(); //Ham b, trait A
