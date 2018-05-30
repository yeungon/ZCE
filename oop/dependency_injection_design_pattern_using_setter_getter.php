<?php
/**
* dependency injection thường dùng @constructor, dugnf setter/getter và dùng interface

*/
class Author
{
    private $firstName;
    private $lastName;

     public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class Book
{

    private $title;
    private $author;

    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }
}

$author = new Author('John', 'Doe');
$book = new Book();

$book->setAuthor($author);

$book->setTitle('Some legendary book');

echo $book ->getTitle();

//chuyển sang dùng interface https://3v4l.org/V4bdo