<?php

/**
 * ZCE material 
 * @category   call_user_func()
 * @author     me@vuongnguyen.net
 * @content : ...token, 
 * @copyright  2018 Vuong
 */


function abc(...$a){
    
    if(pow($a, $a) == $a**$a){return $a;};
}

print_r(count(call_user_func("abc", 1, 2, 3, 4)) + array_sum(call_user_func("abc", 1, 2, 3, 4)));




//https://3v4l.org/unXBO