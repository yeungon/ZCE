<?php

try {
    class MyException extends Exception {}
    try {
        throw new MyException('Erreur');
    } catch (Exception $e) {
        echo 'Exception';
        throw $e;
    } catch (MyException $e) {
        echo 'MyException';
        echo '__CAIU_AQUI__';
        throw $e;
    }
} catch (MyException $e) {
    echo '__CAIU NO GET_CLASS__';
    echo get_class($e);
}

// Exception__CAIU NO GET_CLASS__MyException
