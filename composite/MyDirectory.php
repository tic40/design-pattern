<?php

class MyDirectory extends Entry
{
    private $name;
    private $directory = [];

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
        $size = 0;
        foreach ($this->directory as $v) {
            $size += $v->getSize();
        }
        return $size;
    }

    public function add(Entry $entry): Entry
    {
        $this->directory[] = $entry;
        return $this;
    }

    protected function printListWithPrefix(string $prefix)
    {
        echo $prefix . "/" . $this . PHP_EOL;
        foreach ($this->directory as $v) {
            $v->printListWithPrefix($prefix . "/" . $this->name);
        }
    }
}
