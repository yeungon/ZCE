<?php

$a = ["false"=>"true", false=>"world", "hello"];
$a["true"] = 0x12;

echo array_values(array_flip($a))[2] + array_keys(array_flip($a))[3];

//https://3v4l.org/0WZ8a