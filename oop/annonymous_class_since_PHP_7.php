
<?php

// Pre PHP 7 code
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());



// PHP 7+ code
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});

//http://php.net/manual/en/language.oop5.anonymous.php

//They can pass arguments through to their constructors, extend other classes, implement interfaces, and use traits just like a normal class can




class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

var_dump(new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});


object(class@anonymous)#1 (1) {
  ["Command line code0x104c5b612":"class@anonymous":private]=>
  int(10)
}