<?php

$a = new ArrayObject;

print_r(get_class_methods($a));


$b = new ArrayIterator;

print_r(get_class_methods($b));

/*
Array ( [0] => __construct [1] => offsetExists [2] => offsetGet [3] => offsetSet [4] => offsetUnset [5] => append [6] => getArrayCopy [7] => count [8] => getFlags [9] => setFlags [10] => asort [11] => ksort [12] => uasort [13] => uksort [14] => natsort [15] => natcasesort [16] => unserialize [17] => serialize [18] => getIterator [19] => exchangeArray [20] => setIteratorClass [21] => getIteratorClass ) 

Array ( [0] => __construct [1] => offsetExists [2] => offsetGet [3] => offsetSet [4] => offsetUnset [5] => append [6] => getArrayCopy [7] => count [8] => getFlags [9] => setFlags [10] => asort [11] => ksort [12] => uasort [13] => uksort [14] => natsort [15] => natcasesort [16] => unserialize [17] => serialize [18] => rewind [19] => current [20] => key [21] => next [22] => valid [23] => seek )
*/


?>