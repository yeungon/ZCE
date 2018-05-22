<?php
/**
*@category ZCE 76
*@author Vuong
*/

class ViDu
{
    public $variable = 2;
    public function hello($argument1, $argument2)
    {
        return $argument1**$argument2*$this->variable;
    }
}

$a = new ViDu;

echo call_user_func_array([$a, "hello"], [2, 3]);