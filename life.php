<?php

interface life{
    
                  "continental" => ["Heidegger" => "the world where being lives", "Camus" =>"absurdity"],
                  "marxism" => ["lênin-nít " => "vật chất aka phạm trù, hem cần biết lương bao nhiêu"]
                  
    const _LIFE = ["analytic_approach"=>["wittgenstein"=>"the case"],
    ];
    
    public function live();
    
    public function die();
    
}
class a
{
    function aabc($x = 1) {
        $this->myvar = $x;
    }
}
class b extends a
{
    var $myvar;
    function __construct($x = 2)
    {
        $this->myvar = $x;
        parent::aabc();
    }
}
$obj = new b;
echo $obj->myvar;