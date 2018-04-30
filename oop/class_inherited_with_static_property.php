<?php

/*Late static binding is a variant of binding between static and dynamic binding. Late static binding works by storing the class named in the last "non-forwarding call". For example, a developer will get the output 'hello' in the following PHP script:
*/


class A {
 static $word = "hello";
 static function hello() {print self::$word;} //dùng self::
}
class B extends A {
 static $word = "bye";
}
B::hello(); //hello



// dùng static::propterty

class A {
static $word = "hello";
static function hello() {print static::$word;}
}
class B extends A {
static $word = "bye";
}
B::hello(); //bye

/*However, in the case of late static binding, if "self::$word" in the above example were changed to "static::$word" as shown in the following block, then the result of the call to B::hello() would be "bye":
*/






?>