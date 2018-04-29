<?php
class A {
    private function whoami() {
        echo 'A', PHP_EOL;
    }

    public function out() {
        $this->whoami();
    }
}

class B extends A {
    private function whoami() { //hàm trùng tên sẽ ghi đè whoami() trên class A
        echo 'B', PHP_EOL;
    }

    public function out() {
        $this->whoami();
    }
}

$a = new A;
$a->out(); //A

$b = new B;
$b->out(); /////B