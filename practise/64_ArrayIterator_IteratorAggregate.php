<?php

/**
*@author by Vuong
*@category ZCE64 IterateAggregate && ArrayIterator 
*/

class a implements IteratorAggregate{

    private $data = [1, 2, 3, 4];
    
    public function __construct(){
        
        $this->arr = $this->data;
    }
    public function getIterator(){
       
        return new ArrayIterator($this->arr);
  
    }
}

$iterator = new a;


foreach ($iterator as $val){
    
    echo $val;
}


$iterate = $iterator->getIterator();

foreach ($iterate as $val){
    
    echo $val;
}

for($iterate->rewind(); $iterate->valid(); $iterate->next()){
    echo $iterate->current();
}