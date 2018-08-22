<?php

/*
@vuong
https://3v4l.org/jChmI*/

class freetut
{
    public function __tostring()
    {
        return "this is a function";
    }
    
    public function __invoke()
    {
        return strlen(self::class);
    }
    
}

$a = new freetut();

echo $a() + strlen($a);




?>