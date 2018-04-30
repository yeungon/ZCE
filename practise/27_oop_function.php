<?php

class ViDu
{

    public $jar;

    public function get(int $key) : ?array
    {
        return [$this->jar => $key**3];
    }

}

$abc = new ViDu;

$abc->jar = "key";

echo array_values($abc->get(2))[0];

//kết quả https://3v4l.org/LC0VR
// giải thích tại https://3v4l.org/bEk5v
