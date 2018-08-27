<?php
/*https://3v4l.org/7kkK4

self::$static_variable
new self: tạo object mới

call_user_func_array: gọi hàm

*/
class ViDu
{
    public static $variable = 2;
    
    public function hello($argument)
    {
        
        try{
        
            $a = ($argument**self::$variable)**strlen(get_class(new self));
        
        } catch(Exception $e) {
        
            echo $e;
        }
        
        return $a;
    }
}

$a = new ViDu;

echo call_user_func_array([$a, "hello"], [2]);