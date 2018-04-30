<?php
	
class A {
	public $one = 1;

	public function show_one() {
	  echo $this->one .PHP_EOL;
	}
}

$a = new A();
// It could be $a = new A;

$serialized = serialize($a); // Passing the object to be serialized
var_dump($serialized);

/*
Output:
string(26) "O:1:"A":1:{s:3:"one";i:1;}"
*/

echo "\n\n ";
$unserialize = unserialize($serialized);
$unserialize->show_one();

/*
Output:
1
*/
