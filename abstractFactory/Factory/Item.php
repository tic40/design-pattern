<?php
namespace Factory;

abstract class Item
{
    protected $caption;

    public function __construct(string $caption)
    {
        $this->caption = $caption;
    }

    abstract public function makeHTML(): string;
}
