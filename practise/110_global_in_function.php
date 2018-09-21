<?php
// global là từ khóa dùng cho biến có tầm vực toàn cục, nếu khai trong hàm


const AGE = 20;

$nguiyeu = 3;

function ViDu($arr = __FUNCTION__){
    
    global $nguiyeu;
    
	if (AGE == "20 năm học code" && $nguiyeu <= strlen(__FUNCTION__)) {
		
		$return = "Hi";
		
	}else{

		$return = "World";
	}

	echo strlen($arr.$return);
}

echo ViDu();

//https://3v4l.org/dGrQ5