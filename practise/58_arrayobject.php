<?php

/**
*@author by Vuong
*@category ZCE SPL
*/

$a = new ArrayObject(range(1, 7, 1));

$a[] = 2;

$a->append(3);

echo $a->count();

//https://3v4l.org/uECZ4