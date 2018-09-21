<?php
/*zce question preprared by vuong
noted: Chỉ khi property bằng private nó mới không bị ghe đè, vì thực ra, nó chỉ được dùng ở chính class đã khai báo.

khi property là protected --> vẫn bị ghe đè như thường

*/
class Hello{
	
	protected $a = 1;

	function hama()
	{
		return 1 + (int)$this->a;
	}

}

class World extends Hello{
	
	protected $a = "10 năm học cốt nè";

	function hamb()
	{
		
		return $this->hama();

	}

}

$b = new World;

echo $b->hamb();

