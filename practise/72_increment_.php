<?php

/**
*@author by Đỗ Hoàng Đức
*@category ZCE72 increment
*/

$a = "";

$b = "Z.Z";

$c = ++$b.$a--;

$d = ++$c.--$a;

$e = --$d.--$a;

echo $e;


?>