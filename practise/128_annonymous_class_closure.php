<?php
/*
https://3v4l.org/tWUrc

by Vuong Nguyen

The function print_r with PRINT OUT and RETURN the NUMBER OF CHARACTER PRINTED
*/


$a = new class{
    
  public static function handleMe($a, $b, $c){
      
      str_replace($a, $b, $c, $d);
      
      return $d;
  }
    
};

$abc = function() use ($a){
  
  $me = $a::handleMe("o", "a", "I love you so much");
  
  $abc = $me + strlen(gettype($a));
  
  $abc = printf("%d", $abc);
  
  echo $abc + strlen(__FUNCTION__);
  
};


$abc();