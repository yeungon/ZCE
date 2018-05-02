<?php

trait abc{
    public $var = "hello world";

    final public function vietzce(){ //final key nha, hehe.
        
        return strtoupper(__CLASS__);
    }
    
}

class cde {
    use abc;
    
     public function vietzce(){
        
        return strtolower(__CLASS__);
    }
    
}

$a = new cde;

echo $a->vietzce();

//anwser https://3v4l.org/lrClT