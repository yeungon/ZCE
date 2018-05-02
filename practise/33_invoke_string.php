<?php

namespace abc;

class cde{
    
}

class abc extends cde{
    
    public function __invoke(){
        
        return parent::CLASS;
    }
}

$a = new abc; 

echo strpos($a(), "\\");

//giải thích, kết quả https://3v4l.org/PZ7LZ