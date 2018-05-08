<?php
/**
*@author by Vuong
*@category ZCE61 call_user_func("functionname", "biến")
*/


$a = function($arg){
  return $arg*2;  
};

echo call_user_func("a", 5) + $a(5) + a(5);

function a($arg){
    return $arg*2;
}