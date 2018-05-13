<?php
/**
*@author by Vuong
*@category singleton pattern AND Registry Pattern ==> tạo set && get 
*/

class A{

	//private chỉ có thể truy cập trong class || static: có thể gọi tới mà không cần khởi tạo
	private static $instance; 

	private $storage; // để lưu dữ liệu toàn cục

	//thiết lập private để không cho khởi tạo object
	private function __construct(){ 

	}

	//dùng phương thức static để gọi phương thức bằng :: mà không cần khởi tạo object
	public static function getInstance(){ 
		if (!isset(self::$instance)) //kiểm tra nếu chưa có
			self::$instance = new A; //khởi tạo object
			return self::$instance; //trả về object
	}

	public function __set($name, $value){
		if(!isset($this->storage[$name]))
			$this->storage[$name] = $value;

	}

	public function __get($name){
		if(isset($this->storage[$name]))
			return $this->storage[$name];
		return NULL;
	}

}
	//tạo object chính nó bằng cách gọi hàm/luôn luôn chỉ có một object giống nhau khi gọi hàm getInstance
	$a = A::getInstance();

	$a->name = "Vượng";
	echo $a->name;


	$b = A::getInstance();
	$b->vidu = "Giang";

	echo $b->vidu;