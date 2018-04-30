<?php
/*key in the first array is kept
replace the value from the later arrays if keys are the same.
*/
$a = ["a" => 1, 2, 3]; 
$b = [4, 5, 6];

print_r(array_replace($a, $b));

//output Array ( [a] => 1 [0] => 4 [1] => 5 [2] => 6 )

//another example

$array1 = array("orange", "banana", "apple", "raspberry");
$array2 = array(0 => "pineapple", 4 => "cherry");
$array3 = array(0 => "grape");
$array4 = array_replace($array1, $array2, $array3);
print_r($array4); 

/*output 

//Array
(
[0] => grape
[1] => banana
[2] => apple
[3] => raspberry
[4] => cherry
) */