<?php
/*bổ sung bài về DI (dùng interface) của ông thầy :-)

 s*/

interface BookSystem{
    public function getbook();
}

class Author implements BookSystem{
	protected $authorName;
	protected $authorEmail;
	public function __construct($name,$email){
		$this->authorName= $name;
		$this->authorEmail= $email;
	}
	public function getAuthorName(){
		return $this->authorName;
	}
	public function getAuthorEmail(){
		return $this->authorEmail;
	}
	
	public function getbook(){
	    return $this->authorEmail;
	}
}

class Book implements BookSystem{
	protected $authorInfo;
	protected $bookName;
	public function __construct($bookName){
		$this->bookName=$bookName;
	}
	public function getBookName(){
		return $this->bookName;
	}

	public function setAuthorInfo(Author $author){
		$this->authorInfo=$author;
	}
	
	public function getAuthorInfo(){
		return $this->authorInfo;
	}
	
	public function getbook(){
	    return $this->bookName;
	}
}


class test{
    
    public $booksystem;
    public function __construct(BookSystem $booksystem){
        $this->booksystem = $booksystem;
    }
    public function getbook(){
        return $this->booksystem->getbook()
        ;
    }
}

$author=new Author('Hello','world@test.com');
$book=new Book('ZCE');
$book->setAuthorInfo($author);

echo "Book Name: ". $book->getBookName();

echo "<br /> Author: ".$book->getAuthorInfo()->getAuthorName();

echo "<br /> Email: ".$book->getAuthorInfo()->getAuthorEmail();

/*dungf interface*/

echo "----------dung interface ne-----------------";

$vidu = new test($author);

echo $vidu->getbook();

echo "--------------------------";

$vidu2 = new test($book);

echo $vidu2->getbook();


//https://3v4l.org/tYE98