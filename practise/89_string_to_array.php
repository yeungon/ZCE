<?php
//https://3v4l.org/X6SOK

$a = "Hell";
$b = "World";

if(($a[-1] <=> $b[strlen($a) - 1]) != true)
{
    echo ((array)$b)[0];
    
}
else
{ 
    echo ((array)$a)[0];
    
}