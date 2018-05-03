<?php

interface a{
    
    const A = 10;
}

class b implements a{
    
    public $student = "5";
    public $teacher = "5";
    public function __construct(){
        $this->people = $this->student + $this->teacher;
    }
    
    public function school(){
        
        return $this->people;
    }
}

$c = new b;

echo $c->school() === get_class($c)::A ?? "hello";

//https://3v4l.org/Xd5msL