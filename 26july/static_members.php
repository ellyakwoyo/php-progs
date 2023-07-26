<?php

class Book {
    private static $totalBooks = 0;
    private $title;
    private $author;
    private $isbn;

    public function __construct($title, $author, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        self::$totalBooks++; // Increment totalBooks when a new Book object is created
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public static function getTotalBooks() {
        return self::$totalBooks;
    }
}

// Creating book objects
$book1 = new Book('The Catcher in the Rye', 'J.D. Salinger', '978-0-316-76948-7');
$book2 = new Book('To Kill a Mockingbird', 'Harper Lee', '978-0-06-112008-4');
$book3 = new Book('1984', 'George Orwell', '978-0-452-28423-4');

// Accessing book properties
echo "Book 1: {$book1->getTitle()} by {$book1->getAuthor()}, ISBN: {$book1->getISBN()}\n";
echo "Book 2: {$book2->getTitle()} by {$book2->getAuthor()}, ISBN: {$book2->getISBN()}\n";
echo "Book 3: {$book3->getTitle()} by {$book3->getAuthor()}, ISBN: {$book3->getISBN()}\n";

// Accessing the total number of books using a static method
echo "Total Books in the Library: " . Book::getTotalBooks() . "\n";
?>