<?php

// https://3v4l.org/0HNf7


class M {
    
    public function identify() {
    echo self::myName();
    }
    public function myName() {
    return "Mike";
    }
}

class N extends M {
    public function myName() {
    return "November";
    }
    
    function identify(){ //hàm này sẽ ghi đè hàm identify() trong class cha
    echo self::myName(); //self::luôn luôn chỉ tới class hiện tại.
        
    }
 }
    
    function m(N $n) { //hàm này nằm ngoài class, nhưng nó có tham số là một object của một class, vãi lúa
        
    $n->identify();
}

$m = new N();

m($m); //Mike, Nếu như trong class N KHÔNG CÓ có identify() và cũng self::myName() thì chuyện gì xãy ra anh. NẾU CÓ, "November"


/*Nếu như trong class N cũng có identify và cũng self::myName() thì chuyện gì xãy ra anh?

==> vì hàm m() có trong class N, hàm này có argument là một object tên là $n của chính class N, object này lại trỏ tới hàm identify(). Vậy giả sử mình có hàm identify() thì nó sẽ ghi đè hàm identify() của class cha M. Còn self::myName thì gọi tới function của chính class hiện tại, do đó nó sẽ là "November"*/
