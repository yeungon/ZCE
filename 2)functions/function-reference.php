<?php

function test(&$a) {
    return ++$a;
}

$a = 2;

echo test($a);

