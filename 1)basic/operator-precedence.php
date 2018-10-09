<?php

$o_que_vem_antes__multiplicacao_ou_divisao = 2 / 2 * 10;

echo '2 / 2 * 10 = ';
echo $o_que_vem_antes__multiplicacao_ou_divisao. PHP_EOL;


$o_que_vem_antes__multiplicacao_ou_divisao = 2 * 2 / 10;

echo '2 * 2 / 10 = ';
echo $o_que_vem_antes__multiplicacao_ou_divisao. PHP_EOL;

/*
 * When we're trying to compare multiplication and division
 * that one that comes first from left to right is executed
 * first.
 *
 * output:
 * 2 / 2 * 10 = 10
 * 2 * 2 / 10 = 0.4
 *
 */
