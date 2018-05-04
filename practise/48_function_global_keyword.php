<?php

/**
 * ZCE material 
 * @category   global keyword in function
 * @author     me@vuongnguyen.net
 * @return : Từ khóa global trước variable trong hàm => sẽ gọi variable ở ngoài hàm.
 * @copyright  2018 Vuong
 */

  $a = 10;
    function myfunction($b)
    {
        $a = 20;
        global $a, $c;
        return $c = ($b + $a);
    }

    print myfunction(30) + $c;