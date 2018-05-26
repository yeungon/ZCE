<?php
/**
* @category Cut array ZCE 84 
* @author Vuong Nguyen
* Về việc tỉa tót array thì bốn thằng sau đi với nhau:
1) array_shift($array): cắt element đầu tiên
2) array_unshift($array, $element): thêm vào array hiện có 1 (hoặc nhiều) element vào đầu.
3) array_pop cắt đít
4) array_push() thêm vào đít 1 hoặc nhiều element/

chú ý là bọn này mà hứng giá trị trả về thì hơi có tí lấn cấn cần chú ý:

Khi cắt đi thì nếu hứng nó sẽ hứng array bị cắt.
Còn nếu thêm vào mà hứng return thì ăn... Boolean ngay 
*/
$stack = array("orange", "banana", "apple", "raspberry");
$a = array_pop($stack);

array_unshift($stack, $a);

echo strlen($a) + count($stack);


	
?>