<?php
function sum(...$a) { // ...token cho phép dùng không giới hạn arguments

    return func_num_args()**func_num_args(); //trả lại số lượng arguments (khi hàm được chạy)
}

print_r(sum(1, 2, 2));

//https://3v4l.org/JT8sF

?>