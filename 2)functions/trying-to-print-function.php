<?php
/*
 * Lessons Learned. 'function func' will generate error.
 * The right way to do is:
 * $x = function($a, $b, $c)
 *
 * PHP Anonymous Functions!
 * http://php.net/manual/en/functions.anonymous.php
 */


$x = function func($a, $b, $c) {
    print "$c|$b|$c\n";
};

print $x(1,2,3);
