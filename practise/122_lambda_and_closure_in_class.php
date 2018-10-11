<?php

/*
by Vuong Nguyen at vuongnguyen.net

Online result: https://3v4l.org/7S1lT
*/

class Data{
    
    public $string = '{"3": "ba", "hello": "world", "thế giới":"các bạn"}';
    
    public function handleData(){
        
        $this->string = json_decode($this->string, TRUE);
        
        return $this->string['hello'];
    }
    
}


class GaiXau{

    public $me;
    
    public function __construct(){
        return $this->me = new Data;
    }
    
    public function GaiXinh(){
        
        $data = [1, 2, 3];

        $gaixau = "ế quá";

        $gaixinh = function() use ($data, $gaixau){
    
            $number = count($data);
    
            return mb_strlen($gaixau) + $number;
        };
        
        return strlen($this->me->handleData()) + $gaixinh();
        
    }

}


$gai = new GaiXau();

echo $gai->GaiXinh();