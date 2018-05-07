<?php 

$s = "Day la mot vi du thu vi dung khong ?"; 
$r = explode(' ', ucfirst($s)); 
sort($r); 
echo implode(',', $r);