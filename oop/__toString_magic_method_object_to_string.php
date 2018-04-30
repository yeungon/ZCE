<?php

 class boy {
 public function __toString() {
 return "This is a boy\n";
	 }
 }
 $toby = new boy;
 print $toby;


/*Which of the following allows a programmer to set a string value for the object that will be used if the object is ever used as a string?

__get()

B
  
__call

C
  
__string()

D
  
__toString()

The __toString() method is called to directly echo or print() an object. It allows a programmer to set a string value for the object that will be used if the object is ever used as a string. The example of the __toString() magic method is as follows:


*/


?> 


