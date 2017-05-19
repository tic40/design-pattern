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

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class BookShelf implements Aggregate
{
    private $books;
    private $last = 0;

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book)
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength(): int
    {
        return $this->last;
    }

    public function iterator(): MyIterator
    {
        return new BookShelfIterator($this);
    }
}

class BookShelfIterator implements MyIterator
{
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext(): bool
    {
        return ($this->index < $this->bookShelf->getLength())
            ? true
            : false;
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
