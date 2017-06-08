<?php

class MyDirectory extends Entry
{
    private $name;
    private $dir = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        $this->size = 0;
        foreach ($this->dir as $v) {
            $this->size += $v->getSize();
        }
        return $this->size;
    }

    public function add(Entry $entry): Entry
    {
        $this->dir[]= $entry;
        return $this;
    }

    public function iterator(): array
    {
        return $this->dir;
    }

    public function accept(Visitor $v)
    {
        $v->visit($this);
    }
}
