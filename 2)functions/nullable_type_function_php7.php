<?php

function nullabc (?int $abc){
    
    echo "xin chào $abc";
}

nullabc(1); //xin chào 1

nullabc(null); //xin chào, bắt buộc phải khao báo null

nullabc(); //lỗi


//This feature allows us to type hint a function, but still allow null value as parameters or returns. We can make a parameter or return value Nullable by prepending a question mark(?) to the type hint.

function sayHello(?string $name) {
    echo "Hello " . $name . PHP_EOL;
}
sayHello(null); // Hello
sayHello("John"); //Hello John

// Similarly, for nullable return type

class Cookie
{

    protected $jar;

    public function get(string $key) : ?string
    {
        if(isset($this->jar[$key])) {
            return $this->jar[$key];
        }
        return null; //nếu không thì return null
    }

}



//return null

function testReturn(): ?string //dấu chấm hỏi ? 
{
    return 'elePHPant';
}

var_dump(testReturn());

function testReturn(): ?string
{
    return null;
}

var_dump(testReturn());

function test(?string $name)
{
    var_dump($name);
}

test('elePHPant');
test(null);
test();
