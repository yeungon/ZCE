<?php
/*
 * Reference:
 * http://stackoverflow.com/questions/1912902/what-exactly-are-late-static-bindings-in-php

 Explanation from stackoverflow. User: Mrinmoy Ghoshal
 late static bindings work by storing the class named in the last 
 "non-forwarding call". In case of static method calls, this is the class
 explicitly named (usually the one on the left of the :: operator); in case
 of non static method calls, it is the class of the object.

 A "forwarding call" is a static one that is introduced by self::, parent::,
 static::, or, if going up in the class hierarchy, forward_static_call().

 The function get_called_class() can be used to retrieve a string with the name
 of the called class and static:: introduces its scope. 
 */

    class Car
    {
        public static function run()
        {
            return static::getName();
        }

        private static function getName()
        {
            return 'Car';
        }
    }

    class Toyota extends Car
    {
        public static function getName()
        {
            return 'Toyota';
        }
    }

    echo Car::run(); // output: Car
    echo Toyota::run(); // output: Toyota

// Bây giờ ở class Car ta thực hiện một thay đổi nho nhỏ. Thay vì dùng từ khóa self ta đổi nó thành static như sau :

class Car
{
    public static function model()
    {
         static::getModel();
    }

    protected static function getModel()
    {
        echo "I am a Car!";
    }

}

// Và thực hiện lại lời gọi hàm 
Mercedes::model();

/* ta sẽ thấy kết quả trả về như ta mong muốn :

I am a Mercedes!

Đây chính là cái gọi là late static binding trong PHP. Khi sử dụng từ khoástatic thay vì self, thì khi ta gọi một static funcion, nó sẽ tham chiếu đến class mà nó được gọi thay vì class đã định nghĩa nó như khi ta dùng từ khóa self. Trong trường hợp này, ta gọi model() từ class Mercedes nên nó tham chiếu đến class Mercedes và sẽ gọi đến getModel() của class Mercedess thay vì class Car như ở trường hợp ta sử dụng từ khóa self*/