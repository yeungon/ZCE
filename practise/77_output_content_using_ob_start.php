<?php

ob_start();

echo "Hello anh em ZCE";

$abc = ob_get_contents();

echo "World";

$cde = ob_get_contents();

ob_get_clean();

echo $abc;


//https://3v4l.org/mLBEp