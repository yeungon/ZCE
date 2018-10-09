<?php

//basic PHP 7

//http://talks.php.net/taiwan15#/php7sth
//http://blog.teamtreehouse.com/5-new-features-php-7


//1) strick scalar type

// comments https://www.quora.com/Are-strict_types-in-PHP-7-not-a-bad-idea

declare(strict_types = 0); //at the top of any given file, có thể bằng 1 (TRUE) hoặc 0 (FALSE)

$a='1'; // string
$b= 2; //integer

function FunctionName (int $a, int $b){ // chú ý từ khóa phải chính xác gồm int thay vì integer, bool thay vì boolean, float thay vì double vv...
return $a + $b;

}
echo FunctionName ($a, $b); //Strict is determined by the file in which the call to a function is made, not the file in which the function is defined.==> khi goij function, không phải khi define function


/*nếu strict_types = 1 sẽ lỗi ngay, nếu không là 3
Fatal error: Uncaught TypeError: Argument 1 passed to FunctionName() must be of the type integer, string given,
ví dụ https://3v4l.org/Na2RQ
*/


function test(string $msg, int $level, float $s){
    
    var_dump($msg);
    var_dump($level);
    var_dump($s);
}

test(1, "2.5", 3); //string(1) "1" int(2) (chú ý int 2.5 => 2) float(3) ==> nếu declare(strict_types = 0); nếu bằng 1 string(1) "1" int(2) float(3)




//2)2.1Null Coalesce Operator

$name = $firstName ??  "Guest";

$name = $firstName ?? $username ?? $placeholder ?? "Guest"; 

  //What makes this even more powerful, is that you can stack these! This operation will check each item from left to right and when if finds one that is not null it will use that value.

$username = "hello";
$name = $firstName ?? $username ?? $placeholder ?? $test ?? $vidu ?? "Guest";

echo $name; // ra "hello"

//2.2 Spaceship Operator

$compare = 2 <=> 1

2 < 1? return -1
2 = 1? return 0
2 > 1? return 1



// 3. Type Declarations => With PHP 7 we now have added Scalar types.  Specifically: int, float, string, and bool. 

function getTotal(float $a, float $b) {
    return $a + $b;
}

getTotal(2, "1 week"); 
// int(2) changed to float(2.0) and string “1 week” changed to float(1.0) but you will get a “Notice: A non well formed numeric value encountered”
//returns float(3)

// 4  Error Handling http://blog.teamtreehouse.com/5-new-features-php-7 

//In PHP 7, Error and Exception both implement the new Throwable class. What that means is that they basically work the same way. And also, you can now use Throwable in try/catch blocks to catch both Exception and Error objects. Remember that it is better practice to catch more specific exception classes and handle each accordingly. However, some situations warrant catching any exception (such as for logging or framework error handling). In PHP 7, these catch-all blocks should catch Throwable instead of Exception.

interface Throwable
{
   public function getMessage(): string;
   public function getCode(): int;
   public function getFile(): string;
   public function getLine(): int;
   public function getTrace(): array;
   public function getTraceAsString(): string;
   public function getPrevious(): Throwable;
   public function __toString(): string;
}

try {

   // Code that may throw an Exception or Error.

} catch (Throwable $t) {

   // Executed only in PHP 7, will not match in PHP 5

} catch (Exception $e) {

   // Executed only in PHP 5, will not be reached in PHP 7

}



?>