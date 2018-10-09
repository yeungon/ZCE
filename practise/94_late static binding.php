<?php
/*vuong, zce, vuongnguyen.net

*/

class A {
    
    public static function freetut(){
        return $coca ?? $pessi ?? 9 ;
    }
    
    public static function xinchao() {
        
        /*nếu static thì gọi tới hàm của class B hoặc A tùy vào việc gọi class nào, còn self: thì thuộc class hiện tại*/
        return static::freetut() + self::freetut(); 
    }
}

class B extends A {
    
    public static function freetut(){
        return $coca ?? $pessi ?? 10 ;
    }
}

echo B::xinchao() + A::xinchao();

//https://3v4l.org/4JORs              

/*noted:
B::xinchao() gọi tới hàm xinchao(), hàm xinchao trả về hàm freetut() của class B trong trường hợp static::freetut() và hàm freetut() của class A trong trường hợp self::freetut. Kết quả 10 + 9 = 19

A::xinchao() gọi tới hai lần freetut() của class A, vì đang gọi từ class A, nên 9 + 9 = 18

*/

?>