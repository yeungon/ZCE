<?php

// https://3v4l.org/Kl9Us

trait Name
{
    private $name = 'Vượng';

    private function getName()
    {
        return $this->name;
    }
}

class ConNguoi
{
    use Name {
        
        getName as public doName; //Đổi getName sang doName và đổi cả private sang public
    }
}

$connguoi = new ConNguoi();

echo $connguoi->doName();
