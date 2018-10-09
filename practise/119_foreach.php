<?php
/*https://3v4l.org/BdQBC
* ZCE by Vuong at vuongnguyen.net
Note: vòng foreach chỉ có element cuối cùng trả về
*/
function tinhToan(&$array){
    foreach ($array as &$value){
    
          $value = $value + 3;
    }
          $value = $value + 4;
}

$dulieu = [-2, 3, 4, true];

tinhToan($dulieu);

echo array_sum($dulieu) + (min($dulieu) <=> max($dulieu)%min($dulieu));