<?php

function tract(){
    
    static $count = 0; //giá trị của biến static được bảo lưu sau mỗi lần chạy hàm. vãi lúa
    $count++;
    echo $count;
    
}

tract(); //1
tract(); //2
tract(); //3

//https://3v4l.org/iO4Ug