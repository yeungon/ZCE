<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function &test() //line 1
{
    $teste = "Here is as string";
    return $teste;
    // return "Here is as string"; //line 2
}
test(); //line 3
echo "End"; //line 4


// Which following line is not correct?
// Line 2