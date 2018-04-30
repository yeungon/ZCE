<?php
//ví dụ 1
function addValues() {
    $sum = 0;

    for ($i = 1; $i <= func_num_args(); $i++){

	echo $i. PHP_EOL;

        $sum += func_get_arg($i);
    }

    return $sum;
}

echo addValues(1, 2, 3);


//ví dụ 2

/*func_num_args(); ==> trả về ARRAY CHỨA CÁC ARGUMENT
func_num_arg(); ==> TRẢ VỀ 1 ARGUMENT CỤ THỂ
*/

function foo()
{
     $numargs = func_num_args();


     echo "Number of arguments: $numargs\n";

     if ($numargs >= 2) {
         echo "Second argument is: " . func_get_arg(1) . "\n";
     }
}

foo(1, 2, 3);

/*Number of arguments 3 
Second argument is2
*/