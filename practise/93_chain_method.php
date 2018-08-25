<?php

/*zce practiceby vuong*/

class Hello{
	public $content;
	public $ketqua;
	public $data;
	
	public function __construct(){
		$this->content= [3, 4, 5];
	}
	
	public function cong(){
	    
	    $this->ketqua = strlen(get_class(new self())) + count($this->content);
	    
	    return $this;
	}
	
	public function nhan(){
	    
	    $this->data = $this->ketqua * $this->ketqua;
	    
	    return $this->data;
	}
}

$demo=new Hello;

echo $demo->cong()->nhan();