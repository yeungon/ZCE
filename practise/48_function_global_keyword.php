<?php

/**
 * ZCE material 
 * @category   global keyword in function
 * @author     me@vuongnguyen.net
 * @return : Từ khóa global trước variable trong hàm => sẽ gọi variable ở ngoài hàm.
 * @copyright  2018 Vuong
 */

  $a = 10;
    function function($b)
    {
        $a = 20;
        global $a, $c;
        return $c = ($b + $a);
    }

    print function(30) + $c;
