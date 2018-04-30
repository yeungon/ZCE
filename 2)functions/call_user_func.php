<?php

function exibirMensagem()
{
    print 'Olá!';
}

call_user_func('exibirMensagem');


function somar($a, $b)
{
    return $a + $b;
}

print call_user_func('somar', 10, 20);