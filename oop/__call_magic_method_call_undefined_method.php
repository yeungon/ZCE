<?php 

class Test {
  function __call( $var1, $var2 ) { //đây là magic method, dùng để hiển thị khi gọi hàm không được viết trong class.


          $check = " '$var1' called\n";
          $check.= print_r( $var2, true );
       return $check;
     }
}


$item = new Test();


print $item->array( "John", "Maria", "Jason" ); //hàm này không có trong class nên nó sẽ gọi __call



//output

/*'array' called
Array ( [0] => John [1] => Maria [2] => Jason ) 
*/

// Xem thêm ví dụ này tại http://www.zendexam.com/question/114/you-run-the-following-php-scriptwhat-is-the-work-of-the-__call-method-in-the-above-script/

// The __call() method is the magic method in PHP 5 that is triggered when inaccessible methods are triggered in an object context. If a user defines the __call() method in the class, he can catch undefined/inaccessible method and decide what to do with it. There are two arguments that are automatically passed to the __call() method, i.e., a string variable holding the name of the method that was called and an array variable holding any arguments that were passed. In the above script, you have created a class called Test and given it a __call() method. The __call() method accepts the method name and an array of method arguments. It assigns a string quoting the contents of both of these to a variable, $check, and returns it to the calling code. Hence, in the above PHP code, it will catch the nonexistent $item->array() method and print the result:



//ví dụ 2, xem tại https://3v4l.org/cBPNt

class abc{
    
    public function __call($method, $argument){
        
        echo "function $method không có nhé";
    }
    
}

$a = new abc;

$a->cde(); //function cde không có nhé




?>