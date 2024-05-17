<?php
class Book {
    
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo $this->name . " borrowed " . $book->getTitle() . "<br>";
        } else {
            echo "No available copies of " . $book->getTitle() . " for " . $this->name . " to borrow.<br>";
        }
    }

    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned " . $book->getTitle() . "\n";
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
//$member1->borrowBook($book1);
//$member2->borrowBook($book2);

// Print Available Copies with their names
// echo "Available copies of \"" . $book1->getTitle() . "\": " . $book1->getAvailableCopies() . "<br>";
// echo "Available copies of \"" . $book2->getTitle() . "\": " . $book2->getAvailableCopies() . "<br>";

// Members returning books
//$member1->returnBook($book1);
//$member2->returnBook($book2);

// Print Available Copies after returning
echo "Available copies of \"" . $book1->getTitle() . "\": " . $book1->getAvailableCopies() . "<br>";
echo "Available copies of \"" . $book2->getTitle() . "\": " . $book2->getAvailableCopies() . "<br>";

?>


