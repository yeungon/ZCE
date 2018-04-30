<?php
namespace MyAwesomeFramework\MyAwesomeExceptions;

class MyException{ 
        public function getMessage() {
                    return self::class;
                        }
}

function inverse($x) {
        if ( ! $x) {
                    throw new Exception('Division by zero.');
                        }
            return 1/$x;
}

try {
        echo inverse(0) . "\n";
} catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
} catch (MyException $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
        echo "First finally.\n";
}


