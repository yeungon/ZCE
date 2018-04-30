<?php

class a
{
    function a($x = 1) {
        $this->myvar = $x;
    }
}

class b extends a
{
    var $myvar;

    function b($x = 2)
    {
        $this->myvar = $x;
        parent::a();
    }
}

$obj = new b;
echo $obj->myvar;

