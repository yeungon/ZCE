<?php
/**
*@author by Vuong
*@category ZCE63 ArrayObject (this class can iterate if you use the function getIterator() first) and ArrayIterator; Read my comment on php.net http://php.net/manual/en/class.arrayobject.php
*/

$array = ['hello' => 'world',
               'luyen' => 'thi',
               'chungchi' => 'zce',
               ];

$arrayobject = new ArrayObject($array);

$iterator = $arrayobject->getIterator();

if($iterator->valid()){
    $iterator->seek(1);        //seek() is not available at ArrayObject but ArrayIterator, but when getIterator() is implemented then seek() somehow works :-)    
    $iterator->next();
    echo $iterator->key(), $iterator->current();
}

//https://3v4l.org/tkbuF