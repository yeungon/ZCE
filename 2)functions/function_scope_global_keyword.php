<?php

  $a = 20;
    function myfunction($b)
    {
        $a = 30;
        global $a, $c;
        return $c = ($b + $a);
    }

    print myfunction(40) + $c;
