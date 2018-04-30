<!-- Explanation: Answer options B, C, and D are correct.

Reflection is an API that is used to reverse-engineer classes, interfaces, functions, methods and extensions. It offers ways to retrieve doc comments for functions, classes and methods. Generally, reflection is used for the following reasons:
=> To interact with encoded scripts.
=> To provide complete overview of incompletely updated manual.
=> To know what is inside the class.
Reflection helps us to know how things actually work when parts of PHP don't have a completely updated documentation.It was throughly used during beta testing of PHP. For example, if you have given the following PHP script: -->

 <?php
 class myparent {
 public function foo($bar) {
 // do stuff
 }
 }
 
 class mychild extends myparent {
 public $val;
 
 private function bar(myparent &$baz) {
 // do stuff
 }
 public function __construct($val) {
 $this->val = $val;
 }
 }
 $child = new mychild('hello world');
 $child->foo('test');
$reflect = new ReflectionClass('mychild');
echo $reflect;
?>
<!-- 
You should get the output like this:

 Class [ <user> class mychild extends myparent ] {
 @@ C:\home\reflect.php 8-18
 - Constants [0] {
 }
 - Static properties [0] {
 }
 - Static methods [0] {
 }
 - Properties [1] {
 Property [ <default> public $val ]
 }
 - Methods [3] {
 Method [ <user> private method bar ] {
 @@ C:\home\reflect.php 11 - 13
 - Parameters [1] {
 Parameter #0 [ <required> myparent &$baz ]
 }
 }
 Method [ <user, ctor> public method __construct ] {
 @@ C:\home\reflect.php 14 - 16
 
 - Parameters [1] {
 Parameter #0 [ <required> $val ]
 }
 }
 Method [ <user, inherits myparent> public method foo ] {
 @@ C:\home\reflect.php 3 - 5
 - Parameters [1] {
 Parameter #0 [ <required>$bar ]
 }
 }
 }
} -->