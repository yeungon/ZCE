<?php

/**
* @author Vuong Nguyen
* ZCE 79 Dependency Injection and Type hint
*/

class ABC
{
    public function xyz()
    {
        return [2, 3, 4];
    }
}

function abc(ABC $object, array $array){
    
    return array_sum($object->xyz()) + count($array);
}


$a = new ABC;
echo abc($a, [2, 3, 4]);

//https://3v4l.org/WIuhF