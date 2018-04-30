<?php

class theExceptionOne extends Exception { }
class theExceptionTwo extends Exception { }

class theClass {
    public function run() {
        try {
            try {
                throw new theExceptionOne('Error1 happened!');
                throw new theExceptionTwo('Error2 happened!');
                throw new theException('Error0 happened!');
            } catch (Exception $e) {
                echo "0";
                throw $e;
            } catch (theExceptionOne $e) {
                echo "A";
                throw $e;
            } catch (theExceptionTwo $e) {
                echo "B";
                throw $e;
            }
        } catch (theExceptionTwo $e) {
            echo "2";
        } catch (theExceptionOne $e) {
            echo "1";
        } catch (theException $e) {
            echo "Z";
        }
    }
}

$test = new theClass;
$test->run();

