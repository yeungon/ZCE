<?php

// what's the output?
// It's: * * * * *

function loop($a, &$b) {
    echo '* ';
    if ($a <= $b) {
        return;
    }
    loop($a--, ++$b);
}

$a = 5;
$b = 1;
loop($a++, $b);

echo PHP_EOL;

