<?php
    $a = 10;
    $b = 20;
    $c = 30;

    if ($a < 50 && $b > 100 || $c == 30) {
        echo "a"; // ra a vì c==30 ||: hoặc
    }
    else {
        echo "b";
    }

    if ($b < 50 XOR $c == 30) {
        echo "c"; // vì c ==30; XOR: hoặc 1 trong 2 cái đúng
    }
    else {
        echo "d";
    }

    // ouput: ad
    // XOR: TRUE if either $a or $b is TRUE, but not both.

?>