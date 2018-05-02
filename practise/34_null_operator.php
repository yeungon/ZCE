<?php

const A = [
   'đỏ' => 'táo',
   'vàng' => 'cam',
   'đen' => 'bưởi'
  ];
 
 $a = array_reverse(array_flip(A));
 
 echo $a[0] ?? $a[3] ?? $const ?? mb_strlen(array_values($a)[0]) ;

 //kết quả, giải thích https://3v4l.org/nT3bt