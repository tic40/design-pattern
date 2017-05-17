<?php
interface Aggregate
{
    public function iterator(): MyIterator;
}

interface MyIterator
{
    public function hasNext(): bool;
    public function next();
}

class Book
{
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}

class BookShelf implements Aggregate
{
    private $books;
    private $last = 0;

    public function getBookAt(int $index): Book {
        return $this->books[$index];
    }

    public function appendBook(Book $book) {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength(): int {
        return $this->last;
    }

    public function iterator(): MyIterator {
        return new BookShelfIterator($this);
    }
}

class BookShelfIterator implements MyIterator {
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf) {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext(): bool {
        return ($this->index < $this->bookShelf->getLength()) ? true : false;
    }

    public function next() {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book("Around the World in 80 Days"));
$bookShelf->appendBook(new Book("Bible"));
$bookShelf->appendBook(new Book("Cinderella"));
$bookShelf->appendBook(new Book("Daddy-Long-Legs"));
$it = $bookShelf->iterator();
while ($it->hasNext()) {
    $book = $it->next();
    echo $book->getName() . PHP_EOL;
}
