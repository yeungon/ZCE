<?php

/*
What we learned here is: On line 15, inside myBaseA, the semi-colon 
is breaking the method. So it looks like the doSomething() has no 
implementation and body. That's generating error.
 */

    abstract class myBaseClass {
        abstract protected function doSomething();
        function threeDots() {
            return '...';
        }
    }

    class myBaseA extends myBaseClass {
        protected function doSomething(); 
        {
            echo $this->threeDots();
        }
    }

    $a = new myClassA();
    $a->doSomething();

