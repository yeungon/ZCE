<?php

echo true ? 'a': true ? 'b': 'c'. PHP_EOL;

/*
 *
 *  Output is: b
 *
06:57 < Alphos> ule because (true ? 'a' : true) ? 'b' : 'c'
06:58 < Alphos> the first ternary returns 'a', which is truthy, and gets evaluated by the second ternary, which then returns "b", which is then echo'd
06:58 < Alphos> ule : stop nesting ternaries, it'll only end in blood
 */
