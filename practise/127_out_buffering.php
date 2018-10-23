<?php
/*
*https://3v4l.org/G20EI
* by Vuong
*/
trait Tools{
        
        function getStart(){
            
            return ob_start();
        }
        
        function getContent(){
            
            return ob_get_contents();
        }
        
        function closeContent(){
            
            return ob_end_clean();
        }
        

}

class Operating{
    use Tools;
    
    public $me = null;
    
    public function __construct(){
        
        return $this->me = strlen(__CLASS__);
    }
    
}

$me = new Operating;

$me->hello = new \ArrayObject(range(1, 10, (int)2.51));

$me->getStart();

echo count($me->hello) + $me->hello->count();

$meme = $me->getContent() + $me->me;

$me->closeContent();

echo $meme;
