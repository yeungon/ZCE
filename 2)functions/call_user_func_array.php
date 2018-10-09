<?php


class ViDu
{
    public function hello($argument1, $argument2)
    {
        return $argument1.$argument2;
    }
}

$a = new ViDu;

echo call_user_func_array([$a, "hello"], ["ví dụ", 123]); //ví dụ123





function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}

foobar('one','two'); // OUTPUTS : foobar got one and two 

call_user_func_array("foobar", array("one", "two")); // // OUTPUTS : foobar got one and two