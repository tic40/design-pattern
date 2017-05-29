<?php
namespace Factory;

abstract class Tray extends Item
{
    protected $tray;

    public function __construct(string $caption)
    {
        parent::__construct($caption);
        $this->tray = [];
    }

    public function add(Item $item)
    {
        $this->tray[]= $item;
    }
}
