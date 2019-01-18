<?php

// null and string, type casting
// FALSE, if 0, 0.0, "0", [], null, empty simplexml object
// TRUE if - 1, "0.0" or "0.00";


$flag = "0.0";

echo (bool)$flag; // 1 /TRUE


var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)