<?php

$a = 10;
$b = &$a;

echo $c = $a++ + ++ $b - --$a + $b++ + $a--; //10  + 12 - 11 + 11 + 12

/*tớ thử giải nhé:

vì $b = &a; nên tham chiếu 2 thằng này cùng một giá trị. gọi giá trị là X

1) $a++ = $a + 1, trả lại 10 nhưng trong bộ nhớ $b = $a + 1; vậy X = 11.
2) ++$b = $12. vì X đang = 11, vậy trả lại X = 12.
3) --$a = 11 vì X đang = 12, trả lại X = 11
4) $b+++$a thực chất là $b trả lại X = 11.
5) cuối cùng ++$a-- tức ++$a thôi, trả lại X 12
*/