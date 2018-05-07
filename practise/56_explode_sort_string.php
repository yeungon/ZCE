<?php 

$string = "Day la mot vi du thu vi dung khong ?"; 
$array = explode(' ', ucfirst($string)); //ucfirst() chỉ echo chữ hoa của cả dãy string ucword() in chữ hoa của tất cả các chữ trong string
sort($array); //sort () sắp xếp kí tự lạ trước => số => chữ hoa -> chữ thường abc
echo implode(',', $array);