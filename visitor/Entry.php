<?php

abstract class Entry implements Element
{
    abstract public function getName(): string;
    abstract public function getSize(): int;

    public function add(Entry $entry)
    {
        throw new Exception();
    }

    public function iterator()
    {
        throw new Exception();
    }

    public function __toString(): string
    {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}
