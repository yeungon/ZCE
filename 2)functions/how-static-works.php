<?php
	
/*

// quan trọng


Special thanks to David Stockton. He explained really well how
static works. If you don't believe in me, watch his video:

https://www.youtube.com/watch?v=hbbdyyN9MRU

Thanks David!
*/

function callMe() {
	static $foo = 0; 
	// Here is the trick. Static only define the value to $foo on the 
	// fist call. After that, it skips it and assume the last value
	// that was assigned to $foo.
	
	// Without static, it will assign 0 every time it's called
	// and will return: 1 1 1 1 1 1 1 1 1 1
	
	return ++$foo;
}

for ($i = 10; $i < 20; $i++) {
	echo callMe(). ' ';
}

// Outputs: 1 2 3 4 5 6 7 8 9 10

echo PHP_EOL;

//ví dụ 2 về static


function tract(){
    
    static $count = 0; //giá trị của biến static được bảo lưu sau mỗi lần chạy hàm. vãi lúa
    $count++;
    echo $count;
    
}

tract(); //1
tract(); //2
tract(); //3

//https://3v4l.org/iO4Ug