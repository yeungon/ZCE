<?php

class abc extends ArrayObject{
    
}

$a = new abc;

echo count(get_class_methods(get_class($a)));

//https://3v4l.org/PFmlm