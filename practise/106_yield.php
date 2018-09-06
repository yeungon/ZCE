<?php
/*yield sẽ lưu lại kết quả vòng for


nếu gọi gettype(hàm) ==> object

chạy lại object array bằng foreach như thường

*/

function a(){
    
    for($i=1; $i<=9; $i++){
        
    yield $i;
    
    }
    
}

if(($generator = a()) == true){
    
    $a ="generator";
    $b = "a";
    
}


foreach($$$b as $v){
        
        $c[] = $v;
}

echo array_sum($c) + strlen(gettype($generator));


?>

