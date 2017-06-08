<?php

class File extends Entry
{
    private $name;
    private $size;

    public function File(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function accept(Visitor $v)
    {
        $v->visit($this);
    }
}
