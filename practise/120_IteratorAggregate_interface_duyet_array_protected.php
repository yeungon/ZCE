<?php

/*https://3v4l.org/rTh95

inteface IteratorAggregate có duy nhất một hàm là getIterator() cho phép duyệt mảng protected.

Nếu dùng Iterator thì có 5 hàm điều khiển current(), next(), valid(), rewind() và key()

Note: Bài chưa hoàn chỉnh :-).
*/

class abc implements IteratorAggregate{
    
    protected $abcd = ["hello world", "xin chào"];
    
    function getIterator(){
        
        foreach($this->abcd as $value){
            echo $value.PHP_EOL;
        }
    }
}

$a = new abc;

$a->getIterator();