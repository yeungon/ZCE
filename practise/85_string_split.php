<?php
/**
* @category ZCE string 85
* @author Vuong Nguyen
*/
$a = '987654321';
$b = str_split($a); // if the length is not determined in the function as str_split($string, length), then 1 is used as default
$c = $b[0] + count($b);
echo $c;

//https://3v4l.org/pSu5f