<?php

/*ZCE by @vuong*/

define('bongda', [
      'vietnam',
      'hanquoc',
      ["chungket" => "2"]
]);


$ketqua = (bongda)[2]["chungket"] + 3;

$vn = bongda[0][$ketqua];

echo ord(++$vn);

//https://3v4l.org/WS078