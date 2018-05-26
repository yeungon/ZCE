<?php
/**
* @category Cut string ZCE 83 
* @author Vuong Nguyen
* substr() => cắt chuỗi theo vị trí, strstr() => cắt chuỗi theo kí hiệu, dấu hiệu của string, nếu false (mặc định) => cắt về phải, nếu true, cắt về phía trái
*/

$string = "Xin chào các bạn";

echo strstr($string, substr($string, -1, 1), true);

//https://3v4l.org/OnvEh