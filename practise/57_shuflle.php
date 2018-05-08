<?php

$wife = range('a', 'z', 1);

$wife = array_rand($wife, 4);

$children = range (0, count($wife), 1);

echo "nhà có ".count($wife)." con vợ và ".count($children). " con";

//https://3v4l.org/UNlHT
//hàm shuffle thuộc họ hàng sort nên luôn return BOOLEAN