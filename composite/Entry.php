<?php

abstract class Entry
{
    abstract public function getName(): string;
    abstract public function getSize(): int;

    public function add(Entry $entry)
    {
        throw new RuntimeException();
    }

    public function printList()
    {
        $this->printListWithPrefix("");
    }

    abstract protected function printListWithPrefix(string $prefix);

    public function toString(): string
    {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}
