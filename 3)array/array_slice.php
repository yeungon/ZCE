
<?php
$array1 = array ("a", "b", "c", "d", "e", "f");
$array2 = array_slice($array1, -3);
 
foreach ( $array2 as $val ) {
    print "$val "; //d e f 
}
?>

