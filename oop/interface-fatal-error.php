<?php

/*
Fatal error: Declaration of myClassA::doSomething() must be compatible with myBaseClass2::doSomething($special)
 */
    interface myBaseClass1 {
        public function doSomething();
        public function specialFunction1();
    }

    interface myBaseClass2 {
        public function doSomething($special);
        public function specialFunction2();
    }

    class myClassA implements myBaseClass1, myBaseClass2 {
        function doSomething() {
            echo '...';
        }

        function mySpecialFunction1() {
            echo '...';
        }

        function mySpecialFunction2() {
            echo '...';
        }
    }

    $a = new myClassA();
    $a->doSomething();


