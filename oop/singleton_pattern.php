<?php
/**
*@author by Vuong
*@category Singelton Pattern
*/

class A{

	//private chỉ có thể truy cập trong class || static: có thể gọi tới mà không cần khởi tạo
	private static $instance; 

	//thiết lập private để không cho khởi tạo object
	private function __construct(){ 

	}

	//dùng phương thức static để gọi phương thức bằng :: mà không cần khởi tạo object
	public static function getInstance(){ 
		if (!isset(self::$instance)) //kiểm tra nếu chưa có
			self::$instance = new A; //khởi tạo object
			return self::$instance; //trả về object
	}

	protected function __clone(){ //chống clone object bằng cách dùng protected

	}

	public function hello(){

		return "hello world";
	}


}

//tạo object chính nó bằng cách gọi hàm/luôn luôn chỉ có một object giống nhau khi gọi hàm getInstance
	$a = A::getInstance(); 

	echo $a->hello();