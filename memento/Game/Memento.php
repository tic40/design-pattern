<?php
namespace Game;

class Memento
{
    public $money;
    public $fruits = [];

    public function __construct(int $money)
    {
        $this->money = $money;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function addFruit(string $fruit)
    {
        $this->fruits[] = $fruit;
    }

    public function getFruits(): array
    {
        return $this->fruits;
    }
}
