<?php

$data_billding= array(
'first_name' => "<b>vượng</b>",
'last_name' => "<i>vượng</i>",
'email' => "\vuong",
'phone' => "he\vuong",
'address' => "<h1>hello vuong</h1>",
);


function change($value, $key){
    
    $key = stripslashes(strip_tags($key));
    $value = stripslashes(strip_tags($value));
    $a = array($key => $value);
    print_r($a);
    
}

array_walk_recursive($data_billding, "change");

/*

có array_walk và array_walk_recursive (return boolean)
có array_map nhưng không có array_map_recursive (return array)


https://3v4l.org/UDi1D
*/

/*hung data*/
function changeb($value, $key){
    
    $key = stripslashes(strip_tags($key));
    $value = stripslashes(strip_tags($value));
    global $a;
    $a[] = [$key => $value];
    //print_r($a);
    
}

